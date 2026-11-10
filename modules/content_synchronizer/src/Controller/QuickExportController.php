<?php

namespace Drupal\content_synchronizer\Controller;

use Drupal\content_synchronizer\Processors\BatchExportProcessor;
use Drupal\content_synchronizer\Processors\ExportEntityWriter;
use Drupal\content_synchronizer\Service\ArchiveDownloader;
use Drupal\content_synchronizer\Service\EntityExportFormBuilder;
use Drupal\Core\Config\Entity\ConfigEntityBundleBase;
use Drupal\Core\Url;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Quick export controller.
 *
 * @package Drupal\content_synchronizer\Controller
 */
class QuickExportController {

  /**
   * The admin url.
   *
   * @var string
   */
  protected $url = '/admin/content';

  /**
   * The APIs Taxonomy ID.
   *
   * @var string
   */
  protected string $apisTaxonomyID;

  /**
   * Launch quick export batch.
   *
   * @param \Symfony\Component\HttpFoundation\Request $request
   *   The request.
   *
   * @return \Symfony\Component\HttpFoundation\RedirectResponse
   *   THe response.
   */
  public function quickExport(Request $request) {

    // Get the destination url.
    $this->url = $request->query->has('destination') ? $request->query->get('destination') : Url::fromRoute('system.admin_content')
      ->toString();

    if ($request->query->has('entityTypeId') && $request->query->has('entityId')) {
      /** @var \Drupal\Core\Entity\EntityInterface $entity */
      $entity = \Drupal::entityTypeManager()
        ->getStorage($request->query->get('entityTypeId'))
        ->load($request->query->get('entityId'));

      if($this->isBlocked($entity->getEntityTypeId()) || $this->isBlocked($entity->bundle())) {
        \Drupal::messenger()->addWarning(t('You have selected an entity that been blocked. Please try again. Blocked entities @entity', [ '@entity' => $entity->bundle() ?? $entity->getEntityTypeId() ]));
        return new RedirectResponse($this->url);
      }
      if(($entity->getEntityTypeId() == 'taxonomy_term' && $this->isBlockedTaxonomyTerm($entity->id())) || ($entity->getEntityTypeId() == 'node' && $entity->bundle() == 'forum' && $this->isBlockedTaxonomyTerm($entity->get('taxonomy_forums')->getString()))) {
        \Drupal::messenger()->addWarning(t('You have selected an entity that been blocked. Please try again. Blocked entities @entity', [ '@entity' => $entity->bundle() ?? $entity->getEntityTypeId() ]));
        return new RedirectResponse($this->url);
      }

      $writer = new ExportEntityWriter();
      $writer->initFromId($entity->getEntityTypeId() . '.' . $entity->id());

      $batchExportProcessor = new BatchExportProcessor($writer);

      if ($entity instanceof ConfigEntityBundleBase) {
        $batchExportProcessor->exportEntities(EntityExportFormBuilder::getEntitiesFromBundle($entity), [
          $this,
          'onBatchEnd',
        ]);
      }
      else {
        $batchExportProcessor->exportEntities([$entity], [$this, 'onBatchEnd']);
      }

      return batch_process('');
    }

    return new RedirectResponse($this->url);
  }

  /**
   * On batch end redirect to the form url.
   *
   * @param string $archiveUri
   *   THe archive to download.
   */
  public function onBatchEnd($archiveUri) {
    \Drupal::service(ArchiveDownloader::SERVICE_NAME)
      ->redirectWithArchivePath($this->url, $archiveUri);
  }

  public function isBlocked(string $entity): bool {
    $blockedTypes = [ "crop", "user", "api", "application", "consumerorg", "product", "event_log", "consumerorg_payment_method", "apic_app_application_subs",
                  "apic_app_application_creds", "avatars_preview", "comment", "contact_message", "search_api_task", "vote", "vote_result", "vote_type" ];
    return in_array($entity, $blockedTypes);
  }

  public function isBlockedTaxonomyTerm(string $taxonomyID): bool {
    if (empty($this->apisTaxonomyID)) {
      $result = \Drupal::entityQuery('taxonomy_term')
            ->condition('name', 'APIs')
            ->condition('parent', 'forums')
            ->accessCheck()
            ->execute();
      $this->apisTaxonomyID = !empty($result) ? array_shift($result) : '';
    }

    if (!empty($this->apisTaxonomyID)) {
      return empty(\Drupal::entityQuery('taxonomy_term')
      ->condition('tid', $this->apisTaxonomyID, 'NOT IN')
      ->condition('tid', $taxonomyID)
      ->condition('parent', $this->apisTaxonomyID, 'NOT IN')
      ->accessCheck()
      ->execute());
    }

    return false;
  }

}

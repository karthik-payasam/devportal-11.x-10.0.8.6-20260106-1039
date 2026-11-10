<?php

namespace Drupal\content_synchronizer\Form;

use Drupal\content_synchronizer\Entity\ExportEntity;
use Drupal\content_synchronizer\Processors\BatchExportProcessor;
use Drupal\content_synchronizer\Processors\ExportEntityWriter;
use Drupal\content_synchronizer\Service\ArchiveDownloader;
use Drupal\content_synchronizer\Service\ExportManagerInterface;
use Drupal\Core\Form\ConfirmFormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\TempStore\PrivateTempStoreFactory;
use Drupal\Core\Url;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Export config form.
 *
 * @package Drupal\content_synchronizer\Form
 */
class ExportConfirmForm extends ConfirmFormBase {

  const FORM_ID = 'content_synchronizer.export_confirm';
  const ARCHIVE_PARAMS = 'archive';

  /**
   * The array of nodes to delete.
   *
   * @var string[][]
   */
  protected $nodeInfo = [];

  /**
   * The tempstore factory.
   *
   * @var \Drupal\Core\TempStore\PrivateTempStoreFactory
   */
  protected $tempStoreFactory;

  /**
   * The node storage.
   *
   * @var \Drupal\Core\Entity\EntityStorageInterface
   */
  protected $manager;

  /**
   * The export manager.
   *
   * @var \Drupal\content_synchronizer\Service\ExportManagerInterface
   */
  protected $exportManager;

  /**
   * The APIs Taxonomy ID.
   *
   * @var string
   */
  protected string $apisTaxonomyID;

  /**
   * ExportConfirmForm constructor.
   *
   * @param \Drupal\Core\TempStore\PrivateTempStoreFactory $tempStoreFactory
   *   The tempstore factory.
   * @param \Drupal\content_synchronizer\Service\ExportManagerInterface $exportManager
   *   The export manager.
   */
  public function __construct(PrivateTempStoreFactory $tempStoreFactory, ExportManagerInterface $exportManager) {
    $this->tempStoreFactory = $tempStoreFactory;
    $this->exportManager = $exportManager;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('tempstore.private'),
      $container->get(ExportManagerInterface::SERVICE_NAME)
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getQuestion() {
    return $this->t('Export entity');
  }

  /**
   * {@inheritdoc}
   */
  public function getConfirmText() {
    return $this->t('Export');
  }

  /**
   * {@inheritdoc}
   */
  public function getCancelUrl() {
    return new Url('system.admin_content');
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return static::FORM_ID;
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['content_synchronizer'] = [
      '#type'  => 'fieldset',
      '#title' => $this->t('Export'),
    ];

    $form['content_synchronizer']['quick_export'] = [
      '#type'        => 'submit',
      '#value'       => $this->t('Export entity'),
      '#description' => $this->t('Download the entity .zip file with dependencies'),
      '#button_type' => 'primary',
      '#submit'      => [[$this, 'onQuickExport']],
    ];

    $exportsListOptions = $this->exportManager->getExportsListOptions();
    if (!empty($exportsListOptions)) {
      $form['content_synchronizer']['exports_list'] = [
        '#type'    => 'checkboxes',
        '#title'   => $this->t('Or add the entity to an existing export'),
        '#options' => $exportsListOptions,
      ];

      $form['content_synchronizer']['add_to_export'] = [
        '#type'   => 'submit',
        '#value'  => $this->t('Add to the export'),
        '#submit' => [[$this, 'onAddToExport']],
      ];
    }

    return $form;
  }

  /**
   * Action on quick export submit action.
   *
   * @param array $form
   *   The form build array.
   * @param \Drupal\Core\Form\FormStateInterface $formState
   *   The form state.
   */
  public function onQuickExport(array &$form, FormStateInterface $formState) {
    $entities = $this->getEntities();
    $blocked = [];
    foreach ($entities as $entity) {
      if($this->isBlocked($entity->getEntityTypeId()) || $this->isBlocked($entity->bundle())) {
        $blocked[] = $entity->bundle() ?? $entity->getEntityTypeId();
      }
      if($entity->getEntityTypeId() == 'taxonomy_term' && $this->isBlockedTaxonomyTerm($entity->id())) {
        throw new \Exception('This taxonomy term has been blocked from being exported.');
      }
      if($entity->getEntityTypeId() == 'node' && $entity->bundle() == 'forum' && $this->isBlockedTaxonomyTerm($entity->get('taxonomy_forums')->getString())) {
        throw new \Exception('This forum has been blocked from being exported.');
      }
    }

    if (!empty($blocked)) {
      \Drupal::messenger()->addWarning(t('You have selected entities that been blocked. Please try again. Blocked entities @entities', [ '@entities' => print_r(implode(", ", array_unique($blocked)), TRUE) ]));
      $formState->setRedirect('system.admin_content');
      return;
    }

    $writer = new ExportEntityWriter();
    $writer->initFromId(time());

    $batchExportProcessor = new BatchExportProcessor($writer);
    $batchExportProcessor->exportEntities($entities, [$this, 'onBatchEnd']);
  }

  /**
   * On batch end redirect to the form url.
   *
   * @param string $archiveUri
   *   THe archive to download.
   */
  public function onBatchEnd($archiveUri) {
    $redirectUrl = $this->getTmpStoredData('url');
    ArchiveDownloader::me()
      ->redirectWithArchivePath($redirectUrl, $archiveUri);
  }

  /**
   * Add entity to an existing entity export.
   *
   * @param array $form
   *   The form build array.
   * @param \Drupal\Core\Form\FormStateInterface $formState
   *   The form state.
   */
  public function onAddToExport(array &$form, FormStateInterface $formState) {
    $exportsList = ExportEntity::loadMultiple($formState->getValue('exports_list'));

    $entities = $this->getEntities();
    $blocked = [];
    foreach ($entities as $entity) {
      if($this->isBlocked($entity->getEntityTypeId()) || $this->isBlocked($entity->bundle())) {
        $blocked[] = $entity->bundle() ?? $entity->getEntityTypeId();
      }
      if($entity->getEntityTypeId() == 'taxonomy_term' && $this->isBlockedTaxonomyTerm($entity->id())) {
        throw new \Exception('This taxonomy term has been blocked from being exported.');
      }
      if($entity->getEntityTypeId() == 'node' && $entity->bundle() == 'forum' && $this->isBlockedTaxonomyTerm($entity->get('taxonomy_forums')->getString())) {
        throw new \Exception('This forum has been blocked from being exported.');
      }
    }

    if (!empty($blocked)) {
      \Drupal::messenger()->addWarning(t('You have selected entities that been blocked. Please try again. Blocked entities @entities', [ '@entities' => print_r(implode(", ", array_unique($blocked)), TRUE) ]));
      $formState->setRedirect('system.admin_content');
      return;
    }

    foreach ($entities as $entity) {
      /** @var \Drupal\content_synchronizer\Entity\ExportEntity $export */
      foreach ($exportsList as $export) {
        $export->addEntity($entity);
      }
    }
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

  public function filter(string $entity): bool {
    return in_array($entity, $blockedTypes);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
  }

  /**
   * Return the list of entities to export.
   *
   * @return array|\Drupal\Core\Entity\EntityInterface[]
   *   The entities.
   */
  protected function getEntities() {
    $entities = [];

    foreach ($this->getTmpStoredData('entities') as $entityTypeId => $entitiesIds) {
      $entities += \Drupal::entityTypeManager()
        ->getStorage($entityTypeId)
        ->loadMultiple($entitiesIds);
    }

    return $entities;
  }

  /**
   * Return the stored element by key.
   *
   * @param string $key
   *   The key.
   *
   * @return mixed
   *   The value.
   */
  protected function getTmpStoredData($key) {
    return $this->tempStoreFactory->get(static::FORM_ID)
      ->get(\Drupal::currentUser()->id())[$key];
  }

}

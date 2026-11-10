<?php

namespace Drupal\content_synchronizer\Service;

use Drupal\Core\Config\Entity\ConfigEntityBundleBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * The entity export form builder.
 */
interface EntityExportFormBuilderInterface {

  /**
   * Service name.
   *
   * @const string
   */
  public const SERVICE_NAME = "content_synchronizer.entity_export_form_builder";

  /**
   * Add the export form in the entity edit form, if the entity is exportable.
   */
  public function addExportFields(array &$form, FormStateInterface $formState);

  /**
   * Add entity to an existing entity export.
   *
   * @param array $form
   *   The form build array.
   * @param \Drupal\Core\Form\FormStateInterface $formState
   *   The form state.
   */
  public static function onAddToExport(array &$form, FormStateInterface $formState);

  /**
   * Get the list of entities from a bundle entity.
   *
   * @param \Drupal\Core\Config\Entity\ConfigEntityBundleBase $entity
   *   The bundle entity.
   *
   * @return \Drupal\Core\Entity\EntityInterface[]|null
   *   The entities of the bundle.
   */
  public static function getEntitiesFromBundle(ConfigEntityBundleBase $entity);

  /**
   * Create an export and add Menu Items.
   *
   * @param array $form
   *   The form.
   * @param \Drupal\Core\Form\FormStateInterface $formState
   *   The formstate.
   *
   * @throws \Drupal\Core\Entity\EntityStorageException
   */
  public static function onAddMenuToExport(array &$form, FormStateInterface $formState);

}

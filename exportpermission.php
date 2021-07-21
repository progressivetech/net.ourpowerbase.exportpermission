<?php

define('EXPORT_PERMISSION_NAME', 'access export menu');

require_once 'exportpermission.civix.php';

function exportpermission_civicrm_permission(&$permissions) {
  $prefix = ts('CiviCRM Export Permissions') . ': ';
  $permissions[EXPORT_PERMISSION_NAME] = array(
    $prefix . ts('access export menu'),
    ts('Access export drop down menu item from actions menu after search'),
  );
}

function exportpermission_civicrm_searchTasks($objectName, &$tasks) {
  if (CRM_Core_Permission::check(EXPORT_PERMISSION_NAME)) {
    // If they have the proper permission, return without doing anything.
    return;
  }
  unset($tasks[CRM_Core_Task::TASK_EXPORT]);
}

/**
 * Implements hook_civicrm_config().
 */
function exportpermission_civicrm_config(&$config) {
  _exportpermission_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 */
function exportpermission_civicrm_xmlMenu(&$files) {
  _exportpermission_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 */
function exportpermission_civicrm_install() {
  _exportpermission_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_postInstall().
 */
function exportpermission_civicrm_postInstall() {
  _exportpermission_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 */
function exportpermission_civicrm_uninstall() {
  _exportpermission_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 */
function exportpermission_civicrm_enable() {
  _exportpermission_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 */
function exportpermission_civicrm_disable() {
  _exportpermission_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 */
function exportpermission_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _exportpermission_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 */
function exportpermission_civicrm_managed(&$entities) {
  _exportpermission_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 */
function exportpermission_civicrm_angularModules(&$angularModules) {
  _exportpermission_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 */
function exportpermission_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _exportpermission_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

// --- Functions below this ship commented out. Uncomment as required. ---

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_preProcess
 *
function exportpermission_civicrm_preProcess($formName, &$form) {

} // */

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_navigationMenu
 *
function exportpermission_civicrm_navigationMenu(&$menu) {
  _exportpermission_civix_insert_navigation_menu($menu, NULL, array(
    'label' => ts('The Page', array('domain' => 'net.ourpowerbase.exportpermission')),
    'name' => 'the_page',
    'url' => 'civicrm/the-page',
    'permission' => 'access CiviReport,access CiviContribute',
    'operator' => 'OR',
    'separator' => 0,
  ));
  _exportpermission_civix_navigationMenu($menu);
} // */

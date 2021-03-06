<?php

require_once 'ovhmailinglistapi.civix.php';

/**
 * Implementation of hook_civicrm_config
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function ovhmailinglistapi_civicrm_config(&$config) {
  _ovhmailinglistapi_civix_civicrm_config($config);
}

/**
 * Implementation of hook_civicrm_xmlMenu
 *
 * @param $files array(string)
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_xmlMenu
 */
function ovhmailinglistapi_civicrm_xmlMenu(&$files) {
  _ovhmailinglistapi_civix_civicrm_xmlMenu($files);
}

/**
 * Implementation of hook_civicrm_install
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function ovhmailinglistapi_civicrm_install() {
  _ovhmailinglistapi_civix_civicrm_install();
}

/**
 * Implementation of hook_civicrm_uninstall
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_uninstall
 */
function ovhmailinglistapi_civicrm_uninstall() {
  _ovhmailinglistapi_civix_civicrm_uninstall();
}

/**
 * Implementation of hook_civicrm_enable
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function ovhmailinglistapi_civicrm_enable() {
  _ovhmailinglistapi_civix_civicrm_enable();
}

/**
 * Implementation of hook_civicrm_disable
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_disable
 */
function ovhmailinglistapi_civicrm_disable() {
  _ovhmailinglistapi_civix_civicrm_disable();
}

/**
 * Implementation of hook_civicrm_upgrade
 *
 * @param $op string, the type of operation being performed; 'check' or 'enqueue'
 * @param $queue CRM_Queue_Queue, (for 'enqueue') the modifiable list of pending up upgrade tasks
 *
 * @return mixed  based on op. for 'check', returns array(boolean) (TRUE if upgrades are pending)
 *                for 'enqueue', returns void
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_upgrade
 */
function ovhmailinglistapi_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _ovhmailinglistapi_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implementation of hook_civicrm_managed
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_managed
 */
function ovhmailinglistapi_civicrm_managed(&$entities) {
  _ovhmailinglistapi_civix_civicrm_managed($entities);
}

/**
 * Implementation of hook_civicrm_caseTypes
 *
 * Generate a list of case-types
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_caseTypes
 */
function ovhmailinglistapi_civicrm_caseTypes(&$caseTypes) {
  _ovhmailinglistapi_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implementation of hook_civicrm_alterSettingsFolders
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_alterSettingsFolders
 */
function ovhmailinglistapi_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _ovhmailinglistapi_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

function _ovhmailinglistapi_is_civirules_installed() {
  $installed = FALSE;
  try {
    $extensions = civicrm_api3('Extension', 'get', array('options' => array('limit' => 0)));
    foreach($extensions['values'] as $ext) {
      if ($ext['key'] == 'org.civicoop.civirules' && ($ext['status'] == 'installed' || $ext['status'] == 'disabled')) {
        $installed = TRUE;
      }
    }
    return $installed;
  }
  catch (Exception $e) {
    return FALSE;
  }
  return FALSE;
}

<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */




global $mod_strings, $app_strings;
global $mod_strings;
if (ACLController::checkAccess('it_ServiceNotRegistered', 'edit', true)) {
    $module_menu[]=array("index.php?module=it_ServiceNotRegistered&action=EditView&return_module=it_ServiceNotRegistered&return_action=DetailView", $mod_strings['LNK_NEW_NREG'],"Add");
}
if (ACLController::checkAccess('it_serviceElectronic', 'edit', true)) {
    $module_menu[]=array("index.php?module=it_serviceElectronic&action=EditView&return_module=it_serviceElectronic&return_action=DetailView", $mod_strings['LNK_NEW_ELE'],"Add");
    
}
$module_menu[]=array('index.php?module=it_Services', "-------------","");

if (ACLController::checkAccess('it_Services', 'list', true)) {
    $module_menu[]=array("index.php?module=it_Services&action=index&return_module=it_Services&return_action=DetailView", $mod_strings['LNK_SERVICES_LIST'],"List");
}

if (ACLController::checkAccess('it_ServiceNotRegistered', 'list', true)) {
    $module_menu[]=array("index.php?module=it_ServiceNotRegistered&action=index&return_module=it_ServiceNotRegistered&return_action=DetailView", $mod_strings['LNK_NREG_LIST'],"List");
}
if (ACLController::checkAccess('it_serviceElectronic', 'list', true)) {
    $module_menu[]=array("index.php?module=it_serviceElectronic&action=index&return_module=it_serviceElectronic&return_action=DetailView", $mod_strings['LNK_ELE_LIST'],"List");
}
$module_menu[]=array("index.php?module=it_Services", "-------------","");
if (ACLController::checkAccess('it_ServiceNotRegistered', 'import', true)) {
    $module_menu[]=array("index.php?module=Import&action=Step1&import_module=it_ServiceNotRegistered&return_module=it_ServiceNotRegistered&return_action=index", $mod_strings['LNK_IMPORT_NREG'],"Import", 'List');
}
if (ACLController::checkAccess('it_ServiceNotRegistered', 'import', true)) {
    $module_menu[]=array("index.php?module=Import&action=Step1&import_module=it_ServiceNotRegistered&return_module=it_ServiceNotRegistered&return_action=index", $mod_strings['LNK_IMPORT_NREG_INFOSYS'],"Import", 'List');
}
if (ACLController::checkAccess('it_serviceElectronic', 'import', true)) {
    $module_menu[]=array("index.php?module=Import&action=Step1&import_module=it_serviceElectronic&return_module=it_serviceElectronic&return_action=index", $mod_strings['LNK_IMPORT_ELE'],"Import", 'List');
}

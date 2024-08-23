<?php
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

 $dictionary['it_ServiceNotRegistered'] = array(
  'table' => 'it_servicenotregistered',
  'audited' => true,
  'inline_edit' => false,
  'duplicate_merge' => true,
  'fields' => array (
  'servicetype' => array (
  'required' => true,
  'name' => 'servicetype',
  'vname' => 'LBL_SERVICETYPE',
  'type' => 'enum',
  'massupdate' => 1,
  'no_default' => false,
  'comments' => '',
  'help' => '',
  'importable' => 'true',
  'duplicate_merge' => 'disabled',
  'duplicate_merge_dom_value' => '0',
  'audited' => true,
  'inline_edit' => false,
  'reportable' => true,
  'unified_search' => true,
  'options' => 'service_type',
  'merge_filter' => 'disabled',
  'len' => '255',
  'size' => '20',
  'default' => 'NREG',
  ),
  'name' => array (
  'required' => true,
  'name' => 'name',
  'vname' => 'LBL_SERVICENAME',
  'type' => 'dynamicenum',
  'massupdate' => 1,
  'no_default' => false,
  'comments' => '',
  'help' => '',
  'importable' => 'true',
  'duplicate_merge' => 'disabled',
  'duplicate_merge_dom_value' => '0',
  'audited' => true,
  'inline_edit' => false,
  'reportable' => true,
  'unified_search' => true,
  'dbType' => 'enum',
  'options' => 'service_name',
  'parentenum' => 'servicetype',
  'merge_filter' => 'disabled',
  'len' => '255',
  'size' => '20',
  'default' => 'NREG_?',
  ),
'servicesadditional' => array (
  'required' => false,
  'name' => 'servicesadditional',
  'vname' => 'LBL_SERVICESADDITIONAL',
  'type' => 'dynamicenum',
  'massupdate' => 0,
  'no_default' => false,
  'comments' => '',
  'help' => '',
  'importable' => 'true',
  'duplicate_merge' => 'disabled',
  'duplicate_merge_dom_value' => '0',
  'audited' => false,
  'inline_edit' => true,
  'reportable' => true,
  'unified_search' => false,
  'merge_filter' => 'disabled',
  'options' => 'service_add',
  'studio' => 'visible',
  'dbType' => 'enum',
  'parentenum' => 'name',
  'len' => '255',
  'size' => '20',
),
'reasonforreporting' => array (
  'required' => true,
  'name' => 'reasonforreporting',
  'vname' => 'LBL_REASONFORREPORTING',
  'type' => 'dynamicenum',
  'massupdate' => 0,
  'no_default' => false,
  'comments' => '',
  'help' => '',
  'importable' => 'true',
  'duplicate_merge' => 'disabled',
  'duplicate_merge_dom_value' => '0',
  'audited' => false,
  'inline_edit' => false,
  'reportable' => true,
  'unified_search' => true,
  'merge_filter' => 'disabled',
  'options' => 'service_reason',
  'studio' => 'visible',
  'dbType' => 'enum',
  'parentenum' => 'name',
  'len' => '255',
  'size' => '20',
),
'amount' => array (
  'required' => false,
  'name' => 'amount',
  'vname' => 'LBL_AMOUNT',
  'type' => 'int',
  'massupdate' => 0,
  'no_default' => false,
  'comments' => '',
  'help' => '',
  'importable' => 'true',
  'duplicate_merge' => 'disabled',
  'duplicate_merge_dom_value' => '0',
  'audited' => false,
  'inline_edit' => true,
  'reportable' => true,
  'unified_search' => false,
  'merge_filter' => 'disabled',
  'len' => '255',
  'size' => '20',
  'enable_range_search' => false,
  'disable_num_format' => '',
  'min' => false,
  'max' => false,
),
'content' => array (
  'required' => false,
  'name' => 'content',
  'vname' => 'LBL_CONTENT',
  'type' => 'varchar',
  'massupdate' => 0,
  'no_default' => false,
  'comments' => '',
  'help' => '',
  'importable' => 'true',
  'duplicate_merge' => 'disabled',
  'duplicate_merge_dom_value' => '0',
  'audited' => false,
  'inline_edit' => true,
  'reportable' => true,
  'unified_search' => false,
  'merge_filter' => 'disabled',
  'len' => '255',
  'size' => '30',
  'enable_range_search' => false,
  'disable_num_format' => '',
  'min' => false,
  'max' => false,
),
'servicefee' => array (
  'required' => false,
  'name' => 'servicefee',
  'vname' => 'LBL_SERVICEFEE',
  'type' => 'int',
  'massupdate' => 0,
  'no_default' => false,
  'comments' => '',
  'help' => '',
  'importable' => 'true',
  'duplicate_merge' => 'disabled',
  'duplicate_merge_dom_value' => '0',
  'audited' => false,
  'inline_edit' => true,
  'reportable' => true,
  'unified_search' => false,
  'merge_filter' => 'disabled',
  'len' => '6',
  'size' => '6',
  'enable_range_search' => false,
  'disable_num_format' => '',
  'min' => false,
  'max' => false,
),
'externalnumber' => array (
  'required' => false,
  'name' => 'externalnumber',
  'vname' => 'LBL_EXTERNALNUMBER',
  'type' => 'varchar',
  'massupdate' => 0,
  'no_default' => false,
  'comments' => '',
  'help' => '',
  'importable' => 'true',
  'duplicate_merge' => 'disabled',
  'duplicate_merge_dom_value' => '0',
  'audited' => false,
  'inline_edit' => true,
  'reportable' => true,
  'unified_search' => false,
  'merge_filter' => 'disabled',
  'len' => '20',
  'size' => '30',
  'enable_range_search' => true,
  'disable_num_format' => '',
  'min' => false,
  'max' => false,
),
'claims' => array(
  'name' => 'claims',
  'type' => 'link',
  'relationship' => 'service_nreg_claims',
  'module' => 'it_Claims',
  'bean_name' => 'it_Claims',
  'source' => 'non-db',
  'vname' => 'LBL_PROCESS_TITLE',
),
),
  'relationships' => array (
    'service_nreg_claims' => array(
      'rhs_module' => 'it_Claims',
      'rhs_table' => 'it_claims',
      'rhs_key' => 'service_id',
      'lhs_module' => 'it_ServiceNotRegistered',
      'lhs_table' => 'it_servicenotregistered',
      'lhs_key' => 'id',
      'relationship_type' => 'one-to-one',
  ),
),
  'optimistic_locking' => true,
  'unified_search' => true,
);
if (!class_exists('VardefManager')) {
      require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('it_ServiceNotRegistered', 'it_ServiceNotRegistered', array('basic','assignable','security_groups'));

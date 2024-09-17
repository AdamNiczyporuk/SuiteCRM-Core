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

$dictionary['dict_ProdClaimDesc'] = array(
    'table' => 'dict_ProdClaimDesc',
    'audited' => true,
    'inline_edit' => true,
    'duplicate_merge' => true,
    'fields' => array (
      'id' => array(
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
        'reportable' => true,
        'comment' => 'Unique identifier',
        'inline_edit' => false,
    ),
    'name' => array(
        'name' => 'name',
        'vname' => 'LBL_NAME',
        'type' => 'name',
        'link' => true, // bug 39288
        'dbType' => 'varchar',
        'len' => 255,
        'unified_search' => true,
        'full_text_search' => array('boost' => 3),
        'required' => true,
        'importable' => 'required',
        'duplicate_merge' => 'enabled',
        //'duplicate_merge_dom_value' => '3',
        'merge_filter' => 'selected',
    ),
    'date_entered' => array(
        'name' => 'date_entered',
        'vname' => 'LBL_DATE_ENTERED',
        'type' => 'datetime',
        'group' => 'created_by_name',
        'comment' => 'Date record created',
        'enable_range_search' => true,
        'options' => 'date_range_search_dom',
        'inline_edit' => false,
    ),
    'date_modified' => array(
        'name' => 'date_modified',
        'vname' => 'LBL_DATE_MODIFIED',
        'type' => 'datetime',
        'group' => 'modified_by_name',
        'comment' => 'Date record last modified',
        'enable_range_search' => true,
        'options' => 'date_range_search_dom',
        'inline_edit' => false,
    ),
    'modified_user_id' => array(
        'name' => 'modified_user_id',
        'rname' => 'user_name',
        'id_name' => 'modified_user_id',
        'vname' => 'LBL_MODIFIED',
        'type' => 'assigned_user_name',
        'table' => 'users',
        'isnull' => 'false',
        'group' => 'modified_by_name',
        'dbType' => 'id',
        'reportable' => true,
        'comment' => 'User who last modified record',
        'massupdate' => false,
        'inline_edit' => false,
    ),
    'modified_by_name' => array(
        'name' => 'modified_by_name',
        'vname' => 'LBL_MODIFIED_NAME',
        'type' => 'relate',
        'reportable' => false,
        'source' => 'non-db',
        'rname' => 'user_name',
        'table' => 'users',
        'id_name' => 'modified_user_id',
        'module' => 'Users',
        'link' => 'modified_user_link',
        'duplicate_merge' => 'disabled',
        'massupdate' => false,
        'inline_edit' => false,
    ),
    'created_by' => array(
        'name' => 'created_by',
        'rname' => 'user_name',
        'id_name' => 'modified_user_id',
        'vname' => 'LBL_CREATED',
        'type' => 'assigned_user_name',
        'table' => 'users',
        'isnull' => 'false',
        'dbType' => 'id',
        'group' => 'created_by_name',
        'comment' => 'User who created record',
        'massupdate' => false,
        'inline_edit' => false,
    ),
    'created_by_name' => array(
        'name' => 'created_by_name',
        'vname' => 'LBL_CREATED',
        'type' => 'relate',
        'reportable' => false,
        'link' => 'created_by_link',
        'rname' => 'user_name',
        'source' => 'non-db',
        'table' => 'users',
        'id_name' => 'created_by',
        'module' => 'Users',
        'duplicate_merge' => 'disabled',
        'importable' => 'false',
        'massupdate' => false,
        'inline_edit' => false,
    ),
    'description' => array(
        'name' => 'description',
        'vname' => 'LBL_DESCRIPTION',
        'type' => 'text',
        'comment' => 'Full text of the note',
        'rows' => 6,
        'cols' => 80,
    ),
    'deleted' => array(
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
        'reportable' => false,
        'comment' => 'Record deletion indicator'
    ),
  'aos_product_id' => 
  array (
    'required' => true,
    'name' => 'aos_product_id',
    'vname' => 'LBL_AOS_PRODUCT_ID',
    'type' => 'varchar',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => '',
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '255',
    'size' => '20',
  ),
  'number_item' =>
  array (
    'required' => false,
    'name' => 'number_item',
    'vname' => 'LBL_NUMBER_ITEM',
    'type' => 'varchar',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => '',
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '255',
    'size' => '20',
  ),
  'reported_desc' =>
  array (
    'required' => false,
    'name' => 'reported_desc',
    'vname' => 'LBL_REPORTED_DESC',
    'type' => 'varchar',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => '',
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '255',
    'size' => '20',
  ),
  'days_i_step_consideration' =>
  array (
    'required' => false,
    'name' => 'days_i_step_consideration',
    'vname' => 'LBL_DAYS_I_STEP_CONSIDERATION',
    'type' => 'varchar',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => '',
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '255',
    'size' => '20',
  ),
  'days_ii_step_consideration' =>
  array (
    'required' => false,
    'name' => 'days_ii_step_consideration',
    'vname' => 'LBL_DAYS_II_STEP_CONSIDERATION',
    'type' => 'varchar',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => '',
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '255',
    'size' => '20',
  ),
  'days_ii_step_reported' =>
  array (
    'required' => false,
    'name' => 'days_ii_step_reported',
    'vname' => 'LBL_DAYS_II_STEP_REPORTED',
    'type' => 'varchar',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => '',
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '255',
    'size' => '20',
  ),
),
    'relationships' => array (
),
    'optimistic_locking' => true,
    'unified_search' => true,
);
if (!class_exists('VardefManager')) {
        require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('dict_ProdClaimDesc', 'dict_ProdClaimDesc', array('basic','assignable','security_groups'));

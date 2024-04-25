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

 $module_name = 'it_Incidents';
 $_object_name = 'it_incidents';
 $viewdefs[$module_name]['EditView'] = array(
     'templateMeta' => array(
         'maxColumns' => '2',
         'widths' => array(
             array('label' => '10', 'field' => '30'),
             array('label' => '10', 'field' => '30')
         ),
     ),
 
     'panels' => array(
         'LBL_BASIC' => array(
             array(
                 array('name' => 'name', 'type' => 'readonly',),
                 array('name' => '_number','type' => 'readonly'),
             ),
             array(
                 array('name' => 'service_poi', 'type' => 'readonly'),
                 array('name' => 'service_start_date', 'type' => 'readonly'),
             ),
             array(
                 array('name' => 'source_incident', 'type' => 'readonly'),
                 array('name' => 'required_end_date','type' => 'readonly'),
             ),
             array(
                 array('name' => 'filing_date', 'type' => 'readonly'),
                 array('name' => 'entry_date', 'type' => 'readonly'),
             ),
             array(
                 array('name' => 'description', 'type' => 'readonly')
             ),          
         ),
 
         'LBL_APPLICANTS' => array(
             array(
                 array('name' => 'applicants_name', 'type' => 'readonly'),
                 array('name' => 'applicants_name2', 'type' => 'readonly'),
             ),
             array(
                 array('name' => 'applicants_country', 'type' => 'readonly'),
                 array('name' => 'applicants_region', 'type' => 'readonly'),
             ),
             array(
                 array('name' => 'applicants_postal_code', 'type' => 'readonly'),
                 array('name' => 'applicants_city', 'type' => 'readonly'),
             ),
             array(
                 array('name' => 'applicants_street', 'type' => 'readonly'),
                 array('name' => 'applicants_house_number', 'type' => 'readonly'),
             ),
             array(
                 array('name' => 'applicants_local_number', 'type' => 'readonly'),
                 array('name' => 'applicants_city', 'type' => 'readonly'),
             ),
             array(
                 array('name' => 'applicants_phone', 'type' => 'readonly'),
                 array('name' => 'applicants_email', 'type' => 'readonly'),
             ),
             array(
                 array('name' => 'applicants_signature', 'type' => 'readonly'),
                 array('name' => 'invoice_number', 'type' => 'readonly'),
             ),
             array(
                 array('name' => 'applicants_taxid', 'type' => 'readonly'),
             ),
         ),   
           
         'LBL_PROCESS' => array(
             array(
                 array('name' => 'section', 'type' => 'readonly'),
                 array('name' => 'assigned_user_name', 'type' => 'readonly'),
             ),
             array(
                 array('name' => 'priority', 'type' => 'readonly'),
                 array('name' => 'status', 'type' => 'readonly'),
             ),
             array(
                 array('name' => 'response_method', 'type' => 'readonly'),
                 array('name' => 'resolution', 'type' => 'readonly'),
             ),
         ),
     ),
 );

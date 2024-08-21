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

require_once('include/SugarObjects/templates/incident/Incident.php');
require_once('include/SugarLogger/SugarLogger.php');
class it_Incidents extends Incident
{
    
    public $new_schema = true;
    public $module_dir = 'it_Incidents';
    public $object_name = 'it_Incidents';
    public $table_name = 'it_Incidents';
    public $importable = false;

    public $id;
    public $name;
    public $date_entered;
    public $date_modified;
    public $modified_user_id;
    public $modified_by_name;
    public $created_by;
    public $created_by_name;
    public $description;
    public $deleted;
    public $created_by_link;
    public $modified_user_link;
    public $assigned_user_id;
    public $assigned_user_name;
    public $assigned_user_link;
    public $SecurityGroups;
    public $source_incident;
    public $filing_date;
    public $required_end_date;
    public $status;
    public $priority;
    public $entry_date;
    public $service_poi;
    public $service_start_date;
    public $applicants_name;
    public $applicants_name2;
    public $applicants_country;
    public $applicants_street;
    public $applicants_house_number;
    public $applicants_local_number;
    public $applicants_region;
    public $applicants_phone;
    public $applicants_postal_code;
    public $applicants_email;
    public $applicants_city;
    public $applicants_taxid;
    public $invoice_number;
    public $applicants_signature;
    public $response_method;
    public $section;
    public $resolution;
    public $_number;
	
    public function bean_implements($interface)
    {
       
        switch($interface)
        {
            case 'ACL':
                return true;
        }
        
        return false;
    }
  
    public function create_new_list_query(
        $order_by,
        $where,
        $filter = array(),
        $params = array(),
        $show_deleted = 0,
        $join_type = 'UNION ALL',
        $return_array = false,
        $parentbean = null,
        $singleSelect = false,
        $ifListForExport = false
    )
    {
        
        
        
        $db = DBManagerFactory::getInstance();
        
        // Zdefiniuj zapytanie SQL dla pobrania danych z modułu Calim
        $queryIt_Claim = "SELECT id,name,_number,status,priority,resolution,assigned_user_id FROM it_Claims WHERE deleted = 0" ;
        
        // Zdefiniuj zapytanie SQL dla pobrania danych z modułu Compaliant
        $queryIt_Complaiant = "SELECT id,name,_number,status,priority,resolution,assigned_user_id FROM it_Complaiants WHERE deleted = 0";
       
        // Połącz oba zapytania za pomocą UNION
        $queryUnion =  $queryIt_Claim ." UNION ". $queryIt_Complaiant;
        
        //Tworzenie tablicy
        $return_array=array();
        //Wkładanie zapytania do tablicy
        $return_array['select'] = $queryUnion;

       //  LoggerManager::getLogger()->error('test2');
        
       
        return $return_array;
    } 

}

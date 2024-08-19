<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2019 SalesAgility Ltd.
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


if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}
// Check if the list_strings array exists to avoid overwriting it
if (!isset($app_list_strings)) {
    $app_list_strings = array();
}

// it
$app_list_strings['service_type']['REG'] = 'Rejestrowana';
$app_list_strings['service_type']['NREG'] = 'Nie rejestrowana';
$app_list_strings['service_type']['OD'] = 'Kraj Zagranica';
$app_list_strings['service_type']['DO'] = 'Zagranica Kraj';
$app_list_strings['service_type']['ELE'] = 'Elektroniczne';
$app_list_strings['service_type']['PAL'] = 'Paletowa';
$app_list_strings['service_type']['FIN'] = 'Finansowa';
$app_list_strings['service_type']['TRA'] = 'Handlowa';



// NREG 
$app_list_strings['service_name']['NREG_?'] = '';
$app_list_strings['service_name']['NREG_842'] = 'przesyłka marketingowa [842]';
$app_list_strings['service_name']['NREG_840E'] = 'przesyłka firmowa nierejestrowana [840E]';
$app_list_strings['service_name']['NREG_840'] = 'przesyłka hybrydowa nierejestrowana [840]';
$app_list_strings['service_name']['NREG_843'] = 'druki bezadresowe [843]';
$app_list_strings['service_name']['NREG_760'] = 'poczta firmowa [760]';
$app_list_strings['service_name']['NREG_Z001'] = 'mailing profilowany [Z001]';
$app_list_strings['service_name']['NREG_849'] = 'przesyłka reklamowa [849]';
$app_list_strings['service_name']['NREG_Z002'] = 'list biznesowy [Z002]';
$app_list_strings['service_name']['NREG_Z003'] = 'przesyłka handlowa [Z003]';
$app_list_strings['service_name']['NREG_Z004'] = 'kampania bezadresowa [Z004]';


$app_list_strings['service_add']['NREG_840_'] = '';
$app_list_strings['service_add']['NREG_840_ADDE'] = 'elektroniczna archiwizacja korespondencji';
$app_list_strings['service_add']['NREG_840_ADDA'] = 'automatyczne kopertowanie dodatkowych insertów';
$app_list_strings['service_add']['NREG_843_'] = '';
$app_list_strings['service_add']['NREG_843_ADDD'] = 'sprawdzenie doręczenia druków bezadresowych przy udziale Klienta';
$app_list_strings['service_add']['NREG_843_ADDR'] = 'sporządzenie raportu z wykonania zlecenia';
$app_list_strings['service_add']['NREG_843_ADDO'] = 'odbiór druków z miejsca wskazanego przez nadawcę';
$app_list_strings['service_add']['NREG_843_ADDP'] = 'przygotowanie i adresowanie pakietów z drukami bezadresowymi';

$app_list_strings['service_reason']['NREG_842_U'] = 'ubytek';
$app_list_strings['service_reason']['NREG_842_S'] = 'uszkodzenie';
$app_list_strings['service_reason']['NREG_842_N'] = 'niewykonanie(utrata)';
$app_list_strings['service_reason']['NREG_840E_O'] = 'opóźnienie';
$app_list_strings['service_reason']['NREG_840E_Z'] = 'zaginięcie';
$app_list_strings['service_reason']['NREG_840_Z'] = 'zaginięcie';
$app_list_strings['service_reason']['NREG_840_U'] = 'uszkodzenie';
$app_list_strings['service_reason']['NREG_840_O'] = 'opóźnienie';
$app_list_strings['service_reason']['NREG_840_D'] = 'dostarczenie pod niewłaściwy adres';
$app_list_strings['service_reason']['NREG_840_B'] = 'błędny zwrot przesyłki';
$app_list_strings['service_reason']['NREG_843_NU'] = 'niewykonanie usługi';
$app_list_strings['service_reason']['NREG_843_NW'] = 'nienależyte wykonanie usługi';
$app_list_strings['service_reason']['NREG_760_NU'] = 'niewykonanie usługi';
$app_list_strings['service_reason']['NREG_760_NW'] = 'nienależyte wykonanie usługi';
$app_list_strings['service_reason']['NREG_Z001_NU'] = 'niewykonanie usługi';
$app_list_strings['service_reason']['NREG_Z001_NW'] = 'nienależyte wykonanie usługi';
$app_list_strings['service_reason']['NREG_Z002_NU'] = 'niewykonanie usługi';
$app_list_strings['service_reason']['NREG_Z002_NW'] = 'nienależyte wykonanie usługi';
$app_list_strings['service_reason']['NREG_Z003_NU'] = 'niewykonanie usługi';
$app_list_strings['service_reason']['NREG_Z003_NW'] = 'nienależyte wykonanie usługi';
$app_list_strings['service_reason']['NREG_849_NU'] = 'niewykonanie usługi';
$app_list_strings['service_reason']['NREG_849_NW'] = 'nienależyte wykonanie usługi';
$app_list_strings['service_reason']['NREG_Z004_NU'] = 'niewykonanie usługi';
$app_list_strings['service_reason']['NREG_Z004_NW'] = 'nienależyte wykonanie usługi';


$app_list_strings['service_reason2']['NREG_'] = '';
$app_list_strings['service_reason2']['NREG_842_U'] = 'ubytek';
$app_list_strings['service_reason2']['NREG_842_S'] = 'uszkodzenie';
$app_list_strings['service_reason2']['NREG_842_N'] = 'niewykonanie(utrata)';
$app_list_strings['service_reason2']['NREG_840E_O'] = 'opóźnienie';
$app_list_strings['service_reason2']['NREG_840E_Z'] = 'zaginięcie';
$app_list_strings['service_reason2']['NREG_843_NU'] = 'niewykonanie usługi';
$app_list_strings['service_reason2']['NREG_843_NW'] = 'nienależyte wykonanie usługi';
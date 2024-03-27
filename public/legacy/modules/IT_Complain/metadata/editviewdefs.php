<?php
$module_name = 'IT_Complain';
$_object_name = 'it_complain';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'type' => 'readonly',
          ),
          1 => 
          array (
            'name' => '_number',
            'type' => 'readonly',
          ),
        ),
        1 => 
        array (
          0 => 'priority',
          1 => 'status',
        ),
        2 => 
        array (
          0 => 'description',
          1 => 'resolution',
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'applicants_name',
            'label' => 'LBL_APPLICANTS_NAME',
          ),
          1 => 
          array (
            'name' => 'applicants_name2',
            'label' => 'LBL_APPLICANTS_NAME2',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'applicants_email',
            'label' => 'LBL_APPLICANTS_EMAIL',
          ),
          1 => 
          array (
            'name' => 'applicants_signature',
            'comment' => 'Sender signature',
            'label' => 'LBL_APPLICANTS_SIGNATURE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'applicants_country',
            'label' => 'LBL_APPLICANTS_COUNTRY',
          ),
          1 => 
          array (
            'name' => 'applicants_city',
            'label' => 'LBL_APPLICANTS_CITY',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'applicants_region',
            'label' => 'LBL_APPLICANTS_REGION',
          ),
          1 => 
          array (
            'name' => 'applicants_street',
            'label' => 'LBL_APPLICANTS_STREET',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'applicants_house_number',
            'label' => 'LBL_APPLICANTS_HOUSE_NUMBER',
          ),
          1 => 
          array (
            'name' => 'applicants_local_number',
            'label' => 'LBL_APPLICANTS_LOCAL_NUMBER',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'applicants_taxid',
            'label' => 'LBL_APPLICANTS_TAXID',
          ),
          1 => 
          array (
            'name' => 'applicants_phone',
            'label' => 'LBL_APPLICANTS_PHONE',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'applicants_postal_code',
            'label' => 'LBL_APPLICANTS_POSTAL_CODE',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'claimant',
            'studio' => 'visible',
            'label' => 'LBL_CLAIMANT',
          ),
          1 => 
          array (
            'name' => 'claimant_2',
            'studio' => 'visible',
            'label' => 'LBL_CLAIMANT_2',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'card_id',
            'label' => 'LBL_CARD_ID',
          ),
          1 => 
          array (
            'name' => 'contract_id',
            'label' => 'LBL_CONTRACT_ID',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'fk_number',
            'label' => 'LBL_FK_NUMBER',
          ),
          1 => 
          array (
            'name' => 'payer_id',
            'label' => 'LBL_PAYER_ID',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'claim_for_damages',
            'label' => 'LBL_CLAIM_FOR_DAMAGES',
          ),
          1 => 
          array (
            'name' => 'bank_account_number',
            'label' => 'LBL_BANK_ACCOUNT_NUMBER',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'form_of_transfer',
            'studio' => 'visible',
            'label' => 'LBL_FORM_OF_TRANSFER',
          ),
          1 => 
          array (
            'name' => 'process_date',
            'label' => 'LBL_PROCESS_DATE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'report_reason',
            'studio' => 'visible',
            'label' => 'LBL_REPORT_REASON',
          ),
          1 => 
          array (
            'name' => 'withdrawal_date',
            'label' => 'LBL_WITHDRAWAL_DATE',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'postal_address_apt_number',
            'label' => 'LBL_POSTAL_ADDRESS_APT_NUMBER',
          ),
          1 => 
          array (
            'name' => 'postal_address_city',
            'label' => 'LBL_POSTAL_ADDRESS_CITY',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'postal_address_house_number',
            'label' => 'LBL_POSTAL_ADDRESS_HOUSE_NUMBER',
          ),
          1 => 
          array (
            'name' => 'postal_address_name',
            'label' => 'LBL_POSTAL_ADDRESS_NAME',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'postal_address_postal',
            'label' => 'LBL_POSTAL_ADDRESS_POSTAL',
          ),
          1 => 
          array (
            'name' => 'postal_address_street',
            'label' => 'LBL_POSTAL_ADDRESS_STREET',
          ),
        ),
      ),
    ),
  ),
);
;
?>

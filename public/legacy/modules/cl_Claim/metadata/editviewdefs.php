<?php
$module_name = 'cl_Claim';
$_object_name = 'cl_claim';
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
            'name' => 'applicants_phone',
            'label' => 'LBL_APPLICANTS_PHONE',
          ),
          1 => 
          array (
            'name' => 'applicants_email',
            'label' => 'LBL_APPLICANTS_EMAIL',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'applicants_country',
            'label' => 'LBL_APPLICANTS_COUNTRY',
          ),
          1 => '',
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
            'name' => 'applicants_city',
            'label' => 'LBL_APPLICANTS_CITY',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'applicants_postal_code',
            'label' => 'LBL_APPLICANTS_POSTAL_CODE',
          ),
          1 => 
          array (
            'name' => 'applicants_street',
            'label' => 'LBL_APPLICANTS_STREET',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'applicants_local_number',
            'label' => 'LBL_APPLICANTS_LOCAL_NUMBER',
          ),
          1 => 
          array (
            'name' => 'applicants_house_number',
            'label' => 'LBL_APPLICANTS_HOUSE_NUMBER',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'applicants_signature',
            'comment' => 'Sender signature',
            'label' => 'LBL_APPLICANTS_SIGNATURE',
          ),
          1 => 
          array (
            'name' => 'applicants_taxid',
            'label' => 'LBL_APPLICANTS_TAXID',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'reportingentity',
            'studio' => 'visible',
            'label' => 'LBL_REPORTINGENTITY',
          ),
          1 => 
          array (
            'name' => 'author',
            'label' => 'LBL_AUTHOR',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'considerationdeadline',
            'label' => 'LBL_CONSIDERATIONDEADLINE',
          ),
          1 => 
          array (
            'name' => 'withdrawaldate',
            'label' => 'LBL_WITHDRAWALDATE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'defendantunit',
            'label' => 'LBL_DEFENDANTUNIT',
          ),
          1 => 
          array (
            'name' => 'externalregistrynumber',
            'label' => 'LBL_EXTERNALREGISTRYNUMBER',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'fknumber',
            'label' => 'LBL_FKNUMBER',
          ),
          1 => 
          array (
            'name' => 'cardid',
            'label' => 'LBL_CARDID',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'contractid',
            'label' => 'LBL_CONTRACTID',
          ),
          1 => 
          array (
            'name' => 'payerid',
            'label' => 'LBL_PAYERID',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'subsmissionreason',
            'label' => 'LBL_SUBSMISSIONREASON',
          ),
          1 => 
          array (
            'name' => 'classification',
            'studio' => 'visible',
            'label' => 'LBL_CLASSIFICATION',
          ),
        ),
      ),
    ),
  ),
);
;
?>

<?php
$module_name = 'dict_ProdClaimDesc';
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
      'useTabs' => true,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'number_parcels',
            'label' => 'LBL_NUMBER_PARCELS',
          ),
          1 => 
          array (
            'name' => 'guid',
            'label' => 'LBL_GUID',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'who_is_applicant',
            'studio' => 'visible',
            'label' => 'LBL_WHO_IS_APPLICANT',
          ),
        ),
        2 => 
        array (
          0 => 'description',
        ),
      ),
    ),
   
  ),
);
;
?>

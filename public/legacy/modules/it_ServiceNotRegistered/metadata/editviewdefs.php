<?php
$module_name = 'it_ServiceNotRegistered';
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
        'LBL_NOTREGISTERED' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'LBL_NotRegistered' => 
      array (
        0 => 
        array (
          0 => 'Type',
          1 => 'HowMuch',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'nameofservice',
            'label' => 'LBL_NAMEOFSERVICE',
          ),
          1 => 
          array (
            'name' => 'additionalservices',
            'label' => 'LBL_ADDITIONALSERVICES',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'reasonforreporting',
            'label' => 'LBL_REASONFORREPORTING',
          ),
        ),
      ),
    ),
  ),
);
;
?>

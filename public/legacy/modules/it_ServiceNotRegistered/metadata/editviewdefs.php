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
          0 => 
          array (
            'name' => 'servicecode',
            'label' => 'LBL_SERVICECODE',
          ),
          1 => 
          array (
            'name' => 'servicename',
            'label' => 'LBL_SERVICENAME',
          ),
          
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'servicesadditional',
            'label' => 'LBL_SERVICESADDITIONAL',
          ),
          1 => 
          array (
            'name' => 'reasonforreporting',
            'label' => 'LBL_REASONFORREPORTING',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'amount',
            'label' => 'LBL_AMOUNT',
          ),
          1 => 
          array (
            'name' => 'content',
            'label' => 'LBL_CONTENT',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'servicefee',
            'label' => 'LBL_SERVICEFEE',
          ),
          1 => 
          array (
            'name' => 'externalnumber',
            'label' => 'LBL_EXTERNALNUMBER',
          ),
        ),
      ),
    ),
  ),
);
;
?>

<?php
$module_name = 'it_ServiceNotRegistered';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
      'maxColumns' => '3',
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
        2 => 
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
            'name' => 'servicename',
            'label' => 'LBL_SERVICENAME',
          ),
          1 => 
          array (
            'name' => 'servicesadditional',
            'label' => 'LBL_SERVICESADDITIONAL',
          ),
          2 => 
          array (
            'name' => 'reasonforreporting',
            'label' => 'LBL_REASONFORREPORTING',
          ),
        ),  
        1 => 
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
          2 =>
          array (
            'name' => 'externalnumber',
            'label' => 'LBL_EXTERNALNUMBER',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'servicefee',
            'label' => 'LBL_SERVICEFEE',
            'type'=>'readonly',
          ),
          1 =>       
          array (
            'name' => 'description',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
      ),
    ),
  ),
);
;
?>

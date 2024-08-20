<?php

$module_name = 'it_Claims';
$layout_defs[$module_name]['subpanel_setup']['securitygroups'] = array(
    'top_buttons' => array(array('widget_class' => 'SubPanelTopSelectButton', 'popup_module' => 'SecurityGroups', 'mode' => 'MultiSelect')),
    'order' => 900,
    'sort_by' => 'name',
    'sort_order' => 'asc',
    'module' => 'SecurityGroups',
    'refresh_page' => 1,
    'subpanel_name' => 'default',
    'get_subpanel_data' => 'SecurityGroups',
    'add_subpanel_data' => 'securitygroup_id',
    'title_key' => 'LBL_SECURITYGROUPS_SUBPANEL_TITLE',
);
$layout_defs[$module_name]['subpanel_setup']['services'] = array(
    'top_buttons' => array(
        array('widget_class' => 'SubPanelTopButtonQuickCreate', 'popup_module' => 'it_ServiceNotRegistered', 'mode' => 'QuickCreate'),
        array('widget_class' => 'SubPanelTopSelectButton')
    ),
    'order' => 100,
    'sort_by' => 'name',
    'sort_order' => 'asc',
    'module' => 'it_ServiceNotRegistered',
    'refresh_page' => 1,
    'subpanel_name' => 'default',
    'get_subpanel_data' => 'services',
    'add_subpanel_data' => 'id',
    'title_key' => 'LBL_SERVICE_TITLE',
);
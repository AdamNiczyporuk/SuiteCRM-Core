<?php
$module_name = 'it_Complaiants';
//$layout_defs[$module_name]['subpanel_setup']['securitygroups'] = array(
//    'top_buttons' => array(array('widget_class' => 'SubPanelTopSelectButton', 'popup_module' => 'SecurityGroups', 'mode' => 'MultiSelect')),
//    'order' => 900,
//    'sort_by' => 'name',
//    'sort_order' => 'asc',
//    'module' => 'SecurityGroups',
//    'refresh_page' => 1,
//    'subpanel_name' => 'default',
//    'get_subpanel_data' => 'SecurityGroups',
//    'add_subpanel_data' => 'securitygroup_id',
//    'title_key' => 'LBL_SECURITYGROUPS_SUBPANEL_TITLE',
//);
//$layout_defs[$module_name]['subpanel_setup']['service_electronics'] = array(
//    'order' => 100,
//    'module' => 'it_serviceElectronic',
//    'subpanel_name' => 'default',
//    'sort_order' => 'asc',
//    'sort_by' => 'name',
//    'title_key' => 'LBL_SERVICE_SUBPANEL_TITLE',
//    'get_subpanel_data' => 'service_electronics',
//    'top_buttons' => array(
//        //'widget_class' => 'SubPanelTopButtonQuickCreate'
//       // array('widget_class' => 'SubPanelTopButtonQuickCreate', 'popup_module' => 'it_serviceElectronic', 'mode' => 'QuickCreate'),
//        array('widget_class' => 'SubPanelTopButtonQuickCreate', 'popup_module' => 'it_ServiceNotRegistered', 'mode' => 'QuickCreate'),
//    ),
//);

$layout_defs[$module_name] = array(
    'subpanel_setup' => array(
        'securitygroups' => array(
            'top_buttons' => array(array('widget_class' => 'SubPanelTopSelectButton', 'popup_module' => 'SecurityGroups', 'mode' => 'MultiSelect'),),
            'order' => 900,
            'sort_by' => 'name',
            'sort_order' => 'asc',
            'module' => 'SecurityGroups',
            'refresh_page' => 1,
            'subpanel_name' => 'default',
            'get_subpanel_data' => 'SecurityGroups',
            'add_subpanel_data' => 'securitygroup_id',
            'title_key' => 'LBL_SECURITYGROUPS_SUBPANEL_TITLE',
        ),
        'service_electronics' => array(
            'top_buttons' => array(
                array('widget_class' => 'SubPanelTopButtonQuickCreate', 'popup_module' => 'it_ServiceNotRegistered', 'mode' => 'QuickCreate'),
            ),
            'order' => 100,
            'sort_by' => 'name',
            'sort_order' => 'asc',
            'module' => 'it_serviceElectronic',
            'refresh_page' => 1,
            'subpanel_name' => 'default',
            'get_subpanel_data' => 'service_electronics',
             'title_key' => 'LBL_SERVICE_SUBPANEL_TITLE',
        ),
    ),    
);
<?php
$module_name = 'it_Complaiants';
$layout_defs[$module_name] = array(

    'subpanel_setup' => array(

    'service_electronics' => array(
        'order' => 10,
        'sort_order' => 'desc',
        'sort_by' => 'date_due',
        'title_key' => 'LBL_SERVICE_ELECTRONICS',
        'type' => 'collection',
        'subpanel_name' => 'service_electronics',   //this values is not associated with a physical file.
        'header_definition_from_subpanel' => 'meetings',
        'module' => 'it_serviceElectronic',

        'top_buttons' => array(
            array('widget_class' => 'SubPanelTopCreateTaskButton'),
            array('widget_class' => 'SubPanelTopScheduleMeetingButton'),
            array('widget_class' => 'SubPanelTopScheduleCallButton'),
            array('widget_class' => 'SubPanelTopComposeEmailButton'),
        ),

        'collection_list' => array(
            'service_electronics' => array(
                'module' => 'it_serviceElectronic',
                'subpanel_name' => 'ForActivities',
                'get_subpanel_data' => 'service_electronics',
            ),   
        )
    ),

    )
);
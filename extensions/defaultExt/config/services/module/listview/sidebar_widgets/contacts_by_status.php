<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use Symfony\Component\DependencyInjection\ContainerBuilder;

return static function(ContainerBuilder $container): void {

    $sidebarWidgets = $container->getParameter('module.listview.sidebar_widgets')?? [];
    $modules = $sidebarWidgets['modules']?? [];
    $contactsConfig = $modules['contacts']?? [];
    $contactsWidgets = $contactsConfig['widgets'] ?? [];

    $contactsWidgets['charts'] = [
        'type' => 'chart',
        'labelKey' => 'LBL_QUICK_CHARTS',
        'options' => [
            'toggle' => true,
            'headerTitle' => false,
            'charts' => [
                [
                    'chartKey' => 'contacts-by-status-count',
                    'chartType' => 'vertical-bar',
                    'statisticsType' => 'contacts-by-status-count',
                    'labelKey' => 'LBL_CONTACTS_BY_STATUS',
                    'chartOptions' => [
                        'label' => 'LBL_TOTAL',
                    ]
                ]
            ]
        ],
        'acls' => [
                  'Contacts' => ['view', 'list']
            ]
    ];  
    $contactsConfig['widgets'] = $contactsWidgets;
    $modules['contacts'] = $contactsConfig;
    $sidebarWidgets['modules'] = $modules;
    
        
        $container->setParameter('module.listview.sidebar_widgets', $sidebarWidgets);
};
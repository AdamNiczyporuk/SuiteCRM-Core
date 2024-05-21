<?php
namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use Symfony\Component\DependencyInjection\ContainerBuilder;

return static function(ContainerBuilder $container): void{ 
    $sidebarWidgets = $container->getParameter('module.listview.sidebar_widgets')?? [];
    $modules = $sidebarWidgets['modules']?? [];
    $contactsConfig = $modules['contacts']?? [];
    $contactsWidegets = $contactConfig['widgets']?? [];

    $contactsWidegets['charts'] = [
        'type' => 'chart',
        'labelKey' => 'LBL_QUICK_CHARTS',
        'option' => [
            'toggle' => 'true',
            'headerTitle' => 'true',
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
        'acls'=>[
                'Contacts' => ['view','list']
            ]
    ];
    $contactsConfig['widgets'] = $contactsWidegets;
    $modules['contacts'] = $contactsConfig;
    $sidebarWidgets['modules'] = $modules;

  //  $container->setParameter('module.listview.sidebar_widgets', $sidebarWidgets);



};
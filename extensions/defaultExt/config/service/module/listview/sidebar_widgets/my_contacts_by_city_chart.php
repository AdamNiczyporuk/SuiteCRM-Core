<!-- <?php
namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use Symfony\Component\DependencyInjection\ContainerBuilder;

return static function(ContainerBuilder $container): void{ 
    $sidebarWidgets = $container->getParameter('module.listview.sidebar_widgets')?? [];
    $modules = $sidebarWidgets['modules']?? [];
    $contactConfig = $modules['contacts']?? [];
    $contactWidegets = $contactConfig['widgets']?? [];

    $contactWidegets[] = [
        'type' => 'chart',
        'labelKey' => 'LBL_QUICK_CHARTS',
        'option' => [
            'toggle' => 'true',
            'headerTitle' => 'false',
            'charts' => 
            [
                [
                    'chartKey' => 'my_contacts_by_city',
                    'statisticType'=> 'my_contacts_by_city',
                    'chartType' =>'vertical-bar', 
                    'LabelKey'=>'LBL_MY_CONTACTS_BY_CITY',
                    'chartOptions'=>[]
                ]
                
            ]
        ],
             
    'acls'=>[
                'Contacts' => ['view','list']
            ]
    ];
    $contactConfig['widgets'] = $contactWidegets;
    $modules['contacts'] = $contactConfig;
    $sidebarWidgets['modules'] = $modules;

    $container->setParameter('module.listview.sidebar_widgets', $sidebarWidgets);



};
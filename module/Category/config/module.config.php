<?php
namespace Category;

use Laminas\Router\Http\Segment;
use Laminas\ServiceManager\Factory\InvokableFactory;

return [
    'controllers' => [
        'factories' => [
            Controller\PartnerController::class => InvokableFactory::class,
            Controller\GoodsController::class => InvokableFactory::class,
        ],
    ],
    'router' => [
        'routes' => [

            'category-partner' => [
                'type'    => Segment::class,
                'options' => [
                    'route' => '/doi-tac[/:action[/:id]]',
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ],
                    'defaults' => [
                        'controller' => Controller\PartnerController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
            
            'category-goods' => [
                'type'    => Segment::class,
                'options' => [
                    'route' => '/hang-hoa[/:action[/:id]]',
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ],
                    'defaults' => [
                        'controller' => Controller\GoodsController::class,
                        'action'     => 'index',
                    ],
                ],
            ],

        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
];

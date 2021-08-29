<?php
namespace Content;

use Laminas\Router\Http\Segment;
use Laminas\ServiceManager\Factory\InvokableFactory;

return [
    'controllers' => [
        'factories' => [
            Controller\MenuController::class => InvokableFactory::class,
            Controller\ContentController::class => InvokableFactory::class,
            Controller\BlockController::class => InvokableFactory::class,
        ],
    ],
    'router' => [
        'routes' => [

            'content-menu' => [
                'type'    => Segment::class,
                'options' => [
                    'route' => '/he-thong-menu[/:action[/:id]]',
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ],
                    'defaults' => [
                        'controller' => Controller\MenuController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
            
            'content-content' => [
                'type'    => Segment::class,
                'options' => [
                    'route' => '/danh-muc-noi-dung[/:action[/:id]]',
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ],
                    'defaults' => [
                        'controller' => Controller\ContentController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
            
            'content-block' => [
                'type'    => Segment::class,
                'options' => [
                    'route' => '/khoi-noi-dung[/:action[/:id]]',
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ],
                    'defaults' => [
                        'controller' => Controller\BlockController::class,
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

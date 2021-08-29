<?php
namespace Front;

use Laminas\Router\Http\Segment;
use Laminas\ServiceManager\Factory\InvokableFactory;

return [
    'controllers' => [
        'factories' => [
            Controller\ContactController::class => InvokableFactory::class,
            Controller\VoteController::class => InvokableFactory::class,
        ],
    ],
    'router' => [
        'routes' => [

            'front-contact' => [
                'type'    => Segment::class,
                'options' => [
                    'route' => '/lien-he[/:action[/:id]]',
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ],
                    'defaults' => [
                        'controller' => Controller\ContactController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
            
            'front-vote' => [
                'type'    => Segment::class,
                'options' => [
                    'route' => '/binh-chon[/:action[/:id]]',
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ],
                    'defaults' => [
                        'controller' => Controller\VoteController::class,
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

<?php
namespace Main;

return array(
	'view_manager' => array(
		'doctype'                  => 'HTML5',
		'template_map' => array(
			'layout/layout'           =>   __DIR__ . '/../view/layout/main.phtml',
			'layout/login'           =>   __DIR__ . '/../view/layout/login.phtml',
		),
		'template_path_stack' => array(
			__DIR__ . '/../view',
		),
		'strategies' => array(
			'ViewJsonStrategy',
		)
	),
	'router' => array(
		'routes' => array(
			'home' => array(
				'type' => 'Literal',
				'options' => array(
					'route'    => '/',
					'defaults' => array(
						'controller' => __NAMESPACE__ . '\Index',
						'action'     => 'index',
					),
				),
			),
		),
	),
	'controllers' => array(
		'invokables' => array(
			__NAMESPACE__ . '\Index' => __NAMESPACE__ . '\Controller\IndexController',
		),
	),
);
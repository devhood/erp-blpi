<?php
namespace Template;

return array(
	'view_manager' => array(
		'template_path_stack' => array(
			__DIR__ . '/../view',
		),
	),
	'router' => array(
		'routes' => array(
			'home' => array(
				'type' => 'Literal',
				'options' => array(
					'route'    => '/template',
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
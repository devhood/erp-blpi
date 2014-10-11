<?php
namespace Main;

return array(
		'view_manager' => array(
				'display_not_found_reason' => true,
				'display_exceptions'       => true,
				'doctype'                  => 'HTML5',
				'not_found_template'       => 'layout/404',
				'exception_template'       => 'layout/index',
				'template_map' => array(
						'layout/layout'           =>   __DIR__ . '/../view/layout/main.phtml',
						'layout/login'           =>   __DIR__ . '/../view/layout/login.phtml',
						'layout/404'           =>   getcwd() . '/module/Main/view/error/error.phtml',
						'layout/index'           =>   getcwd() . '/module/Main/view/error/exception.phtml',
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
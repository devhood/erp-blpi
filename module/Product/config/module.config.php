<?php
namespace Product;

return array(
	'view_manager' => array(
		'template_path_stack' => array(
			__DIR__ . '/../view',
		),
	),
	'router' => array(
		'routes' => array(
			__NAMESPACE__.'_Index_Home' => array(
				'type' => 'Literal',
				'options' => array(
					'route'    => '/product',
					'defaults' => array(
						'controller' => __NAMESPACE__ . '\Index',
						'action'     => 'index',
					),
				),
			),
			__NAMESPACE__.'_Index_Add' => array(
				'type' => 'Literal',
				'options' => array(
					'route'    => '/product/add',
					'defaults' => array(
						'controller' => __NAMESPACE__ . '\Index',
						'action'     => 'add',
					),
				),
			),
			__NAMESPACE__.'_Index_Edit' => array(
				'type' => 'Literal',
				'options' => array(
					'route'    => '/product/edit',
					'defaults' => array(
						'controller' => __NAMESPACE__ . '\Index',
						'action'     => 'edit',
					),
				),
			),
			__NAMESPACE__.'_Index_View' => array(
				'type' => 'Literal',
				'options' => array(
					'route'    => '/product/view',
					'defaults' => array(
						'controller' => __NAMESPACE__ . '\Index',
						'action'     => 'view',
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
<?php
namespace Sales;

return array(
	'view_manager' => array(
		'template_path_stack' => array(
			__DIR__ . '/../view',
		),
		'template_map' => array(
			'sales/order'           =>   __DIR__ . '/../view/sales/partial/order.phtml',
			
		),
	),
	'router' => array(
		'routes' => array(
			__NAMESPACE__.'_Index_Home' => array(
				'type' => 'Literal',
				'options' => array(
					'route'    => '/sales',
					'defaults' => array(
						'controller' => __NAMESPACE__ . '\Order',
						'action'     => 'index',
					),
				),
			),
			__NAMESPACE__.'_Index_Add' => array(
				'type' => 'Literal',
				'options' => array(
					'route'    => '/sales/add',
					'defaults' => array(
						'controller' => __NAMESPACE__ . '\Order',
						'action'     => 'add',
					),
				),
			),
			__NAMESPACE__.'_Index_Edit' => array(
				'type' => 'Literal',
				'options' => array(
					'route'    => '/sales/edit',
					'defaults' => array(
						'controller' => __NAMESPACE__ . '\Order',
						'action'     => 'edit',
					),
				),
			),
			__NAMESPACE__.'_Index_View' => array(
				'type' => 'Literal',
				'options' => array(
					'route'    => '/sales/view',
					'defaults' => array(
						'controller' => __NAMESPACE__ . '\Order',
						'action'     => 'view',
					),
				),
			),
		),
	),
	'controllers' => array(
		'invokables' => array(
			__NAMESPACE__ . '\Order' => __NAMESPACE__ . '\Controller\OrderController',
		),
	),
);

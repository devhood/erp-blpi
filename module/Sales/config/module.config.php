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
			__NAMESPACE__.'_Order_Add' => array(
				'type' => 'Literal',
				'options' => array(
					'route'    => '/sales/order/add',
					'defaults' => array(
						'controller' => __NAMESPACE__ . '\Order',
						'action'     => 'add',
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

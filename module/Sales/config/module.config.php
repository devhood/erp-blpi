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
	        __NAMESPACE__.'_Sales_Delivery' => array(
	            'type' => 'Literal',
	            'options' => array(
	                'route'    => '/sales/delivery',
	                'defaults' => array(
	                    'controller' => __NAMESPACE__ . '\Sales',
	                    'action'     => 'delivery',
	                ),
	            ),
	        ),
	        __NAMESPACE__.'_Sales_Order' => array(
	            'type' => 'Literal',
	            'options' => array(
	                'route'    => '/sales/order',
	                'defaults' => array(
	                    'controller' => __NAMESPACE__ . '\Sales',
	                    'action'     => 'order',
	                ),
	            ),
	        ),
	        __NAMESPACE__.'_Sales_Invoice' => array(
	            'type' => 'Literal',
	            'options' => array(
	                'route'    => '/sales/invoice',
	                'defaults' => array(
	                    'controller' => __NAMESPACE__ . '\Sales',
	                    'action'     => 'invoice',
	                ),
	            ),
	        ),
	    ),
	),
	'controllers' => array(
		'invokables' => array(
			__NAMESPACE__ . '\Sales' => __NAMESPACE__ . '\Controller\SalesController',
		),
	),
);

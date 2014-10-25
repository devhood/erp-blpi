<?php
namespace Sales;

return array(
	'view_manager' => array(
		'template_path_stack' => array(
			__DIR__ . '/../view',
		),
		'template_map' => array(
			'sales/items'           =>   __DIR__ . '/../view/sales/partial/items.phtml',
		),

	),
	'router' => array(
	    'routes' => array(
	        __NAMESPACE__.'_Sales_Delivery_Approve' => array(
	            'type' => 'Literal',
	            'options' => array(
	                'route'    => '/sales/delivery/approve',
	                'defaults' => array(
	                    'controller' => __NAMESPACE__ . '\Sales',
	                    'action'     => 'ApproveDelivery',
	                ),
	            ),
	        ),
	        __NAMESPACE__.'_Sales_Order' => array(
	            'type' => 'Literal',
	            'options' => array(
	                'route'    => '/sales/orderadd',
	                'defaults' => array(
	                    'controller' => __NAMESPACE__ . '\Sales',
	                    'action'     => 'orderadd',
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
	         __NAMESPACE__.'_Sales_Print_Delivery' => array(
	            'type' => 'Literal',
	            'options' => array(
	                'route'    => '/sales/delivery/print',
	                'defaults' => array(
	                    'controller' => __NAMESPACE__ . '\Sales',
	                    'action'     => 'printDelivery',
	                ),
	            ),
	        ),
	         __NAMESPACE__.'_Sales_Print_Invoice' => array(
	            'type' => 'Literal',
	            'options' => array(
	                'route'    => '/sales/invoice/print',
	                'defaults' => array(
	                    'controller' => __NAMESPACE__ . '\Sales',
	                    'action'     => 'printInvoice',
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

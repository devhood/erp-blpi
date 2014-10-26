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
	        __NAMESPACE__.'_Sales_Order_Add' => array(
	            'type' => 'Literal',
	            'options' => array(
	                'route'    => '/sales/order/add',
	                'defaults' => array(
	                    'controller' => __NAMESPACE__ . '\Sales',
	                    'action'     => 'orderAdd',
	                ),
	            ),
	        ),
	        __NAMESPACE__.'_Sales_Invoice_Approve' => array(
	            'type' => 'Literal',
	            'options' => array(
	                'route'    => '/sales/invoice/approve',
	                'defaults' => array(
	                    'controller' => __NAMESPACE__ . '\Sales',
	                    'action'     => 'ApproveInvoice',
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

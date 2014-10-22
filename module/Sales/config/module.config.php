<?php
namespace Sales;

return array(
	'view_manager' => array(
		'template_path_stack' => array(
			__DIR__ . '/../view',
		),
		'template_map' => array(
			'sales/order'           =>   __DIR__ . '/../view/sales/partial/ordered.phtml',
			'sales/invoice'           =>   __DIR__ . '/../view/sales/partial/invoice.phtml',

		),
	),
	'router' => array(
		'routes' => array(
			__NAMESPACE__.'_Delivery_Add' => array(
				'type' => 'Literal',
				'options' => array(
					'route'    => '/sales/delivery/add',
					'defaults' => array(
						'controller' => __NAMESPACE__ . '\Delivery',
						'action'     => 'add',
					),
				),
			),
		),
	),
	'router' => array(
	 'routes' => array(
			__NAMESPACE__.'_Delivery_Add' => array(
				'type' => 'Literal',
				'options' => array(
					'route'    => '/sales/order/add',
					'defaults' => array(
						'controller' => __NAMESPACE__ . '\Order',
						'action'     => 'add',
					),
				),
			),
		    __NAMESPACE__.'_Delivery_Home' => array(
		        'type' => 'Literal',
		        'options' => array(
		            'route'    => '/sales/delivery',
		            'defaults' => array(
		                'controller' => __NAMESPACE__ . '\Delivery',
		                'action'     => 'index',
		            ),
		        ),
		    ),
		    __NAMESPACE__.'Invoice_Add' => array(
		        'type' => 'Literal',
		        'options' => array(
		            'route'    => '/invoice/add',
		            'defaults' => array(
		                'controller' => __NAMESPACE__ . '\Invoice',
		                'action'     => 'add',
		            ),
		        ),
		    ),
		),
	),
	'controllers' => array(
		'invokables' => array(
			__NAMESPACE__ . '\Delivery' => __NAMESPACE__ . '\Controller\DeliveryController',
			__NAMESPACE__ . '\Invoice' => __NAMESPACE__ . '\Controller\InvoiceController',
			__NAMESPACE__ . '\Order' => __NAMESPACE__ . '\Controller\OrderController',
		    __NAMESPACE__ . '\Delivery' => __NAMESPACE__ . '\Controller\DeliveryController',
		    __NAMESPACE__ . '\Invoice' => __NAMESPACE__ . '\Controller\InvoiceController',
		),
	),
);

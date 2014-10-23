<?php
namespace Sales;

return array(
	'view_manager' => array(
		'template_path_stack' => array(
			__DIR__ . '/../view',
		),


		'template_map' => array(
			'sales/order'           =>   __DIR__ . '/../view/sales/partial/order.phtml',
			'sales/invoice'           =>   __DIR__ . '/../view/sales/partial/invoice.phtml',
			'sales/delivery'           =>   __DIR__ . '/../view/sales/partial/delivery.phtml',

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

			__NAMESPACE__.'_Delivery_Approve' => array(
				'type' => 'Literal',
				'options' => array(
					'route'    => '/sales/delivery/approve',
					'defaults' => array(
						'controller' => __NAMESPACE__ . '\Delivery',
						'action'     => 'approve',
					),
				),
			),

			__NAMESPACE__.'_Delivery_Print' => array(
				'type' => 'Literal',
				'options' => array(
					'route'    => '/sales/delivery/print',
					'defaults' => array(
						'controller' => __NAMESPACE__ . '\Delivery',
						'action'     => 'print',
					),
				),
			),

			__NAMESPACE__.'Order_Add' => array(
				'type' => 'Literal',
				'options' => array(
					'route'    => '/sales/order/add',
					'defaults' => array(
						'controller' => __NAMESPACE__ . '\Order',
						'action'     => 'add',
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
		    __NAMESPACE__.'Payment_Add' => array(
		        'type' => 'Literal',
		        'options' => array(
		            'route'    => '/payment/add',
		            'defaults' => array(
		                'controller' => __NAMESPACE__ . '\Invoice',
		                'action'     => 'add',
		            ),
		        ),
		    ),
		    __NAMESPACE__.'Receipt_Add' => array(
		        'type' => 'Literal',
		        'options' => array(
		            'route'    => '/receipt/add',
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
			__NAMESPACE__ . '\Payment' => __NAMESPACE__ . '\Controller\PaymentController',
			__NAMESPACE__ . '\Receipt' => __NAMESPACE__ . '\Controller\ReceiptController',

		),
	),
);

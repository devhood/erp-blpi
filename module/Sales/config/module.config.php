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
			'sales/creatermr'           =>   __DIR__ . '/../view/sales/partial/creatermr.phtml',
		    'sales/approvermr'           =>   __DIR__ . '/../view/sales/partial/approvermr.phtml',
    		'sales/creditmemo'           =>   __DIR__ . '/../view/sales/partial/creditmemo.phtml',
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
				__NAMESPACE__.'Order_Approve' => array(
				'type' => 'Literal',
				'options' => array(
					'route'    => '/sales/order/approve',
					'defaults' => array(
						'controller' => __NAMESPACE__ . '\Order',
						'action'     => 'approve',
					),
				),
			),
				__NAMESPACE__.'Order_Print' => array(
							'type' => 'Literal',
							'options' => array(
								'route'    => '/sales/order/print',
								'defaults' => array(
									'controller' => __NAMESPACE__ . '\Order',
									'action'     => 'print',
								),
							),
						),
		    __NAMESPACE__.'Invoice_Add' => array(
		        'type' => 'Literal',
		        'options' => array(
		            'route'    => '/sales/invoice/add',
		            'defaults' => array(
		                'controller' => __NAMESPACE__ . '\Invoice',
		                'action'     => 'add',
		            ),
		        ),
		    ),

		    __NAMESPACE__.'Invoice_Approve' => array(
		        'type' => 'Literal',
		        'options' => array(
		            'route'    => '/invoice/approve',
		            'defaults' => array(
		                'controller' => __NAMESPACE__ . '\Invoice',
		                'action'     => 'approve',
		            ),
		        ),
		    ),

		    __NAMESPACE__.'Invoice_Print' => array(
		        'type' => 'Literal',
		        'options' => array(
		            'route'    => '/invoice/print',
		            'defaults' => array(
		                'controller' => __NAMESPACE__ . '\Invoice',
		                'action'     => 'print',
		            ),
		        ),
		    ),
		    __NAMESPACE__.'Payment_Add' => array(
		        'type' => 'Literal',
		        'options' => array(
		            'route'    => '/sales/payment/add',
		            'defaults' => array(
		                'controller' => __NAMESPACE__ . '\Payment',
		                'action'     => 'add',
		            ),
		        ),
		    ),

		__NAMESPACE__.'Creatermr_Add' => array(
        'type' => 'Literal',
        'options' => array(
            'route'    => '/sales/creatermr/add',
            'defaults' => array(
                'controller' => __NAMESPACE__ . '\Creatermr',
                'action'     => 'add',
            ),
        ),
    ),

    __NAMESPACE__.'Approvermr_Add' => array(
        'type' => 'Literal',
        'options' => array(
            'route'    => '/sales/approvermr/add',
            'defaults' => array(
                'controller' => __NAMESPACE__ . '\Approvermr',
                'action'     => 'add',
            ),
        ),
    ),

    __NAMESPACE__.'Creditmemo_Add' => array(
        'type' => 'Literal',
        'options' => array(
            'route'    => '/sales/creditmemo/add',
            'defaults' => array(
                'controller' => __NAMESPACE__ . '\Creditmemo',
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
		),
	),
);

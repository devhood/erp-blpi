<?php
namespace Sales;

return array(
	'view_manager' => array(
		'template_path_stack' => array(
			__DIR__ . '/../view',
		),
		'template_map' => array(
			'sales/items'           =>   __DIR__ . '/../view/sales/partial/items.phtml',
			'sales/document'           =>   __DIR__ . '/../view/sales/partial/document.phtml',
			'sales/paymentdetail'           =>   __DIR__ . '/../view/sales/partial/paymentdetail.phtml',
				
		),

	),
	'router' => array(
	    'routes' => array(
    		__NAMESPACE__.'_Creditmemo' => array(
    				'type' => 'Literal',
    				'options' => array(
    						'route'    => '/sales/creditmemo',
    						'defaults' => array(
    								'controller' => __NAMESPACE__ . '\Sales',
    								'action'     => 'creditmemo',
    						),
    				),
    		),
	    		
	        __NAMESPACE__.'_Delivery_Approve' => array(
	            'type' => 'Literal',
	            'options' => array(
	                'route'    => '/sales/delivery/approve',
	                'defaults' => array(
	                    'controller' => __NAMESPACE__ . '\Sales',
	                    'action'     => 'DeliveryApprove',
	                ),
	            ),
	        ),
	    	__NAMESPACE__.'_Delivery_Print' => array(
	    				'type' => 'Literal',
	    				'options' => array(
	    						'route'    => '/sales/delivery/print',
	    						'defaults' => array(
	    								'controller' => __NAMESPACE__ . '\Sales',
	    								'action'     => 'DeliveryPrint',
	    						),
	    				),
	    		),

	    		
	    		__NAMESPACE__.'_Delivery_List' => array(
	    				'type' => 'Literal',
	    				'options' => array(
	    						'route'    => '/sales/delivery',
	    						'defaults' => array(
	    								'controller' => __NAMESPACE__ . '\Sales',
	    								'action'     => 'Delivery',
	    						),
	    				),
	    		),
	    		
	    	
	    		
	        __NAMESPACE__.'_Order_Add' => array(
	            'type' => 'Literal',
	            'options' => array(
	                'route'    => '/sales/order/add',
	                'defaults' => array(
	                    'controller' => __NAMESPACE__ . '\Sales',
	                    'action'     => 'OrderAdd',
	                ),
	            ),
	        ),
	        __NAMESPACE__.'_Order_Approve' => array(
	    				'type' => 'Literal',
	    				'options' => array(
	    						'route'    => '/sales/order/approve',
	    						'defaults' => array(
	    								'controller' => __NAMESPACE__ . '\Sales',
	    								'action'     => 'OrderApprove',
	    						),
	    				),
	    		),
	    		
	    	 __NAMESPACE__.'_Order' => array(
	    				'type' => 'Literal',
	    				'options' => array(
	    						'route'    => '/sales/order',
	    						'defaults' => array(
	    								'controller' => __NAMESPACE__ . '\Sales',
	    								'action'     => 'Order',
	    						),
	    				),
	    		),
	    		__NAMESPACE__.'_Order_Print' => array(
	    				'type' => 'Literal',
	    				'options' => array(
	    						'route'    => '/sales/order/print',
	    						'defaults' => array(
	    								'controller' => __NAMESPACE__ . '\Sales',
	    								'action'     => 'OrderPrint',
	    						),
	    				),
	    		),
	    		 
	    		
	    		
	        __NAMESPACE__.'_Invoice_Approve' => array(
	            'type' => 'Literal',
	            'options' => array(
	                'route'    => '/sales/invoice/approve',
	                'defaults' => array(
	                    'controller' => __NAMESPACE__ . '\Sales',
	                    'action'     => 'InvoiceApprove',
	                ),
	            ),
	        ),
	         
	         __NAMESPACE__.'_Invoice_Print' => array(
	            'type' => 'Literal',
	            'options' => array(
	                'route'    => '/sales/invoice/print',
	                'defaults' => array(
	                    'controller' => __NAMESPACE__ . '\Sales',
	                    'action'     => 'InvoicePrint',
	                ),
	            ),
	        ),

	    		__NAMESPACE__.'_Invoice' => array(
	    				'type' => 'Literal',
	    				'options' => array(
	    						'route'    => '/sales/invoice',
	    						'defaults' => array(
	    								'controller' => __NAMESPACE__ . '\Sales',
	    								'action'     => 'Invoice',
	    						),
	    				),
	    		),
	    		__NAMESPACE__.'_Payment' => array(
	    				'type' => 'Literal',
	    				'options' => array(
	    						'route'    => '/sales/payment',
	    						'defaults' => array(
	    								'controller' => __NAMESPACE__ . '\Sales',
	    								'action'     => 'Payment',
	    						),
	    				),
	    		),
	    		
	    		__NAMESPACE__.'_Payment_Record' => array(
	    				'type' => 'Literal',
	    				'options' => array(
	    						'route'    => '/sales/payment/record',
	    						'defaults' => array(
	    								'controller' => __NAMESPACE__ . '\Sales',
	    								'action'     => 'PaymentRecord',
	    						),
	    				),
	    		),
	    		
	    		__NAMESPACE__.'_Return_Add' => array(
	    				'type' => 'Literal',
	    				'options' => array(
	    						'route'    => '/sales/return/add',
	    						'defaults' => array(
	    								'controller' => __NAMESPACE__ . '\Sales',
	    								'action'     => 'ReturnAdd',
	    						),
	    				),
	    		),
	    		__NAMESPACE__.'_Return_Approve' => array(
	    				'type' => 'Literal',
	    				'options' => array(
	    						'route'    => '/sales/return/approve',
	    						'defaults' => array(
	    								'controller' => __NAMESPACE__ . '\Sales',
	    								'action'     => 'ReturnApprove',
	    						),
	    				),
	    		),
	    		__NAMESPACE__.'_Return' => array(
	    				'type' => 'Literal',
	    				'options' => array(
	    						'route'    => '/sales/return',
	    						'defaults' => array(
	    								'controller' => __NAMESPACE__ . '\Sales',
	    								'action'     => 'Return',
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

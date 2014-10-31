<?php
namespace Customer;

return array(
	'view_manager' => array(
		'template_path_stack' => array(
			__DIR__ . '/../view',
		),
		'template_map' => array(
			'customer/address'           =>   __DIR__ . '/../view/customer/partial/address.phtml',
			'customer/contact'           =>   __DIR__ . '/../view/customer/partial/contact.phtml',
			),

	),
	'router' => array(
		'routes' => array(
			__NAMESPACE__.'_Customer_Home' => array(
				'type' => 'Literal',
				'options' => array(
					'route'    => '/customer',
					'defaults' => array(
						'controller' => __NAMESPACE__ . '\Customer',
						'action'     => 'index',
					),
				),
			),
			__NAMESPACE__.'_Customer_Add' => array(
				'type' => 'Literal',
				'options' => array(
					'route'    => '/customer/add',
					'defaults' => array(
						'controller' => __NAMESPACE__ . '\Customer',
						'action'     => 'add',
					),
				),
			),
			__NAMESPACE__.'_Customer_view' => array(
				'type' => 'Literal',
				'options' => array(
					'route'    => '/customer/view',
					'defaults' => array(
						'controller' => __NAMESPACE__ . '\Customer',
						'action'     => 'view',
					),
				),
			),

			__NAMESPACE__.'_Customer_edit' => array(
				'type' => 'Literal',
				'options' => array(
					'route'    => '/customer/edit',
					'defaults' => array(
						'controller' => __NAMESPACE__ . '\Customer',
						'action'     => 'edit',
					),
				),
			),


		),
	),
	'controllers' => array(
		'invokables' => array(
			__NAMESPACE__ . '\Customer' => __NAMESPACE__ . '\Controller\CustomerController',
		),
	),
);

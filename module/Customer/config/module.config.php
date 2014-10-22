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
			__NAMESPACE__.'_Index_Home' => array(
				'type' => 'Literal',
				'options' => array(
					'route'    => '/customer',
					'defaults' => array(
						'controller' => __NAMESPACE__ . '\Index',
						'action'     => 'index',
					),
				),
			),
			__NAMESPACE__.'_Index_Add' => array(
				'type' => 'Literal',
				'options' => array(
					'route'    => '/customer/add',
					'defaults' => array(
						'controller' => __NAMESPACE__ . '\Index',
						'action'     => 'add',
					),
				),
			),
			__NAMESPACE__.'_Index_view' => array(
				'type' => 'Literal',
				'options' => array(
					'route'    => '/customer/view',
					'defaults' => array(
						'controller' => __NAMESPACE__ . '\Index',
						'action'     => 'view',
					),
				),
			),

		),
	),
	'controllers' => array(
		'invokables' => array(
			__NAMESPACE__ . '\Index' => __NAMESPACE__ . '\Controller\IndexController',
		),
	),
);

<?php
namespace Purchasing;

return array(
	'view_manager' => array(
		'template_path_stack' => array(
			__DIR__ . '/../view',
		),
// 		'template_map' => array(
// 			'customer/address'           =>   __DIR__ . '/../view/purchase/partial/address.phtml',
// 			'customer/contact'           =>   __DIR__ . '/../view/purchase/partial/contact.phtml',
// 			),

	),
	'router' => array(
		'routes' => array(
			__NAMESPACE__.'Purchase_Index_' => array(
				'type' => 'Literal',
				'options' => array(
					'route'    => '/purchasing',
					'defaults' => array(
						'controller' => __NAMESPACE__ . '\Index',
						'action'     => 'index',
					),
				),
			),
			__NAMESPACE__.'_Purchase_Add' => array(
				'type' => 'Literal',
				'options' => array(
					'route'    => '/purchasing/add',
					'defaults' => array(
						'controller' => __NAMESPACE__ . '\Index',
						'action'     => 'add',
					),
				),
			),
// 			__NAMESPACE__.'_Index_view' => array(
// 				'type' => 'Literal',
// 				'options' => array(
// 					'route'    => '/purchase/view',
// 					'defaults' => array(
// 						'controller' => __NAMESPACE__ . '\Index',
// 						'action'     => 'view',
// 					),
// 				),
// 			),

// 			__NAMESPACE__.'_Index_edit' => array(
// 				'type' => 'Literal',
// 				'options' => array(
// 					'route'    => '/purchase/edit',
// 					'defaults' => array(
// 						'controller' => __NAMESPACE__ . '\Index',
// 						'action'     => 'edit',
// 					),
// 				),
// 			),


		),
	),
	'controllers' => array(
		'invokables' => array(
			__NAMESPACE__ . '\Index' => __NAMESPACE__ . '\Controller\IndexController',
		),
	),
);

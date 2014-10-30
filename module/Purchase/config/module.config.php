<?php
namespace Purchase;

return array(
	'view_manager' => array(
		'template_path_stack' => array(
			__DIR__ . '/../view',
		),
	),
	'router' => array(
		'routes' => array(
			__NAMESPACE__.'_Purchase_Index' => array(
				'type' => 'Literal',
				'options' => array(
					'route'    => '/purchase',
					'defaults' => array(
						'controller' => __NAMESPACE__ . '\Purchase',
						'action'     => 'index',
					),
				),
			),
			__NAMESPACE__.'_Purchase_Add' => array(
				'type' => 'Literal',
				'options' => array(
					'route'    => '/purchase/add',
					'defaults' => array(
						'controller' => __NAMESPACE__ . '\Purchase',
						'action'     => 'add',
					),
				),
			),
			__NAMESPACE__.'_Purchase_Edit' => array(
				'type' => 'segment',
				'options' => array(
					'route'    => '/purchase/edit[/:id]',
					'defaults' => array(
						'controller' => __NAMESPACE__ . '\Purchase',
						'action'     => 'edit',
					),
				),
			),
		),
	),
	'controllers' => array(
		'invokables' => array(
			__NAMESPACE__ . '\Purchase' => __NAMESPACE__ . '\Controller\PurchaseController'
		),
	),
);

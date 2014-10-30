<?php
namespace Product;

return array(
	'view_manager' => array(
		'template_path_stack' => array(
			__DIR__ . '/../view',
		),
		'template_map' => array(
			'partial/price'           =>   __DIR__ . '/../view/product/partial/price.phtml',
			'partial/bundle'           =>   __DIR__ . '/../view/product/partial/bundle.phtml',
			'partial/units'           =>   __DIR__ . '/../view/product/partial/units.phtml',
			'partial/document'           =>   __DIR__ . '/../view/product/partial/document.phtml',

		),
	),
	'router' => array(
		'routes' => array(
			__NAMESPACE__.'_Product_Index' => array(
				'type' => 'Literal',
				'options' => array(
					'route'    => '/product',
					'defaults' => array(
						'controller' => __NAMESPACE__ . '\Product',
						'action'     => 'index',
					),
				),
			),
			__NAMESPACE__.'_Product_Add' => array(
				'type' => 'Literal',
				'options' => array(
					'route'    => '/product/add',
					'defaults' => array(
						'controller' => __NAMESPACE__ . '\Product',
						'action'     => 'add',
					),
				),
			),
			__NAMESPACE__.'_Product_Edit' => array(
				'type' => 'Literal',
				'options' => array(
					'route'    => '/product/edit[/:id]',
					'defaults' => array(
						'controller' => __NAMESPACE__ . '\Product',
						'action'     => 'edit',
					),
				),
			),
		),
	),
	'controllers' => array(
		'invokables' => array(
			__NAMESPACE__ . '\Product' => __NAMESPACE__ . '\Controller\ProductController',
		),
	),
);

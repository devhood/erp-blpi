<?php
namespace Shipments;

return array(
	'view_manager' => array(
		'template_path_stack' => array(
			__DIR__ . '/../view',
		),
		'template_map' => array(
			'shipments/items'      =>   __DIR__ . '/../view/shipments/partial/items.phtml',
		),
	),
	'router' => array(
		'routes' => array(
			__NAMESPACE__.'_Shipment_Index' => array(
				'type' => 'Literal',
				'options' => array(
					'route'    => '/shipment',
					'defaults' => array(
						'controller' => __NAMESPACE__ . '\Shipment',
						'action'     => 'index',
					),
				),
			),
			__NAMESPACE__.'_Shipment_Add' => array(
				'type' => 'Literal',
				'options' => array(
					'route'    => '/shipment/add',
					'defaults' => array(
						'controller' => __NAMESPACE__ . '\Shipment',
						'action'     => 'add',
					),
				),
			),
			__NAMESPACE__.'_Shipment_Edit' => array(
				'type' => 'segment',
				'options' => array(
					'route'    => '/shipment/edit[/:id]',
					'defaults' => array(
						'controller' => __NAMESPACE__ . '\Shipment',
						'action'     => 'edit',
					),
				),
			),
		),
	),
	'controllers' => array(
		'invokables' => array(
			__NAMESPACE__ . '\Shipment' => __NAMESPACE__ . '\Controller\ShipmentController'
		),
	),
);

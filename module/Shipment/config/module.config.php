<?php
namespace Shipment;

return array(
	'view_manager' => array(
		'template_path_stack' => array(
			__DIR__ . '/../view',
		),
	),
	'router' => array(
		'routes' => array(
			__NAMESPACE__.'_Shipment_Home' => array(
				'type' => 'Literal',
				'options' => array(
					'route'    => '/shipment/add',
					'defaults' => array(
						'controller' => __NAMESPACE__ . '\Shipment',
						'action'     => 'add',
					),
				),
			),
		),
	),
	'controllers' => array(
		'invokables' => array(
			__NAMESPACE__ . '\Shipment' => __NAMESPACE__ . '\Controller\ShipmentController',
		),
	),
);
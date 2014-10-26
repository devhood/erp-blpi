<?php
namespace User;

return array(
	'view_manager' => array(
		'template_path_stack' => array(
			__DIR__ . '/../view',
		),
		'template_map' => array(
			'user/accesslist'      =>   __DIR__ . '/../view/user/partial/accesslist.phtml',
		),
	),
	'router' => array(
		'routes' => array(
			__NAMESPACE__.'_User_Info_' => array(
				'type' => 'Literal',
				'options' => array(
					'route'    => '/user/info',
					'defaults' => array(
						'controller' => __NAMESPACE__ . '\User',
						'action'     => 'info',
					),
				),
			),
		),
	),
	'controllers' => array(
		'invokables' => array(
			__NAMESPACE__ . '\User' => __NAMESPACE__ . '\Controller\UserController',
		),
	),
);

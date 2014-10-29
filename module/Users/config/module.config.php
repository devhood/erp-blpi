<?php
namespace Users;

return array(
	'view_manager' => array(
		'template_path_stack' => array(
			__DIR__ . '/../view',
		),
		'template_map' => array(
			'partial/access'      =>   __DIR__ . '/../view/users/partial/access.phtml',
		),
	),
	'router' => array(
		'routes' => array(
			__NAMESPACE__.'_User_Index' => array(
				'type' => 'Literal',
				'options' => array(
					'route'    => '/user',
					'defaults' => array(
						'controller' => __NAMESPACE__ . '\User',
						'action'     => 'index',
					),
				),
			),
			__NAMESPACE__.'_User_Add' => array(
				'type' => 'Literal',
				'options' => array(
					'route'    => '/user/add',
					'defaults' => array(
						'controller' => __NAMESPACE__ . '\User',
						'action'     => 'add',
					),
				),
			),
			__NAMESPACE__.'_User_Edit' => array(
				'type' => 'segment',
				'options' => array(
					'route'    => '/user/edit[/:id]',
					'defaults' => array(
						'controller' => __NAMESPACE__ . '\User',
						'action'     => 'edit',
					),
				),
			),
		),
	),
	'controllers' => array(
		'invokables' => array(
			__NAMESPACE__ . '\User' => __NAMESPACE__ . '\Controller\UserController'
		),
	),
);

<?php
namespace Database;

return array(
	'doctrine' => array(
		'driver' => array(
			'Security_driver' => array(
				'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
				'cache' => 'array',
				'paths' => array(
					__DIR__ . '/../src/Entity',
				)
			),
			'orm_default' => array(
				'drivers' => array(
					__NAMESPACE__.'\Entity' => 'Security_driver'
				)
			)
		),
		'configuration' => array(
			'orm_default' => array(
				'metadata_cache' => 'array',
				'query_cache' => 'array',
				'result_cache' => 'array',
				'hydration_cache' => 'array',
				'generate_proxies' => true,
				'proxy_dir' => 'data/DoctrineORMModule/Proxy',
				'proxy_namespace' => 'DoctrineORMModule\Proxy',
			),
		),
	),
	'view_manager' => array(
		'strategies' => array(
			'ViewJsonStrategy',
		),
	),
	'router' => array(
		'routes' => array(
			__NAMESPACE__.'_Api_List' => array(
				'type' => 'segment',
				'options' => array(
					'route'    => '/api/list/:table',
					'defaults' => array(
						'controller' => __NAMESPACE__ . '\Api',
						'action'     => 'list',
					),
				),
			),
			__NAMESPACE__.'_Api_Add' => array(
				'type' => 'segment',
				'options' => array(
					'route'    => '/api/add/:table',
					'defaults' => array(
						'controller' => __NAMESPACE__ . '\Api',
						'action'     => 'add',
					),
				),
			),
			__NAMESPACE__.'_Api_Edit' => array(
				'type' => 'segment',
				'options' => array(
					'route'    => '/api/edit/:table/:id',
					'defaults' => array(
						'controller' => __NAMESPACE__ . '\Api',
						'action'     => 'edit',
					),
				),
			),
			__NAMESPACE__.'_Api_Option' => array(
				'type' => 'segment',
				'options' => array(
					'route'    => '/api/options/:table/:key/:value',
					'defaults' => array(
						'controller' => __NAMESPACE__ . '\Api',
						'action'     => 'option',
					),
				),
			),
		),
	),
	'controllers' => array(
		'invokables' => array(
			__NAMESPACE__ . '\Api' => __NAMESPACE__ . '\Controller\ApiController',
		),
	),
);
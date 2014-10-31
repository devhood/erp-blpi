<?php

return array(
    'modules' => array(
        'DoctrineModule',
        'DoctrineORMModule',
        'Main',
        'Product',
        'Database',
        'Customer',
        'Sales',
    	'Users',
<<<<<<< HEAD
    	'Shipments'
=======
    	'Purchase',
>>>>>>> 5eb7bc0a51befff5ee81f12f3eeaf691264b492c
    ),
    'module_listener_options' => array(
        'module_paths' => array(
            './module',
            './vendor'
        ),
        'config_glob_paths' => array(
            'config/autoload/{,*.}{global,local}.php',
        )
    )
);

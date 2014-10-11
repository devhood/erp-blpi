<?php

return array(
    'modules' => array(
        'Main'
    ),
    'module_listener_options' => array(
        'module_paths' => array(
            './module',
            './vendor'
        ),
        'config_glob_paths' => array(
            'config/autoload/{,*.}{global,local}.php',
            'config/autoload/{*}/{,*.}{global,base}.php',
        )
    )
);
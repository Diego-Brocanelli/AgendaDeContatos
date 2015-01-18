<?php

$env = getenv('APP_ENV') ? : 'development';

return array(
    'modules' => array(
        'Contato',
    ),
    'module_listener_options' => array(
        'module_paths' => array(
            './module',
            './vendor'
        ),
        'config_glob_paths' => array(
            'config/autoload/{,*.}{global,local}.php',
        ),
         // configuração do cache, caso não esteja em desenvolvimento o cache dos módulos é gerado quando a app é iniciada
        'config_cache_enabled' => false,
        'config_cache_key' => 'app_config',
        'module_map_cache_enabled' => ($env == 'development'),
        'module_map_cache_key' => 'module_map',
        'cache_dir' => './data/cache',
        'check_dependencies' => ($env != 'development'),
    )
);

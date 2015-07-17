<?php
/**
 * Register application modules
 */

$application->registerModules(array(
    'frontend' => array(
        'className' => 'Spice\Modules\Frontend\Module',
        'path' => __DIR__ . '/../modules/frontend/Module.php',
        'namespace' => 'Spice\Modules\Frontend\Controllers'
    ), 
    'dashboard' => array(
        'className' => 'Spice\Modules\Dashboard\Module',
        'path' => __DIR__ . '/../modules/dashboard/Module.php',
        'namespace' => 'Spice\Modules\Dashboard\Controllers'
    )
));

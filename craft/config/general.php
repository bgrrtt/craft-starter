<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */

// $_ENV constants are loaded from .env.php via public/index.php
return array(

    // All environments
    '*' => array(
        'omitScriptNameInUrls' => true,
        'preventUserEnumeration' => true,
        'usePathInfo' => true,
        'cacheDuration' => false,
        'useEmailAsUsername' => true,
        'autoLoginAfterAccountActivation' => true,
        'enableCsrfProtection' => false,
        'cpTrigger' => 'admin',
        'pageTrigger' => 'page/',
        'generateTransformsBeforePageLoad' => true,
        'siteUrl'  => getenv('CRAFTENV_SITE_URL'),
        'env'  => CRAFT_ENVIRONMENT,

        // Set the environmental variables
        'environmentVariables' => array(
            'baseUrl'  => getenv('CRAFTENV_BASE_URL'),
            'basePath' => getenv('CRAFTENV_BASE_PATH'),
        ),
    ),

    // Live (production) environment
    'live'  => array(
        'devMode' => false,
        'enableTemplateCaching' => true,
        'allowAutoUpdates' => false,
    ),

    // Staging (pre-production) environment
    'staging'  => array(
        'devMode' => false,
        'enableTemplateCaching' => true,
        'allowAutoUpdates' => false,
    ),

    // Local (development) environment
    'local'  => array(
        'devMode' => true,
        'enableTemplateCaching' => false,
        'allowAutoUpdates' => false,
    ),
);
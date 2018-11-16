<?php

$init = require(__DIR__ . '/init.php');

/**
 * --------------------------------------------------------------------------
 * Build the configuration
 * --------------------------------------------------------------------------
 * Retrieve the configuration parameters from the config.php file, there we
 * set the init parameters for the application leaving the actual instantiation
 * process to this script.
 */

/** @var Connect\Config $configuration */
$configuration = new $init['configuration']['type']($init['configuration']['source']);

/**
 * --------------------------------------------------------------------------
 * Configure the Service providers
 * --------------------------------------------------------------------------
 * Load the service providers into the configuration, this will override
 * any "default" service provider defined in the configuration json file
 */
$configuration->setRuntimeServices($init['providers']);

/**
 * --------------------------------------------------------------------------
 * Configure the Requests handlers
 * --------------------------------------------------------------------------
 * Load the request handlers into the configuration, this will override
 * any "default" request handler defined in the configuration json file
 */
$configuration->setRequestHandlers($init['handlers']['requests']);

/**
 * --------------------------------------------------------------------------
 * Configure the Actions handlers
 * --------------------------------------------------------------------------
 * Load the actions handlers into the configuration, this will override
 * any "default" actions handler defined in the configuration json file
 */
$configuration->setActionHandlers($init['handlers']['actions']);

/**
 * --------------------------------------------------------------------------
 * Return The Application
 * --------------------------------------------------------------------------
 * This script returns the application instance. The instance is given to
 * the calling script so we can separate the building of the instances
 * from the actual running of the application and sending responses.
 */

return new \App\ProductFulfillment($configuration);
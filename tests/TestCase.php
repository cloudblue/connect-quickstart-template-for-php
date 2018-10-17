<?php

/**
 * This file is part of the Ingram Micro Cloud Blue Connect SDK.
 *
 * @copyright (c) 2018. Ingram Micro. All Rights Reserved.
 */

namespace Test;

use Connect\Config;
use Test\Providers\MockServiceProvider;

abstract class TestCase extends \PHPUnit\Framework\TestCase
{
    /**
     * The application tester
     * @var ApplicationTester
     */
    protected $app;

    /**
     * List of Mocked Service Providers
     * @var MockServiceProvider[]
     */
    protected $providers = [
        'logger' => '\Test\Providers\LoggerServiceProvider',
        'http' => '\Test\Providers\HttpServiceProvider'
    ];

    /**
     * Setup the test environment.
     * @return void
     * @throws \Connect\ConfigException
     */
    public function setUp()
    {
        if (!($this->app instanceof ApplicationTester)) {

            foreach ($this->providers as $key => $provider) {
                $provider::$scope = substr(strrchr(get_class($this), '\\'), 1) . '.' . $key;
            }

            $configuration = new Config('./config.json');
            $configuration->setRuntimeServices($this->providers);

            $this->app = new ApplicationTester($configuration);
        }
    }
}
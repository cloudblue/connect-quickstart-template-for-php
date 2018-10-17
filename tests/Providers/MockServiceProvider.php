<?php

namespace Test\Providers;

use Connect\Runtime\ServiceProvider;

/**
 * Class MockServiceProvider
 * @package Test\Providers
 */
abstract class MockServiceProvider extends ServiceProvider
{
    /**
     * Declare the scope of the test
     * @var string
     */
    public static $scope;
}
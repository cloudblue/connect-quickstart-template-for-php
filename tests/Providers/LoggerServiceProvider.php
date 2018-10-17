<?php

namespace Test\Providers;

use Pimple\Container;

/**
 * Class LoggerProvider
 * @package Connect\RuntimeProviders
 */
class LoggerServiceProvider extends MockServiceProvider
{
    public function register(Container $container)
    {
        $logger = \Mockery::mock('\Psr\Log\LoggerInterface');

        $logger->shouldReceive('emergency')->withAnyArgs();
        $logger->shouldReceive('alert')->withAnyArgs();
        $logger->shouldReceive('critical')->withAnyArgs();
        $logger->shouldReceive('error')->withAnyArgs();
        $logger->shouldReceive('warning')->withAnyArgs();
        $logger->shouldReceive('notice')->withAnyArgs();
        $logger->shouldReceive('info')->withAnyArgs();
        $logger->shouldReceive('debug')->withAnyArgs();

        $logger->shouldReceive('dump')->withAnyArgs();

        return $logger;
    }
}
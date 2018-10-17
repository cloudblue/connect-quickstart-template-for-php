<?php

namespace Test\Providers;

use Pimple\Container;

/**
 * Class HttpServiceProvider
 * @package Test\Unit\Runtime\Providers
 */
class HttpServiceProvider extends MockServiceProvider
{
    public function register(Container $container)
    {
        $content = '[]';
        $fakeRequestFile = dirname(__DIR__) . '/Feature/' . self::$scope . '.json';
        if (is_readable($fakeRequestFile)) {
            $content = trim(file_get_contents($fakeRequestFile));
        }

        $body = \Mockery::mock('\Psr\Http\Message\StreamInterface');
        $body->shouldReceive('getContents')
            ->andReturn($content);

        $response = \Mockery::mock('\Psr\Http\Message\ResponseInterface');
        $response->shouldReceive('getStatusCode')
            ->andReturn(200);

        $response->shouldReceive('getBody')
            ->andReturn($body);

        $client = \Mockery::mock('GuzzleHttp\ClientInterface');
        $client->shouldReceive('request')
            ->withAnyArgs()
            ->andReturn($response);

        return $client;
    }
}
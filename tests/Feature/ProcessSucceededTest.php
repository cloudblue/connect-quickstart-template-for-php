<?php

/**
 * This file is part of the Ingram Micro Cloud Blue Connect SDK.
 *
 * @copyright (c) 2020. Ingram Micro. All Rights Reserved.
 */
namespace Test\Feature;

use Test\TestCase;

/**
 * Class ExampleTest
 * @package Test\Feature
 */
class ProcessSucceededTest extends TestCase
{
    public function testInstantiationAndConfiguration()
    {
        $this->assertInstanceOf('\Connect\FulfillmentAutomation', $this->app);
        $this->assertInstanceOf('\App\ProductFulfillment', $this->app);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function testProcess()
    {
        foreach ($this->app->listRequests(['status' => 'pending']) as $request) {
            $this->assertEquals('succeed (Activation succeeded)', $this->app->dispatch($request));
        }
    }

    public function testRun()
    {
        $this->assertTrue($this->app->run());
    }
}

<?php

/**
 * This file is part of the Ingram Micro Cloud Blue Connect SDK.
 *
 * @copyright (c) 2018. Ingram Micro. All Rights Reserved.
 */

namespace Test\Feature;

use Test\TestCase;

/**
 * Class ExampleTest
 * @package Test\Feature
 */
class ProcessSkipTest extends TestCase
{
    public function testInstantiationAndConfiguration()
    {
        $this->assertInstanceOf('\Connect\FulfillmentAutomation', $this->app);
        $this->assertInstanceOf('\App\ProductFulfillment', $this->app);
    }
}
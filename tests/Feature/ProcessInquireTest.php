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
class ProcessInquireTest extends TestCase
{
    public function testInstantiationAndConfiguration()
    {
        $this->assertInstanceOf('\Connect\FulfillmentAutomation', $this->app);
        $this->assertInstanceOf('\App\ProductFulfillment', $this->app);
    }
}

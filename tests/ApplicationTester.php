<?php

/**
 * This file is part of the Ingram Micro Cloud Blue Connect SDK.
 *
 * @copyright (c) 2018. Ingram Micro. All Rights Reserved.
 */

namespace Test;

use App\ProductFulfillment;

/**
 * Class ApplicationTester
 * @package Test
 */
class ApplicationTester extends ProductFulfillment
{
    public function dispatch($request)
    {
        return parent::dispatch($request);
    }
}
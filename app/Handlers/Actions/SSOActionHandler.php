<?php

namespace App\Handlers\Actions;


/**
 * Class SSOActionHandler
 * @copyright Copyright (C) 2018 Ingram Micro Inc. Any rights not granted herein
 * are reserved for Ingram Micro Inc. Permission to use, copy and distribute this
 * source code without fee and without a signed license agreement is hereby granted
 * provided that: (i) the above copyright notice and this paragraph appear in all
 * copies and distributions; and (ii) the source code is only used, copied or
 * distributed for the purpose of using it with the APS package for which Ingram Micro Inc.
 * or its affiliates integrated it into. Ingram Micro Inc. may revoke the limited license
 * granted herein at any time at its sole discretion. THIS SOURCE CODE IS PROVIDED
 * "AS IS". INGRAM MICRO INC. MAKES NO REPRESENTATIONS OR WARRANTIES AND DISCLAIMS
 * ALL IMPLIED WARRANTIES OF MERCHANTABILITY OR FITNESS FOR ANY PARTICULAR PURPOSE.
 * @package App\Handlers\Actions
 */
class SSOActionHandler extends \Connect\Actions\Handler
{
    public function handle()
    {
        // TODO: Implement handle() method.
        var_dump(__CLASS__, $this->input);

    }
}
<?php

require 'vendor/autoload.php';

$requests = new \App\TierAccountsRequestsWorkflow();
$requests->run();

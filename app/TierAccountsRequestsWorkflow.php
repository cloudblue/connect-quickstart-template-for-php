<?php
/**
 * This file is part of the Ingram Micro Cloud Blue Connect SDK.
 *
 * @copyright (c) 2020. Ingram Micro. All Rights Reserved.
 */

namespace App;

/**
 * Class TierAccountsRequestsWorkflow
 * @package App
 */
class TierAccountsRequestsWorkflow extends \Connect\TierAccountRequestsAutomation
{
    /**
     * @param \Connect\TierAccountRequest $request
     */
    public function processTierAccountRequest(\Connect\TierAccountRequest $request)
    {
        //TODO: Implement processTierAccountRequest() method.
    }

    /**
     * Run the Tier Account Request Processor
     * @return bool
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function run()
    {
        try {

            /**
             * run the application in custom context, any error
             * handling customization should be done here
             */
            $this->process();
            return true;
        } catch (\Exception $e) {
            $this->logger->error($e->getMessage());
            if (is_callable([$this->logger, 'dump'])) {
                $this->logger->dump();
            }
        }

        return false;
    }
}

<?php

namespace App;

/**
 * Class ProductFulfillment
 * @package App
 */
class ProductFulfillment extends \Connect\FulfillmentAutomation
{

    /**
     * Process each pending request
     * @param \Connect\Request $request
     */
    public function processRequest($request)
    {
        // TODO: Implement processRequest() method.
    }
    
    /**
    * Processing each pending Tier Config
    * @param \Connect\TierConfigRequest $tierConfigRequest
    */
    public function processTierConfigRequest($tierConfigRequest)
    {
        // TODO: Implement processTierConfigRequest() method
    }

    /**
     * Run the Product Fulfillment Request Processor
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

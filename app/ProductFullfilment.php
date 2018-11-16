<?php

namespace App;

/**
 * Class ProductFulfillment
 * @package App
 */
class ProductFulfillment extends \Connect\FulfillmentAutomation
{
    /**
     * Handle the incoming http requests
     * @return bool
     */
    public function actions()
    {
        try {




            $this->route($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
            return true;

        } catch (\Exception $e) {

            $this->logger->error($e->getMessage());

            /** this call must be removed in future versions */
            if (is_callable([$this->logger, 'dump'])) {
                $this->logger->dump();
            }
        }

        return false;
    }

    /**
     * Run the Product Fulfillment Request Processor
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @return bool
     */
    public function run()
    {
        try {

            /** dispatch each pending request */
            foreach ($this->listRequests(['status' => 'pending']) as $request) {
                $this->dispatch($request);
            }

            return true;

        } catch (\Exception $e) {

            $this->logger->error($e->getMessage());

            /** this call must be removed in future versions */
            if (is_callable([$this->logger, 'dump'])) {
                $this->logger->dump();
            }
        }

        return false;
    }

}
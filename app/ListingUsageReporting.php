<?php
/**
 * Created by PhpStorm.
 * User: marc
 * Date: 2019-03-11
 * Time: 19:21
 */

namespace App;

/**
 * Class ListingUsageReporting
 * @package App
 */
class ListingUsageReporting extends \Connect\UsageAutomation
{

    /**
     * @param $listing
     * @return bool|string
     * @throws \Connect\Usage\FileCreationException
     * @throws \Connect\Usage\FileRetrieveException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function processUsageForListing($listing)
    {
        // TODO: Implement processUsageForListing() method.
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
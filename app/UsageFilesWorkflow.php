<?php
/**
 * This file is part of the Ingram Micro Cloud Blue Connect SDK.
 *
 * @copyright (c) 2020. Ingram Micro. All Rights Reserved.
 */

namespace App;

class UsageFilesWorkflow extends \Connect\UsageFileAutomation
{
    /**
     * @param $usageFile
     * @throws \Connect\Usage\Accept
     * @throws \Connect\Usage\Delete
     * @throws \Connect\Usage\Skip
     * @throws \Connect\Usage\Submit
     */
    public function processUsageFiles($usageFile)
    {
        // TODO: Implement processUsageFiles() method.
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

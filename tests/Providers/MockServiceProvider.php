<?php

namespace Test\Providers;

use Connect\Runtime\ServiceProvider;

/**
 * Class MockServiceProvider
 * @package Test\Providers
 */
abstract class MockServiceProvider extends ServiceProvider
{
    /**
     * Declare the scope of the test
     * @var string
     */
    protected static $scope;

    /**
     * Return the current scope
     * @return string
     */
    public static function getScope()
    {
        return self::$scope;
    }

    /**
     * Set the current scope
     * @param $scope
     */
    public static function setScope($scope)
    {
        self::$scope = $scope;
    }

    /**
     * Return the mock file by service id
     * @param string $id
     * @return string
     */
    public static function getMockFileByServiceID($id)
    {
        return dirname(__DIR__) . '/Feature/' . self::$scope . '.' . trim($id) . '.json';
    }

    /**
     * Return the mock file
     * @param $filePath
     * @return string
     */
    public static function getMockFile($filePath)
    {
        return dirname(__DIR__) . $filePath;
    }

    /**
     * Return the actual content of the mock file by id
     * @param string $id
     * @return string|null
     */
    public static function getMockContentByServiceID($id)
    {
        if (is_readable(self::getMockFileByServiceID($id))) {
            return trim(file_get_contents(self::getMockFileByServiceID($id)));
        }

        return null;
    }

    /**
     * Return the actual content of the mock file
     * @param string $filePath
     * @return string|null
     */
    public static function getMockContent($filePath)
    {
        if (is_readable(self::getMockFile($filePath))) {
            return trim(file_get_contents(self::getMockFile($filePath)));
        }

        return null;
    }
}
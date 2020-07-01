<?php

/**
* 
* @author Raphael da Silva
* @copyright 2015
*
**/
abstract class SimpleZipTestCase extends PHPUnit_Framework_TestCase
{
    protected function createZipArchiveMock(Array $methods = null)
    {
        $mockBuilder = $this->getMockBuilder('ZipArchive');

        if (!is_null($methods)) {
            $mockBuilder->setMethods($methods);
        }

        return $mockBuilder->getMock();
    }
}

<?php

use SimpleZip\ZipCreator;

/**
*
* @author Raphael da Silva
* @copyright 2015
*
**/
class ZipCreatorTest extends SimpleZipTestCase
{
    private function createZipArchiveMockToCreateFile($return)
    {
        $mock = $this->createZipArchiveMock();
        $mock->method('open')
             ->willReturn($return);

        return $mock;
    }

    private function createZipCreatorInstance($return)
    {
        return new ZipCreator(
            $this->createZipArchiveMockToCreateFile($return)
        );
    }

    public function testZipFileCreationShouldReturnTrue()
    {
        $simpleZip = $this->createZipCreatorInstance(true);

        $result = $simpleZip->create('test.zip', array(
            'file.txt'
        ));

        $this->assertTrue(
            $result
        );
    }

    /**
    *
    * @expectedException RunTimeException
    * @expectedExceptionMessage Error on create test.zip
    *
    **/
    public function testZipFileOpenToCreationShouldThrowsAException()
    {
        $simpleZip = $this->createZipCreatorInstance(false);

        $simpleZip->create('test.zip', array(
            'file.txt'
        ));
    }
}

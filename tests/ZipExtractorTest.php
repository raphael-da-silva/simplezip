<?php

use SimpleZip\ZipExtractor;

/**
*
* @author Raphael da Silva
* @copyright 2015
*
**/
class ZipExtractorTest extends SimpleZipTestCase
{
    private function createZipArchiveMockToExtract($return)
    {
        $mock = $this->createZipArchiveMock(array(
            'open',
            'extractTo',
            'close'
        ));

        $mock->method('open')
             ->willReturn($return);

        $mock->method('extractTo')
             ->willReturn($return);

        return $mock;
    }

    public function testZipExtractionShouldReturnTrue()
    {
        $simpleZip = new ZipExtractor(
            $this->createZipArchiveMockToExtract(true)
        );

        $this->assertTrue(
            $simpleZip->extract('test.zip', 'target-path')
        );
    }
}

<?php

namespace SimpleZip;

use SimpleZip\Interfaces\IZipExtractor;

/**
* 
* @author Raphael da Silva
* @copyright 2015
*
**/
class ZipExtractor implements IZipExtractor
{
    private $zipArchive;

    public function __construct(\ZipArchive $zipArchive)
    {
        $this->zipArchive = $zipArchive;
    }

    private function openBeforeExtract($filename)
    {
        if ($this->zipArchive->open($filename) !== true) {
            throw new \RunTimeException('Error on open ' . $filename);
        }
    }

    public function extract($filename, $target)
    {
        $this->openBeforeExtract($filename);
        $extract = $this->zipArchive->extractTo($target);
        $this->zipArchive->close();

        return $extract;
    }
}

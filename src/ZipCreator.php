<?php

namespace SimpleZip;

use SimpleZip\Interfaces\IZipCreator;

/**
* 
* @author Raphael da Silva
* @copyright 2015
*
**/
class ZipCreator implements IZipCreator
{
    private $zipArchive;

    public function __construct(\ZipArchive $zipArchive)
    {
        $this->zipArchive = $zipArchive;
    }

    private function addFiles(array $files)
    {
        foreach ($files as $file) {
            $this->zipArchive->addFile($file);
        }
    }

    private function createFile($filename)
    {
        $wasCreated = $this->zipArchive->open($filename, \ZipArchive::CREATE);

        if ($wasCreated !== true) {
            throw new \RunTimeException('Error on create ' . $filename);
        }

        return $wasCreated;
    }

    public function create($filename, Array $files)
    {
        $wasCreated = $this->createFile($filename);
        $this->addFiles($files);
        $this->zipArchive->close();

        return $wasCreated;
    }
}

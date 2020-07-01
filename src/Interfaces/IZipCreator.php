<?php

namespace SimpleZip\Interfaces;

/**
* 
* @author Raphael da Silva
* @copyright 2015
*
**/
interface IZipCreator
{
    /**
    *
    * @param string $zipfile
    * @param array $files
    * @return bool
    *
    **/
    public function create($zipfile, array $files);
}

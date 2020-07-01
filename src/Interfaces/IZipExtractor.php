<?php

namespace SimpleZip\Interfaces;

/**
* 
* @author Raphael da Silva
* @copyright 2015
*
**/
interface IZipExtractor
{
    /**
    *
    * @param string $zipfile
    * @param string $target
    * @return bool
    *
    **/
    public function extract($zipfile, $target);
}

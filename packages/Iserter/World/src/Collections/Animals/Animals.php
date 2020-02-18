<?php


namespace Iserter\World\Collections\Animals;


use Illuminate\Support\Collection;
use Iserter\World\Collections\CollectionBase;

class Animals extends CollectionBase {

    function getDefaultItems()
    {
        $filePath = $this->dataPath('animals/common.json');
        $source = $this->readJsonFile($filePath);
        return $source['animals'];
    }

}

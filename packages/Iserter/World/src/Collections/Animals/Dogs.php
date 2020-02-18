<?php


namespace Iserter\World\Collections\Animals;


use Iserter\World\Collections\CollectionBase;

class Dogs extends CollectionBase
{

    function getDefaultItems()
    {
        $filePath = $this->dataPath('animals/dogs.json');
        $source = $this->readJsonFile($filePath);
        return $source['dogs'];
    }
}

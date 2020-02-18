<?php


namespace Iserter\World\Collections\Animals;


use Iserter\World\Collections\CollectionBase;

class Cats extends CollectionBase
{

    function getDefaultItems()
    {
        $filePath = $this->dataPath('animals/cats.json');
        $source = $this->readJsonFile($filePath);
        return $source['cats'];
    }
}

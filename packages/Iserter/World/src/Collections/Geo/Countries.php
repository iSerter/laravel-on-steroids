<?php


namespace Iserter\World\Collections\Geo;


use Iserter\World\Collections\CollectionBase;

class Countries extends CollectionBase
{
    function getDefaultItems()
    {
        $filePath = $this->dataPath('geography/countries.json');
        $source = $this->readJsonFile($filePath);
        $items = [];
        foreach ($source as $k => $v) {
            $items[] = array_merge(['code' => $k], $v);
        }
        return $items;
    }
}

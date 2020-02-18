<?php


namespace Iserter\World\Collections\Geo;


use Iserter\World\Collections\CollectionBase;

class Cities extends CollectionBase
{

    function getDefaultItems()
    {
        $filePath = $this->dataPath('geography/cities01.json');
        $source = $this->readJsonFile($filePath);
        $items = [];
        foreach ($source as $k => $v) {
            $items[] = [
                'name' => $v['name'],
                'country_code' => $v['country'],
                'lat' => $v['lat'],
                'lng' => $v['lng'],
            ];
        }
        return $items;
    }
}

<?php


namespace Iserter\World\Collections\Animals;


use Iserter\World\Collections\CollectionBase;

class Birds extends CollectionBase
{

    function getDefaultItems()
    {
        $filePath = $this->dataPath('animals/birds_north_america.json');
        $source = $this->readJsonFile($filePath);
        $items = [];
        foreach ($source['birds'] as $birds) {
            foreach ($birds['members'] as $bird) {
                $items[] = [
                    'type' => $bird,
                    'family' => $birds['family']
                ];
            }
        }
    }

}

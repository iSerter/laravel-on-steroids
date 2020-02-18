<?php


namespace Iserter\World\Collections;


use Illuminate\Support\Collection;

abstract class CollectionBase extends Collection
{

    public function __construct($items = [])
    {
        if (empty($items)) {
            $items = $this->getDefaultItems();
        }
        parent::__construct($items);
    }

    abstract function getDefaultItems();

    public function dataPath($suffix = '')
    {
        return __DIR__ . '/../../database/data/' . $suffix;
    }

    public function readJsonFile($filePath, $assoc = true)
    {
        return json_decode(file_get_contents($filePath), $assoc);
    }


}

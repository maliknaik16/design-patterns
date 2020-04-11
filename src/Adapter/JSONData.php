<?php

/**
 * @file
 * Contains DesignPattern\Adapter\JSONData
 */

namespace DesignPattern\Adapter;

/**
 * A JSONData class.
 */
class JSONData
{
    /**
     * The JSON data variable.
     *
     * @var string
     */
    protected $jsonData;

    /**
     * Initialize the object.
     *
     * @param string $jsonData
     */
    public function __construct(string $jsonData)
    {
        $this->jsonData = $jsonData;
    }

    /**
     * Returns the XML Data as a string.
     *
     * @return string
     */
    public function getJsonData() : string
    {
        return $this->jsonData;
    }
}

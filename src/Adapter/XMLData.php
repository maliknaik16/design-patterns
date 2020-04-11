<?php

/**
 * @file
 * Contains DesignPattern\Adapter\XMLData
 */

namespace DesignPattern\Adapter;

/**
 * A XMLData class.
 */
class XMLData
{
    /**
     * The XML data variable.
     *
     * @var string
     */
    protected $xmlData;

    /**
     * Initialize the object.
     *
     * @param string $xmlData
     */
    public function __construct(string $xmlData)
    {
        $this->xmlData = $xmlData;
    }

    /**
     * Returns the XML Data as a string.
     *
     * @return string
     */
    public function getXmlData() : string
    {
        return $this->xmlData;
    }
}

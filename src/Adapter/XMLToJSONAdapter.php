<?php

/**
 * @file
 * Contains DesignPattern\Adapter\XMLToJSONAdapter
 */

namespace DesignPattern\Adapter;

/**
 * A XMLToJSONAdapter class.
 */
class XMLToJSONAdapter extends JSONData
{
    /**
     * Initialize the object.
     *
     * @param XMLData $xmlData
     */
    public function __construct(XMLData $xmlData)
    {
        $this->xmlData = $xmlData;
    }

    /**
     * {@inheritdoc}
     */
    public function getJsonData() : string
    {
        $xml = simplexml_load_string($this->xmlData->getXmlData());

        return json_encode($xml);
    }

}

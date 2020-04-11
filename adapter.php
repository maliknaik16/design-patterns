<?php

require_once 'vendor/autoload.php';

use DesignPattern\Adapter\XMLData;
use DesignPattern\Adapter\JSONData;
use DesignPattern\Adapter\XMLToJSONAdapter;

// Store XML Data as string.
$xml_string = <<<XML
<?xml version="1.0" encoding="UTF-8" ?>
<books>
    <book>
        <title>Programming PHP</title>
        <author>Rasmus Lerdorf</author>
    </book>
    <book>
        <title>PHP Cookbook</title>
        <author>Adam Trachtenberg and David Sklar</author>
    </book>
</books>
XML;

// Instantiate an XMLData object using the above xml.
$xml = new XMLData($xml_string);

// Pass the XMLData object to the adapter that returns the json data as string
// after converting the xml data to json.
$adapter = new XMLToJSONAdapter($xml);

// Get the JSON Data from the adapter
print $adapter->getJsonData() . "\n";

// Outputs:
//
// {"book":[{"title":"Programming PHP","author":"Rasmus Lerdorf"},{"title":"PHP Cookbook","author":"Adam Trachtenberg and David Sklar"}]}


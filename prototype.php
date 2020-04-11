<?php

require_once 'vendor/autoload.php';

use DesignPattern\Prototype\Prototype;
use DesignPattern\Prototype\BackReference;

// Create an instance of the Prototype object.
$prototype = new Prototype;

// Initialize the values to the Prototype object.
$prototype->intVariable = 512;
$prototype->dateTime = new \DateTime;
$prototype->circularReference = new BackReference($prototype);

// Clone the Prototype object.
$prototype_clone = clone $prototype;


// Check if the objects are cloned successfully.
if ($prototype->intVariable === $prototype_clone->intVariable) {
    print "Integer value is cloned successfully. \n";
}

if ($prototype->dateTime !== $prototype_clone->dateTime) {
    print "DateTime object is cloned successfully. \n";
}

if ($prototype->circularReference !== $prototype_clone->circularReference) {
    print "BackReference object with circular reference is cloned successfully. \n";
}

// Outputs:
//
// Integer value is cloned successfully.
// DateTime object is cloned successfully.
// BackReference object with circular reference is cloned successfully.

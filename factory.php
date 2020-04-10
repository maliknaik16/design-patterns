<?php

require_once 'vendor/autoload.php';

use DesignPattern\Factory\Logistics;
use DesignPattern\Factory\RoadLogistics;
use DesignPattern\Factory\SeaLogistics;

function printTransportDetails(Logistics $logistics)
{
	print $logistics->getTransportMessage() . "\n";
}

printTransportDetails(new RoadLogistics);
printTransportDetails(new SeaLogistics);

// Output:
//
// Truck: Deliver by land in a box.
// Ship: Deliver by sea in a container.

<?php

/**
 * @file
 * Contains DesignPattern\Factory\RoadLogistics
 */

namespace DesignPattern\Factory;

/**
 * A RoadLogistics class.
 */
class RoadLogistics extends Logistics
{
    /**
     * {@inheritdoc}
     */
    public function createTransport() : Transport
    {
        return new Truck;
    }

}

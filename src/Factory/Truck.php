<?php

/**
 * @file
 * Contains DesignPattern\Factory\Truck
 */

namespace DesignPattern\Factory;

/**
 * A Truck class.
 */
class Truck implements Transport
{
    /**
     * {@inheritdoc}
     */
    public function deliver() : string
    {
        return 'Deliver by land in a box.';
    }

}

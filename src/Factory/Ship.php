<?php

/**
 * @file
 * Contains DesignPattern\Factory\Ship
 */

namespace DesignPattern\Factory;

/**
 * A Ship class.
 */
class Ship implements Transport
{
    /**
     * {@inheritdoc}
     */
    public function deliver() : string
    {
        return 'Deliver by sea in a container.';
    }

}

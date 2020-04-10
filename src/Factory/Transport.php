<?php

/**
 * @file
 * Contains DesignPattern\Factory\Transport
 */

namespace DesignPattern\Factory;

/**
 * A Transport interface.
 */
interface Transport
{
    /**
     * Contains the logic to deliver the goods. For this example, it will return
     * a simple string.
     *
     * @return string
     */
    public function deliver() : string;
}

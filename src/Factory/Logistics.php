<?php

/**
 * @file
 * Contains DesignPattern\Factory\Logistics
 */

namespace DesignPattern\Factory;

/**
 * A Logistics class.
 */
abstract class Logistics
{
    /**
     * Contains the logic to instantiate the right transport object.
     *
     * @return DesignPattern\Factory\Transport
     */
    abstract public function createTransport() : Transport;

    /**
     * Returns the details as string related to Transport object.
     *
     * @return string
     */
    public function getTransportMessage() : string
    {
        // Get the instance of the `Transport` class.
        $transport = $this->createTransport();

        // Split the class namespace by `\`.
        $class_name = explode('\\', get_class($transport));

        return array_pop($class_name) . ': ' . $transport->deliver();
    }
}

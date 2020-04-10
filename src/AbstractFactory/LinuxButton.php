<?php

/**
 * @file
 * Contains DesignPattern\AbstractFactory\LinuxButton
 */

namespace DesignPattern\AbstractFactory;

/**
 * A LinuxButton class.
 */
class LinuxButton implements Button
{
    /**
     * {@inheritdoc}
     */
    public function render() : string
    {
        return 'Linux Button rendered';
    }

}

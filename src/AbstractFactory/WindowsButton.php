<?php

/**
 * @file
 * Contains DesignPattern\AbstractFactory\WindowsButton
 */

namespace DesignPattern\AbstractFactory;

/**
 * A WindowsButton class.
 */
class WindowsButton implements Button
{
    /**
     * {@inheritdoc}
     */
    public function render() : string
    {
        return 'Windows Button rendered';
    }

}

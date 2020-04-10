<?php

/**
 * @file
 * Contains DesignPattern\AbstractFactory\Button
 */

namespace DesignPattern\AbstractFactory;

/**
 * A Button interface.
 */
interface Button
{
    /**
     * Renders the button on the screen.
     *
     * @return string
     */
    public function render() : string;

}

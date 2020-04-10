<?php

/**
 * @file
 * Contains DesignPattern\AbstractFactory\ProgressBar
 */

namespace DesignPattern\AbstractFactory;

/**
 * A ProgressBar interface.
 */
interface ProgressBar
{
    /**
     * Renders the progress bar on the screen.
     *
     * @return string
     */
    public function render() : string;

}

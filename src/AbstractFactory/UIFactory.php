<?php

/**
 * @file
 * Contains DesignPattern\AbstractFactory\UIFactory
 */

namespace DesignPattern\AbstractFactory;

/**
 * A UIFactory interface.
 */
interface UIFactory
{
    /**
     * Instantiates and returns the instance of the Chair.
     *
     * @return DesignPattern\AbstractFactory\Chair
     */
    public function createButton() : Button;

    /**
     * Instantiates and returns the instance of the ProgressBar.
     *
     * @return DesignPattern\AbstractFactory\ProgressBar
     */
    public function createProgressBar() : ProgressBar;

}

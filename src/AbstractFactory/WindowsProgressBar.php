<?php

/**
 * @file
 * Contains DesignPattern\AbstractFactory\WindowsProgressBar
 */

namespace DesignPattern\AbstractFactory;

/**
 * A WindowsProgressBar class.
 */
class WindowsProgressBar implements ProgressBar
{
    /**
     * {@inheritdoc}
     */
    public function render() : string
    {
        return 'Windows progress bar rendered';
    }

}

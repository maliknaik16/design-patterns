<?php

/**
 * @file
 * Contains DesignPattern\AbstractFactory\LinuxProgressBar
 */

namespace DesignPattern\AbstractFactory;

/**
 * A LinuxProgressBar class.
 */
class LinuxProgressBar implements ProgressBar
{
    /**
     * {@inheritdoc}
     */
    public function render() : string
    {
        return 'Linux progress bar rendered';
    }

}

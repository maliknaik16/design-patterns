<?php

/**
 * @file
 * Contains DesignPattern\AbstractFactory\WindowsFactory
 */

namespace DesignPattern\AbstractFactory;

/**
 * A WindowsFactory class.
 */
class WindowsFactory implements UIFactory
{

    /**
     * {@inheritdoc}
     */
    public function createButton() : Button
    {
        return new WindowsButton;
    }

    /**
     * {@inheritdoc}
     */
    public function createProgressBar() : ProgressBar
    {
        return new WindowsProgressBar;
    }
}

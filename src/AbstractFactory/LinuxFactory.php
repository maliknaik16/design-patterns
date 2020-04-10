<?php

/**
 * @file
 * Contains DesignPattern\AbstractFactory\LinuxFactory
 */

namespace DesignPattern\AbstractFactory;

/**
 * A LinuxFactory class.
 */
class LinuxFactory implements UIFactory
{

    /**
     * {@inheritdoc}
     */
    public function createButton() : Button
    {
        return new LinuxButton;
    }

    /**
     * {@inheritdoc}
     */
    public function createProgressBar() : ProgressBar
    {
        return new LinuxProgressBar;
    }
}

<?php

require_once 'vendor/autoload.php';

use DesignPattern\AbstractFactory\UIFactory;
use DesignPattern\AbstractFactory\WindowsFactory;
use DesignPattern\AbstractFactory\LinuxFactory;

use DesignPattern\AbstractFactory\Button;
use DesignPattern\AbstractFactory\LinuxButton;
use DesignPattern\AbstractFactory\WindowsButton;

use DesignPattern\AbstractFactory\ProgressBar;
use DesignPattern\AbstractFactory\WindowsProgressBar;
use DesignPattern\AbstractFactory\LinuxProgressBar;


/**
 * The Application class.
 */
class Application
{
    /**
     * The button instance.
     *
     * @var \DesignPattern\AbstractFactory\Button
     */
    private $button;

    /**
     * The progress bar instance.
     *
     * @var \DesignPattern\AbstractFactory\ProgressBar
     */
    private $progressBar;

    /**
     * Initializes the application with some UI elements.
     *
     * @param \DesignPattern\AbstractFactory\UIFactory $factory
     */
    public function __construct(UIFactory $factory)
    {
        $this->button = $factory->createButton();
        $this->progressBar = $factory->createProgressBar();
    }

    /**
     * Renders all the UI elements defined in the application.
     *
     * @return void
     */
    public function renderUI()
    {
        print $this->button->render() . "\n";
        print $this->progressBar->render() . "\n";
    }
}

/**
 * Starts the application on the Operating system provided as argument.
 *
 * @param string $os
 *
 * @return Application
 */
function startApplication(string $os)
{
    if ($os === 'Windows') {
        $factory = new WindowsFactory;
    } else {
        $factory = new LinuxFactory;
    }

    return new Application($factory);
}

startApplication('Linux')->renderUI();


// Outputs:
//
// Linux Button rendered
// Linux progress bar rendered

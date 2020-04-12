<?php

/**
 * @file
 * Contains DesignPattern\ChainOfResponsibility\Middleware
 */

namespace DesignPattern\ChainOfResponsibility;

/**
 * An abstract Middleware class.
 */
abstract class Middleware
{
    /**
     * The next middleware object.
     *
     * @var DesignPattern\ChainOfResponsibility\Middleware
     */
    protected $nextInChain;

    /**
     * Sets the next middleware object.
     *
     * @param DesignPattern\ChainOfResponsibility\Middleware $middleware
     *
     * @return void
     */
    public function setNext(Middleware $middleware) : void
    {
        $this->nextInChain = $middleware;
    }

    /**
     * Handles the request.
     *
     * @param DesignPattern\ChainOfResponsibility\Request $request
     *
     * @return void
     */
    public function handle(Request $request) : void
    {
        if ($this->nextInChain !== null) {
            $this->nextInChain->handle($request);
        }
    }

}

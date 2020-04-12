<?php

/**
 * @file
 * Contains DesignPattern\ChainOfResponsibility\Welcome
 */

namespace DesignPattern\ChainOfResponsibility;

/**
 * A Welcome class.
 */
class Welcome extends Middleware
{

    /**
     * {@inheritdoc}
     */
    public function handle(Request $request) : void
    {
        if ($request->getEmail() === "admin@example.com") {
            echo "Welcome back, Administrator.\n";

        } else {
            echo "Welcome back, regular customer.\n";
        }
        parent::handle($request);
    }

}

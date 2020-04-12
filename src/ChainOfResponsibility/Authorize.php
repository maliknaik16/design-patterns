<?php

/**
 * @file
 * Contains DesignPattern\ChainOfResponsibility\Authorize
 */

namespace DesignPattern\ChainOfResponsibility;

/**
 * An Authorize class.
 */
class Authorize extends Middleware
{

    /**
     * {@inheritdoc}
     */
    public function handle(Request $request) : void
    {
        if ($request->getEmail() === "admin@example.com") {
            echo "Authorize: User authorized as admin.\n";

        } else {
            echo "Authorize: User authorized as customer.\n";
        }

        parent::handle($request);
    }

}

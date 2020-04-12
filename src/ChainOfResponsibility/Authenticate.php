<?php

/**
 * @file
 * Contains DesignPattern\ChainOfResponsibility\Authenticate
 */

namespace DesignPattern\ChainOfResponsibility;

/**
 * An Authenticate class.
 */
class Authenticate extends Middleware
{

    /**
     * {@inheritdoc}
     */
    public function handle(Request $request) : void
    {
        $users = [
            'admin@example.com',
            'customer@example.com',
        ];

        if (in_array($request->getEmail(), $users) && $request->getPassword() === "1234") {
            echo "Authenticate: User successfully authenticated.\n";

            parent::handle($request);
        } else {
            echo "Authenticate: Unable to authenticate user.\n";
        }
    }

}

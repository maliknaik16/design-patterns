<?php

/**
 * @file
 * Contains DesignPattern\ChainOfResponsibility\Request
 */

namespace DesignPattern\ChainOfResponsibility;

/**
 * An Request class.
 */
class Request
{

    /**
     * The users email.
     *
     * @var string
     */
    private $email;

    /**
     * The users password.
     *
     * @var string
     */
    private $password;

    /**
     * Initialize the object.
     *
     * @param string $email
     * @param string $password
     */
    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    /**
     * Returns the users email.
     *
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }

    /**
     * Returns the users password.
     *
     * @return string
     */
    public function getPassword() : string
    {
        return $this->password;
    }

}

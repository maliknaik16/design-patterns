<?php

/**
 * @file
 * Contains DesignPattern\Singleton\Singleton
 */

namespace DesignPattern\Singleton;

/**
 * A Singleton design pattern class.
 *
 * There can be only one instance of this class.
 */
class Singleton
{
    /**
     * The instance of this class.
     *
     * @var DesignPattern\Singleton\Singleton
     */
    private static $instance;

    /**
     * Make this class uninitializable.
     */
    protected function __construct() {}

    /**
     * Make this class unclonable.
     */
    protected function __clone() {}

    /**
     * The Singleton class shouldn't be unserializable.
     */
    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a Singleton class.");
    }

    /**
     * Returns the instance of this class.
     *
     * @return DesignPattern\Singleton\Singleton
     */
    public static function getInstance() : Singleton
    {
        // If there is no instance of this class then create one and return.
        if (self::$instance == null) {
            self::$instance = new static;
        }

        return self::$instance;
    }

    /**
     * Returns the message where the two classes are same or not.
     *
     * @param DesignPattern\Singleton\Singleton $s1
     * @param DesignPattern\Singleton\Singleton $s2
     *
     * @return string
     */
    public function getMessage(Singleton $s1, Singleton $s2) : string
    {
        if ($s1 === $s2) {
            return 'Both the instances of these classes are same.';
        }

        return 'Both the instances of these classes are different.';
    }
}
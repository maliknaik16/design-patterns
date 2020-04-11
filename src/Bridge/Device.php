<?php

/**
 * @file
 * Contains DesignPattern\Bridge\Device
 */

namespace DesignPattern\Bridge;

/**
 * A Device class.
 */
abstract class Device
{

    /**
     * Stores the On/Off state of the device.
     *
     * @var bool
     */
    protected $enabled = false;

    /**
     * Stores the volume of the device.
     *
     * @var float
     */
    protected $volume = 50.0;

    /**
     * Stores the current channel on the device.
     *
     * @var int
     */
    protected $channel = 1;

    /**
     * Checks whether the device is enabled or not.
     *
     * @return bool
     */
    public function isEnabled() : bool
    {
        return $this->enabled;
    }

    /**
     * Enables the device.
     *
     * @return void
     */
    public function enable() : void
    {
        $this->enabled = true;
    }

    /**
     * Disables the device.
     *
     * @return void
     */
    public function disable() : void
    {
        $this->enabled = false;
    }

    /**
     * Sets the volume.
     *
     * @var float $percentage
     *
     * @return void
     */
    public function setVolume(float $percentage) : void
    {
        $this->volume = $percentage;
    }

    /**
     * Gets the volume.
     *
     * @return float
     */
    public function getVolume() : float
    {
        return $this->volume;
    }

    /**
     * Sets the channel.
     *
     * @var int $channel
     *
     * @return void
     */
    public function setChannel(int $channel) : void
    {
        $this->channel = $channel;
    }

    /**
     * Gets the channel.
     *
     * @return int
     */
    public function getChannel() : int
    {
        return $this->channel;
    }

    /**
     * Returns the device state as string.
     *
     * @return string
     */
    abstract function getDeviceState() : string;
}

<?php

/**
 * @file
 * Contains DesignPattern\Factory\SeaLogistics
 */

namespace DesignPattern\Factory;

/**
 * A SeaLogistics class.
 */
class SeaLogistics extends Logistics
{
	/**
	 * {@inheritdoc}
	 */
	public function createTransport() : Transport
	{
		return new Ship;
	}

}

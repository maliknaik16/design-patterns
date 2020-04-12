<?php

/**
 * @file
 * Contains DesignPattern\Proxy\Downloader
 */

namespace DesignPattern\Proxy;

/**
 * A Downloader interface.
 */
interface Downloader
{
    /**
     * Downloads the data from the url.
     *
     * @param string $url
     *
     * @return string
     */
    public function download(string $url) : string;

}

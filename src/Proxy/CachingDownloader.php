<?php

/**
 * @file
 * Contains DesignPattern\Proxy\CachingDownloader
 */

namespace DesignPattern\Proxy;

/**
 * A CachingDownloader interface.
 */
class CachingDownloader implements Downloader
{

    /**
     * The SimpleDownloader object.
     *
     * @var DesignPattern\Proxy\SimpleDownloader
     */
    protected $downloader;

    /**
     * The downloads cache.
     *
     * @var array
     */
    protected $cache = [];

    /**
     * Initialize the object.
     *
     * @param DesignPattern\Proxy\SimpleDownloader $downloader
     */
    public function __construct(SimpleDownloader $downloader)
    {
        $this->downloader = $downloader;
    }

    /**
     * {@inheritdoc}
     */
    public function download(string $url) : string
    {
        if (isset($this->cache[$url])) {
            echo "Returning the result from the cache.\n";
            return $this->cache[$url];
        }

        echo "Fetching the data.\n";
        $this->cache[$url] = $this->downloader->download($url);

        return $this->cache[$url];
    }

}

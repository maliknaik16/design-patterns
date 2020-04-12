<?php

/**
 * @file
 * Contains DesignPattern\Proxy\SimpleDownloader
 */

namespace DesignPattern\Proxy;

/**
 * A SimpleDownloader interface.
 */
class SimpleDownloader implements Downloader
{

    /**
     * {@inheritdoc}
     */
    public function download(string $url) : string
    {
        echo "Please wait....\n";
        echo "Downloading file from " . $url . "...\n";
        $result = file_get_contents($url);
        echo "Downloaded: " . strlen($result) . " Bytes\n";

        return $result;
    }

}

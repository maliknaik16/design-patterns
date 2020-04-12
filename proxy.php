<?php

require_once 'vendor/autoload.php';

use DesignPattern\Proxy\SimpleDownloader;
use DesignPattern\Proxy\CachingDownloader;

// Instantiate the caching downloader object.
$caching_downloader = new CachingDownloader(new SimpleDownloader);

// Fetch the data from http://example.com
$result = $caching_downloader->download('http://example.com');

// Fetch the data from the same url again.
$result = $caching_downloader->download('http://example.com');

// Outputs:
//
// Fetching the data.
// Please wait....
// Downloading file from http://example.com...
// Downloaded: 1256 Bytes
// Returning the result from the cache.

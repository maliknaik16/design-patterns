<?php

require_once 'vendor/autoload.php';

use DesignPattern\Decorator\PlainText;

use DesignPattern\Decorator\PlainTextFilter;
use DesignPattern\Decorator\JavascriptFilter;
use DesignPattern\Decorator\MarkDownFilter;

// Set the markdown string.
$markdownText = <<<HERE
# Introduction

Here is some text. Link: [Google](http://google.com/)

## Installation

some text **hello**. This is _italic_.

<script>hackWebsite();</script>
HERE;

// Set the HTML with script string.
$jsText = <<<HERE
<!DOCTYPE html>
<head>
<script src="http://somexsssite.com/">
</script>
</head>
<body>
<h1>Hello, World</h1>
</body>
</html>
HERE;

// Filter the string for the markdown
$markdownFilter = new MarkDownFilter(new PlainTextFilter(new PlainText));

// Filter the string for javascript
$javascriptFilter = new JavascriptFilter(new PlainText);

// Print the filtered string.
print "===================================\n";
print "Markdown: \n";
print "===================================\n";
print $markdownFilter->formatText($markdownText) . "\n\n";
print "===================================\n";
print "HTML with filtered script tag:\n";
print "===================================\n";
print $javascriptFilter->formatText($jsText) . "\n\n";

// Outputs:
//
// ===================================
// Markdown:
// ===================================
// <h1>Introduction</h1>

// <p>Here is some text. Link: <a href="http://google.com/">Google</a></p>

// <h2>Installation</h2>

// <p>some text <strong>hello</strong>. This is <em>italic</em>.</p>

// <p>hackWebsite();</p>

// ===================================
// HTML with filtered script tag:
// ===================================
// <!DOCTYPE html>
// <head>

// </head>
// <body>
// <h1>Hello, World</h1>
// </body>
// </html>


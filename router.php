<?php

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = urldecode($uri);

$requested = '/'.$uri;

// This file allows us to emulate Apache's "mod_rewrite" functionality from the
// built-in PHP web server. This provides a convenient way to test a WordPress
// application without having installed a "real" web server software here.
if ($uri !== '/' and file_exists(str_replace('//', '', $requested))) {
    return false;
}
if(strstr($uri, 'WordPress') || strstr($uri, 'content')) {
    return false;
}

//require_once 'index.php';
require_once dirname(__FILE__).'/index.php';

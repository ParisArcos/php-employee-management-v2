<?php
$documentRoot = getcwd();
const BASE_PATH = $documentRoot;

$uri = $server['request_URI'];

if (isset($uri) && $uri !== null) {
    $uri = substr($uri, 1);
    $uri = explode('/', $uri);
    $uri = "http//$_SERVER[HTTP_HOST]" . "/" . $uri[0];
} else {
    $uri = null;
}

const BASE_URL = $uri;

<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */

    'paths' => ['api/*','/message'],
    'allowed_methods' => ['POST', 'OPTIONS'],
    // Do not list a real origin here (e.g. http://localhost:5173): the web server already sends
    // `Access-Control-Allow-Origin: *`, and a second value makes browsers reject the response.
    // (Entries with a path such as /webapp never match - an Origin header has no path.)
    'allowed_origins' => ['https://blanko.tech/webapp', 'https://www.blanko.tech/webapp'],
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['Content-Type', 'Accept', 'X-Requested-With'],
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => false,


];

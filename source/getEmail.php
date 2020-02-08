<?php

define('CACHE_FILE', __DIR__.'/storage/email_cache.json');

// Check cache file, set default if can't be decoded
$cache = [];
if (
       !file_exists(CACHE_FILE)
    || ($cache = json_decode(file_get_contents(CACHE_FILE), true)) === null
) {
    $cache = [
        'email' => null,
        'expire' => 0,
    ];
}

// Cache expired
if (time() >= $cache['expire']) {
    // TODO: WRITE EMAIL RETRIEVAL FUNCTION HERE

    $cache['email'] = $matches[1];
    $cache['expire'] = time() + 603000; // 603'000 = 1w - 30min
    file_put_contents(CACHE_FILE, json_encode($cache));
}

die($cache['email']);

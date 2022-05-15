<?php

return [
    'production' => false,
    'baseUrl' => '',
    'collections' => [],
    'isIndex' => function ($page) {
        return in_array($page->getPath(), ['', '/fr', '/en']);
    },
];

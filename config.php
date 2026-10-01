<?php

$imageDimensions = [];
foreach (glob(__DIR__ . '/source/assets/images/*.jpg') as $image) {
    [$width, $height] = getimagesize($image);
    $imageDimensions['/assets/images/' . basename($image)] = compact('width', 'height');
}

return [
    'baseUrl' => '',
    'production' => false,
    'collections' => [],
    'seoOrigin' => 'https://thinky.cz',
    'languagePaths' => ['en' => '/', 'cs' => '/cs/', 'vi' => '/vi/'],
    'socialImage' => '/assets/images/profile.jpg',
    'socialProfiles' => [
        'https://www.linkedin.com/in/hailongdo',
        'https://github.com/thinkycz',
        'https://twitter.com/thinkycz',
    ],
    'imageDimensions' => $imageDimensions,
    'build' => [
        'docs' => '../docs',
    ],
];

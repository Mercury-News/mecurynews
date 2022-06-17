<?php

return [
    'production' => false,
    'baseUrl' => 'https://mercurynews.tk',
    'site' => [
        'title' => 'Mercury News',
        'description' => 'An Open Source Independant News Project',
        'image' => 'default-share.png',
    ],
    'owner' => [
        'name' => 'Mercury Co.',
    ],
    'links' => [
        'twitter' => 'https://mercurynews.netlify.app',
        'github' => 'https://github.com/mercury-news/mecurynews',
    ],
    'services' => [
        'cmsVersion' => '~2.10',
        'analytics' => 'G-NM4QF21ZPN',
        'disqus' => '',
        'formcarry' => 'XXXXXXXXXXXX',
        'cloudinary' => [
            'cloudName' => 'maxsamazingsite',
            'apiKey' => '649185272939667',
        ],
    ],
    'collections' => [
        'posts' => [
            'path' => 'posts/{filename}',
            'sort' => '-date',
            'extends' => '_layouts.post',
            'section' => 'postContent',
            'isPost' => true,
            'comments' => true,
            'tags' => [],
            'hasTag' => function ($page, $tag) {
                return collect($page->tags)->contains($tag);
            },
            'prettyDate' => function ($page, $format = 'M j, Y') {
                return date($format, $page->date);
            },
        ],
        'tags' => [
            'path' => 'tags/{filename}',
            'extends' => '_layouts.tag',
            'section' => '',
            'name' => function ($page) {
                return $page->getFilename();
            },
        ],
    ],
];

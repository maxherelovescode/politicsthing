<?php

return [
    'production' => false,
    'baseUrl' => 'https://thepeoplesparty.netlify.app',
    'site' => [
        'title' => 'The Peoples Party',
        'description' => 'By People For People',
        'image' => 'default-share.png',
    ],
    'owner' => [
        'name' => 'The Peoples Party',
        'twitter' => '',
        'github' => '',
    ],
    'services' => [
        'cmsVersion' => '2.10.156',
        'analytics' => 'UA-XXXXX-Y',
        'disqus' => '',
        'formcarry' => 'RYUuQWvZd6U',
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

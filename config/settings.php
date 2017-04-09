<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Settings all for web application
    |--------------------------------------------------------------------------
    |
    */

    'book' => [
        'number_rating' => 5,
        'is_read' => 1,
        'limit' => 15,
        'favorite' => 1,
    ],
    'user' => [
        'role' => [
            'admin' => 1,
            'member' => 0,
        ],
        'avatar_default' => 'notavailable.jpeg',
    ],
    'pagination' => [
        'limit' => 12,
        'limit-sidebar' => 5,
    ],
];

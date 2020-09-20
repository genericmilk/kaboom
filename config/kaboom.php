<?php
/*
 * Kaboom
 *
 * (c) Peter Day <peterday.main@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
return [
    
    'notifications' => [
        'slack' => [

        ],
        'vonage' => [
            'enabled' => env('KABOOM_VONAGE_ENABLED',false),            
            'to' => env('KABOOM_VONAGE_TO',''),
            'key' => env('KABOOM_VONAGE_KEY',''),
            'secret' => env('KABOOM_VONAGE_SECRET',''),
        ]
    ]

];

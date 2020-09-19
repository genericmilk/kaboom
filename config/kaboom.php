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
            'enabled' => env(false,'KABOOM_VONAGE_ENABLED'),            
            'to' => env(null,'KABOOM_VONAGE_TO'),
            'key' => env(null,'KABOOM_VONAGE_KEY'),
            'secret' => env(null,'KABOOM_VONAGE_SECRET'),
        ]
    ]

];

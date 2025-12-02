<?php

return [
    'user' => [
        ['id' => 3390756, 'name' => 'Dec', 'email' => 'dec@malevolent.website', 'password' => 'password123']
    ],

    'server' => [
        ['server_ip' => '127.0.0.1', 'server_port' => '4977'],
        ['server_ip' => '127.0.0.1', 'server_port' => '4978'],
        ['server_ip' => '127.0.0.1', 'server_port' => '4979'],
        ['server_ip' => '127.0.0.1', 'server_port' => '4980'],
        ['server_ip' => '127.0.0.1', 'server_port' => '4981']
    ],

    'user-action' => [
        ['user_id' => 3390756, 'user_name' => 'Dec', 'user_action' => 'Dec has just started playing on the Town server.'],
        ['user_id' => 3390756, 'user_name' => 'Dec', 'user_action' => 'Dec has just started playing on the Nuketown server.'],
        ['user_id' => 3390756, 'user_name' => 'Dec', 'user_action' => 'Dec has just started playing on the Buried server.'],
        ['user_id' => 3390756, 'user_name' => 'Dec', 'user_action' => 'Dec has just started playing on the Origins server.'],
        ['user_id' => 3390756, 'user_name' => 'Dec', 'user_action' => 'Dec has just started playing on the Depot server.']
    ],

    'server-action' => [
        ['server_id' => 1, 'server_map' => 'Town', 'server_Action' => 'Town server has just started and is ready to play.'],
        ['server_id' => 2, 'server_map' => 'Nuketown', 'server_Action' => 'Nuketown server has just started and is ready to play.'],
        ['server_id' => 3, 'server_map' => 'Buried', 'server_Action' => 'Buried server has just started and is ready to play.'],
        ['server_id' => 4, 'server_map' => 'Origins', 'server_Action' => 'Origins server has just started and is ready to play.'],
        ['server_id' => 5, 'server_map' => 'Depot', 'server_Action' => 'Depot server has just started and is ready to play.']
    ]
];

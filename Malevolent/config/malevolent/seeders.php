<?php

return [
    'user' => [
        ['id' => 1, 'name' => 'Malevolent', 'email' => 'malevolent@malevolent.website', 'password' => 'malevolent123']
    ],

    'server' => [
        ['server_ip' => '31.104.244.36', 'server_port' => '4977']
    ],

    'user-action' => [
        ['user_id' => 1, 'user_name' => 'Malevolent', 'user_action' => 'Malevolent has just started playing on the Town server.'],
        ['user_id' => 1, 'user_name' => 'Malevolent', 'user_action' => 'Malevolent has just started playing on the Nuketown server.'],
        ['user_id' => 1, 'user_name' => 'Malevolent', 'user_action' => 'Malevolent has just started playing on the Buried server.'],
        ['user_id' => 1, 'user_name' => 'Malevolent', 'user_action' => 'Malevolent has just started playing on the Origins server.'],
        ['user_id' => 1, 'user_name' => 'Malevolent', 'user_action' => 'Malevolent has just started playing on the Depot server.']
    ],

    'server-action' => [
        ['server_id' => 1, 'server_map' => 'Town', 'server_Action' => 'Town server has just started and is ready to play.'],
        ['server_id' => 1, 'server_map' => 'Nuketown', 'server_Action' => 'Nuketown server has just started and is ready to play.'],
        ['server_id' => 1, 'server_map' => 'Buried', 'server_Action' => 'Buried server has just started and is ready to play.'],
        ['server_id' => 1, 'server_map' => 'Origins', 'server_Action' => 'Origins server has just started and is ready to play.'],
        ['server_id' => 1, 'server_map' => 'Depot', 'server_Action' => 'Depot server has just started and is ready to play.']
    ]
];

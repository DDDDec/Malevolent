<?php

return [
    'user' => [
        ['id' => 1, 'name' => 'Malevolent', 'email' => 'malevolent@malevolent.website', 'password' => 'malevolent123'],
        ['id' => 2, 'name' => 'Json', 'email' => 'Json@malevolent.website', 'password' => 'malevolent123'],
        ['id' => 3, 'name' => 'Function', 'email' => 'Function@malevolent.website', 'password' => 'malevolent123'],
        ['id' => 4, 'name' => 'Teddy', 'email' => 'Teddy@malevolent.website', 'password' => 'malevolent123'],
        ['id' => 5, 'name' => 'Kirovy', 'email' => 'Kirovy@malevolent.website', 'password' => 'malevolent123'],
        ['id' => 6, 'name' => 'Jane', 'email' => 'Jane@malevolent.website', 'password' => 'malevolent123'],
        ['id' => 7, 'name' => 'React', 'email' => 'React@malevolent.website', 'password' => 'malevolent123'],
        ['id' => 8, 'name' => 'Chris', 'email' => 'Chris@malevolent.website', 'password' => 'malevolent123'],
        ['id' => 9, 'name' => 'Lewis', 'email' => 'Lewis@malevolent.website', 'password' => 'malevolent123'],
        ['id' => 10, 'name' => 'Karl', 'email' => 'Karl@malevolent.website', 'password' => 'malevolent123'],
    ],

    'server' => [
        ['server_ip' => '127.0.0.1', 'server_port' => '4977'],
        ['server_ip' => '127.0.0.1', 'server_port' => '4978'],
        ['server_ip' => '127.0.0.1', 'server_port' => '4979'],
        ['server_ip' => '127.0.0.1', 'server_port' => '4980'],
        ['server_ip' => '127.0.0.1', 'server_port' => '4981'],
        ['server_ip' => '127.0.0.1', 'server_port' => '4982'],
        ['server_ip' => '127.0.0.1', 'server_port' => '4983'],
        ['server_ip' => '127.0.0.1', 'server_port' => '4984'],
        ['server_ip' => '127.0.0.1', 'server_port' => '4985'],
        ['server_ip' => '127.0.0.1', 'server_port' => '4986'],
        ['server_ip' => '127.0.0.1', 'server_port' => '4987'],
        ['server_ip' => '127.0.0.1', 'server_port' => '4988'],
        ['server_ip' => '127.0.0.1', 'server_port' => '4989'],
        ['server_ip' => '127.0.0.1', 'server_port' => '4990'],
        ['server_ip' => '127.0.0.1', 'server_port' => '4991'],
        ['server_ip' => '127.0.0.1', 'server_port' => '4992']
    ],

    'user-action' => [
        ['user_id' => 1, 'user_name' => 'Malevolent', 'user_action' => 'Malevolent has just started playing on the Town server.'],
        ['user_id' => 1, 'user_name' => 'Malevolent', 'user_action' => 'Malevolent has just started playing on the Nuketown server.'],
        ['user_id' => 1, 'user_name' => 'Malevolent', 'user_action' => 'Malevolent has just started playing on the Buried server.'],
        ['user_id' => 1, 'user_name' => 'Malevolent', 'user_action' => 'Malevolent has just started playing on the Origins server.'],
        ['user_id' => 1, 'user_name' => 'Malevolent', 'user_action' => 'Malevolent has just started playing on the Depot server.']
    ],

    'server-action' => [
        ['server_id' => 1, 'server_map' => 'Town', 'server_action' => 'Town server has just started and is ready to play.'],
        ['server_id' => 1, 'server_map' => 'Nuketown', 'server_action' => 'Nuketown server has just started and is ready to play.'],
        ['server_id' => 1, 'server_map' => 'Buried', 'server_action' => 'Buried server has just started and is ready to play.'],
        ['server_id' => 1, 'server_map' => 'Origins', 'server_action' => 'Origins server has just started and is ready to play.'],
        ['server_id' => 1, 'server_map' => 'Depot', 'server_action' => 'Depot server has just started and is ready to play.']
    ],

    'server-leaderboard' => [
        ['server_id' => 1, 'server_map' => 'Town', 'server_round' => 1, 'server_players' => 'Dec', 'server_player_count' => 1, 'server_time' => 1],
        ['server_id' => 2, 'server_map' => 'Nuketown', 'server_round' => 1, 'server_players' => 'Dec', 'server_player_count' => 1, 'server_time' => 1],
        ['server_id' => 3, 'server_map' => 'Buried', 'server_round' => 1, 'server_players' => 'Dec', 'server_player_count' => 1, 'server_time' => 1],
        ['server_id' => 4, 'server_map' => 'Origins', 'server_round' => 1, 'server_players' => 'Dec', 'server_player_count' => 1, 'server_time' => 1],
        ['server_id' => 5, 'server_map' => 'Depot', 'server_round' => 1, 'server_players' => 'Dec', 'server_player_count' => 1, 'server_time' => 1],
        ['server_id' => 6, 'server_map' => 'Farm', 'server_round' => 1, 'server_players' => 'Dec', 'server_player_count' => 1, 'server_time' => 1],
        ['server_id' => 7, 'server_map' => 'Tranzit', 'server_round' => 1, 'server_players' => 'Dec', 'server_player_count' => 1, 'server_time' => 1],
        ['server_id' => 8, 'server_map' => 'Die Rise', 'server_round' => 1, 'server_players' => 'Dec', 'server_player_count' => 1, 'server_time' => 1]
    ],

    'server-vault' => [
        ['server_vault_password' => 1000, 'server_vault_money' => 5000],
        ['server_vault_password' => 2000, 'server_vault_money' => 5000],
        ['server_vault_password' => 3000, 'server_vault_money' => 5000],
        ['server_vault_password' => 4000, 'server_vault_money' => 5000],
        ['server_vault_password' => 5000, 'server_vault_money' => 5000],
    ],

    'server-achievement' => [
        ['server_achievement_title' => 'Kill 1k zombies', 'server_achievement_description' => 'Kill 1k zombies', 'server_achievement_statistic' => 'user_kills', 'server_achievement_statistic_amount' => 1000],
        ['server_achievement_title' => 'Kill 10k zombies', 'server_achievement_description' => 'Kill 10k zombies', 'server_achievement_statistic' => 'user_kills', 'server_achievement_statistic_amount' => 10000],
        ['server_achievement_title' => 'Kill 100k zombies', 'server_achievement_description' => 'Kill 100k zombies', 'server_achievement_statistic' => 'user_kills', 'server_achievement_statistic_amount' => 100000],
        ['server_achievement_title' => 'Kill 500k zombies', 'server_achievement_description' => 'Kill 500k zombies', 'server_achievement_statistic' => 'user_kills', 'server_achievement_statistic_amount' => 500000],
        ['server_achievement_title' => 'Kill 1m zombies', 'server_achievement_description' => 'Kill 1m zombies', 'server_achievement_statistic' => 'user_kills', 'server_achievement_statistic_amount' => 1000000],
    ],

    'server-mission' => [
        ['server_mission_title' => 'Kill 10 zombies', 'server_mission_description' => 'Kill 10 zombies', 'server_mission_statistic' => 'user_kills', 'server_mission_statistic_amount' => 10, 'server_missions_type' => 'daily'],
        ['server_mission_title' => 'Kill 100 zombies', 'server_mission_description' => 'Kill 100 zombies', 'server_mission_statistic' => 'user_kills', 'server_mission_statistic_amount' => 100, 'server_missions_type' => 'weekly'],
        ['server_mission_title' => 'Kill 1k zombies', 'server_mission_description' => 'Kill 1k zombies', 'server_mission_statistic' => 'user_kills', 'server_mission_statistic_amount' => 1000, 'server_missions_type' => 'bi-weekly'],
        ['server_mission_title' => 'Kill 10k zombies', 'server_mission_description' => 'Kill 10k zombies', 'server_mission_statistic' => 'user_kills', 'server_mission_statistic_amount' => 10000, 'server_missions_type' => 'monthly'],
    ],
];

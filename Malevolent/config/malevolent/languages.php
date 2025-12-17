<?php

return [
    'english' => [
        // Level Up Messages
        'CommandLevelUp' => [
            '[^5LevelUp^7] You\'re level ^51,000^7 and cannot level up anymore',
            '[^5LevelUp^7] You\'re level ^565^7, use ^5.prestige^7 to continue progressing',
            '[^5LevelUp^7] You cannot afford to level up to ^5:user_level^7, You need ^5$:user_cost',
            '[^5LevelUp^7] Your level has been raised to ^5:user_level^7 for ^5$:user_cost',
        ],

        // Prestige Messages
        'CommandPrestige' => [
            '[^5Prestige^7] You\'ve reached master prestige and cannot progress any further',
            '[^5Prestige^7] You need to be level ^5:max_level^7 to prestige',
            '[^5Prestige^7] You can\'t afford to prestige to ^5:next_prestige, you need ^5$:prestige_cost',
            '[^5Prestige^7] You\'ve reached prestige ^5:next_prestige',
        ],

        // Deposit Messages
        'CommandDeposit' => [
            '[^5Deposit^7] You\'ve deposited ^5$:deposit_amount^7, your new balance is ^5$:new_balance',
        ],

        // Withdraw Messages
        'CommandWithdraw' => [
            '[^5Withdraw^7] You\'ve withdrawn ^5$:withdraw_amount^7, your new balance is ^5$:new_balance',
        ],

        'CommandFunVault' => [
            '[^5Vault^7] You need to input a password to crack open a vault',
            '[^5Vault^7] You failed to crack open a vault with code ^5:vault_code',
            '[^5Vault^7] You cracked open a vault and stole ^5$:vault_money',
        ],

        // Godmode Messages
        'CommandGodmode' => [
            '[^5Godmode^7] Only staff members can use this command',
            '[^5Godmode^7] You\'ve enabled godmode',
            '[^5Godmode^7] You\'ve disabled godmode',
        ],

        // Godmode Messages
        'EventAutoMessage' => [
            '[^5Malevolent^7] To progress your level use command .levelup',
            '[^5Malevolent^7] To progress your prestige use command .prestige',
        ],
    ],

    'french' => [
        // Level Up Messages
        '[^5Niveau Supérieur^7] Votre niveau est ^51,000^7 et ne peux pas augmenter',
        '[^5Niveau Supérieur^7] Votre niveau est ^565^7, utilisez ^5.prestige^7 pour continuer la progression',
        '[^5Niveau Supérieur^7] Votre niveau est monté à ^5:user_level^7 for ^5$:user_cost',
    ],

    'swedish' => [
        // Level Up Messages
        '[^5Niveau Supérieur^7] Votre niveau est ^51,000^7 et ne peux pas augmenter',
        '[^5Niveau Supérieur^7] Votre niveau est ^565^7, utilisez ^5.prestige^7 pour continuer la progression',
        '[^5Niveau Supérieur^7] Votre niveau est monté à ^5:user_level^7 for ^5$:user_cost',
    ],
];

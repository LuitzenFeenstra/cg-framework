<?php

return [
    'table_name' => 'skills',

    'drop_scheme' => "SET FOREIGN_KEY_CHECKS = 0; DROP TABLE IF EXISTS `skills`; SET FOREIGN_KEY_CHECKS = 1",

    'scheme' => "CREATE TABLE IF NOT EXISTS `skills` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `user_id` int NOT NULL,
        `skill` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
        `created` timestamp NOT NULL,
        `updated` timestamp DEFAULT CURRENT_TIMESTAMP,
        `deleted` timestamp DEFAULT NULL,
        `created_by` int(11) NOT NULL,
        `updated_by` int(11),
        `deleted_by` int(11),
        PRIMARY KEY (`id`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;",

    'relations' => [
        'ALTER TABLE `skills` ADD FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;',
        'ALTER TABLE `skills` ADD FOREIGN KEY (`created_by`) REFERENCES `users`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;',
        'ALTER TABLE `skills` ADD FOREIGN KEY (`updated_by`) REFERENCES `users`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;',
        'ALTER TABLE `skills` ADD FOREIGN KEY (`deleted_by`) REFERENCES `users`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;',
    ],

    'seeder' => [
        'type' => 'array',
        'data' => array(
            [
                'user_id'       => 1,
                'skill'         => 'bullshit skill',
                'created'       => date('Y-m-d H:i:s'),
                'created_by'    => 1,
            ],
            [
                'user_id'       => 1,
                'skill'         => 'bullshit skill2',
                'created'       => date('Y-m-d H:i:s'),
                'created_by'    => 1,
            ],
            [
                'user_id'       => 2,
                'skill'         => 'bullshit skill3',
                'created'       => date('Y-m-d H:i:s'),
                'created_by'    => 2,
            ],
            [
                'user_id'       => 2,
                'skill'         => 'bullshit skill4',
                'created'       => date('Y-m-d H:i:s'),
                'created_by'    => 2,
            ],
            [
                'user_id'       => 3,
                'skill'         => 'bullshit skill5',
                'created'       => date('Y-m-d H:i:s'),
                'created_by'    => 3,
            ],
            [
                'user_id'       => 3,
                'skill'         => 'bullshit skill6',
                'created'       => date('Y-m-d H:i:s'),
                'created_by'    => 3,
            ],
        ),
    ],
];

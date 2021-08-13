<?php

return [
    'table_name' => 'educations',

    'drop_scheme' => "SET FOREIGN_KEY_CHECKS = 0; DROP TABLE IF EXISTS `educations`; SET FOREIGN_KEY_CHECKS = 1",

    'scheme' => "CREATE TABLE IF NOT EXISTS `educations` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `user_id` int NOT NULL,
        `start_year` year NOT NULL,
        `end_year` year NOT NULL,
        `school_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
        `degree` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
        `created` timestamp NOT NULL,
        `updated` timestamp DEFAULT CURRENT_TIMESTAMP,
        `deleted` timestamp DEFAULT NULL,
        `created_by` int(11) NOT NULL,
        `updated_by` int(11),
        `deleted_by` int(11),
        PRIMARY KEY (`id`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;",

    'relations' => [
        'ALTER TABLE `educations` ADD FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;',
        'ALTER TABLE `educations` ADD FOREIGN KEY (`created_by`) REFERENCES `users`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;',
        'ALTER TABLE `educations` ADD FOREIGN KEY (`updated_by`) REFERENCES `users`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;',
        'ALTER TABLE `educations` ADD FOREIGN KEY (`deleted_by`) REFERENCES `users`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;',
    ],

    'seeder' => [
        'type' => 'array',
        'data' => array(
            [
                'user_id'       => 1,
                'start_year'    => 1901,
                'end_year'      => 1990,
                'school_name'   => 'bullshit college1',
                'degree'        => 'bullshit degree1',
                'created'       => date('Y-m-d H:i:s'),
                'created_by'    => 1
            ],
            [
                'user_id'       => 1,
                'start_year'    => 1902,
                'end_year'      => 1991,
                'school_name'   => 'bullshit college2',
                'degree'        => 'bullshit degree2',
                'created'       => date('Y-m-d H:i:s'),
                'created_by'    => 1
            ],
            [
                'user_id'       => 2,
                'start_year'    => 1903,
                'end_year'      => 1992,
                'school_name'   => 'bullshit college3',
                'degree'        => 'bullshit degree3',
                'created'       => date('Y-m-d H:i:s'),
                'created_by'    => 2
            ],
            [
                'user_id'       => 2,
                'start_year'    => 1903,
                'end_year'      => 1992,
                'school_name'   => 'bullshit college4',
                'degree'        => 'bullshit degree4',
                'created'       => date('Y-m-d H:i:s'),
                'created_by'    => 2
            ],
            [
                'user_id'       => 3,
                'start_year'    => 1903,
                'end_year'      => 1992,
                'school_name'   => 'bullshit college5',
                'degree'        => 'bullshit degree5',
                'created'       => date('Y-m-d H:i:s'),
                'created_by'    => 3
            ],
            [
                'user_id'       => 3,
                'start_year'    => 1903,
                'end_year'      => 1992,
                'school_name'   => 'bullshit college6',
                'degree'        => 'bullshit degree6',
                'created'       => date('Y-m-d H:i:s'),
                'created_by'    => 3
            ],
        ),
    ],
];

<?php

return [
    'table_name' => 'jobs',

    'drop_scheme' => "SET FOREIGN_KEY_CHECKS = 0; DROP TABLE IF EXISTS `jobs`; SET FOREIGN_KEY_CHECKS = 1",

    'scheme' => "CREATE TABLE IF NOT EXISTS `jobs` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `user_id` int NOT NULL,
        `start_date` date NOT NULL,
        `end_date` date NOT NULL,
        `job_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
        `comp_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
        `comp_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
        `created` timestamp NOT NULL,
        `updated` timestamp DEFAULT CURRENT_TIMESTAMP,
        `deleted` timestamp DEFAULT NULL,
        `created_by` int(11) NOT NULL,
        `updated_by` int(11),
        `deleted_by` int(11),
        PRIMARY KEY (`id`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;",

    'relations' => [
        'ALTER TABLE `jobs` ADD FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;',
        'ALTER TABLE `jobs` ADD FOREIGN KEY (`created_by`) REFERENCES `users`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;',
        'ALTER TABLE `jobs` ADD FOREIGN KEY (`updated_by`) REFERENCES `users`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;',
        'ALTER TABLE `jobs` ADD FOREIGN KEY (`deleted_by`) REFERENCES `users`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;',
    ],

    'seeder' => [
        'type' => 'array',
        'data' => array(
            [
                'user_id'       => 1,
                'start_date'    => date('1950-03-15'),
                'end_date'      => date('1950-03-16'),
                'job_title'     => 'bullshit job1',
                'comp_name'     => 'bullshit company1',
                'comp_address'  => 'bullshit address1',
                'created'       => date('Y-m-d H:i:s'),
                'created_by'    => 1,
            ],
            [
                'user_id'       => 1,
                'start_date'    => date('1950-03-15'),
                'end_date'      => date('1950-03-16'),
                'job_title'     => 'bullshit job2',
                'comp_name'     => 'bullshit company2',
                'comp_address'  => 'bullshit address2',
                'created'       => date('Y-m-d H:i:s'),
                'created_by'    => 1,
            ],
            [
                'user_id'       => 2,
                'start_date'    => date('1950-03-15'),
                'end_date'      => date('1950-03-16'),
                'job_title'     => 'bullshit job3',
                'comp_name'     => 'bullshit company3',
                'comp_address'  => 'bullshit address3',
                'created'       => date('Y-m-d H:i:s'),
                'created_by'    => 2,
            ],
            [
                'user_id'       => 2,
                'start_date'    => date('1950-03-15'),
                'end_date'      => date('1950-03-16'),
                'job_title'     => 'bullshit job4',
                'comp_name'     => 'bullshit company4',
                'comp_address'  => 'bullshit address4',
                'created'       => date('Y-m-d H:i:s'),
                'created_by'    => 2,
            ],
            [
                'user_id'       => 3,
                'start_date'    => date('1950-03-15'),
                'end_date'      => date('1950-03-16'),
                'job_title'     => 'bullshit job5',
                'comp_name'     => 'bullshit company5',
                'comp_address'  => 'bullshit address5',
                'created'       => date('Y-m-d H:i:s'),
                'created_by'    => 3,
            ],
            [
                'user_id'       => 3,
                'start_date'    => date('1950-03-15'),
                'end_date'      => date('1950-03-16'),
                'job_title'     => 'bullshit job6',
                'comp_name'     => 'bullshit company6',
                'comp_address'  => 'bullshit address6',
                'created'       => date('Y-m-d H:i:s'),
                'created_by'    => 3,
            ],
        ),
    ],
];

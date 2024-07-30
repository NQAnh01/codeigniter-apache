<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'      => 'admin1',
                'email'     => 'admin1@admin.com',
                'password'  => md5('123123'),
                'role'      => 'admin',
                'state'     => 1
            ],
            [
                'name'      => 'user1',
                'email'     => 'user1@example.com',
                'password'  => md5('123456'),
                'role'      => 'content',
                'state'     => 1
            ],
            [
                'name'      => 'user2',
                'email'     => 'user2@example.com',
                'password'  => md5('123321'),
                'role'      => 'editor',
                'state'     => 1
            ]
        ];
        $this->db->table('users')->insertBatch($data);
    }
}

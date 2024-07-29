<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'email'    => 'admin@admin.com',
            'name'     => 'admin',
            'password' => md5('123123'),
            'state'    => 1,
            'role'     => 'admin',
            'created_at' => Time::now(),
            'updated_at' => Time::now(),
        ];

        // Using Query Builder
        $this->db->table('users')->insert($data);
    }
}

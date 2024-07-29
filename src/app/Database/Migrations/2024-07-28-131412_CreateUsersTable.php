<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'user_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'unique' => true,
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'phone' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'null' => true,
            ],
            'state' => [
                'type' => 'TINYINT',
                'constraint' => 1,
                'default' => 0,
                'comment' => '0: not use, 1: active, 2: banned',
            ],
            'role' => [
                'type' => 'ENUM',
                'constraint' => ['admin', 'content', 'editor'],
                'default' => 'editor',
            ],
            'avatar' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            // 'created_at' => [
            //     'type' => 'DATETIME',
            //     'default' => 'CURRENT_TIMESTAMP',
            // ],
            // 'updated_at' => [
            //     'type' => 'DATETIME',
            //     'default' => 'CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
            // ],
            // 'deleted_at' => [
            //     'type' => 'DATETIME',
            //     'null' => true,
            // ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
            'deleted_at DATETIME DEFAULT NULL',
        ]);

        $this->forge->addKey('user_id', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}

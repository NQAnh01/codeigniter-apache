<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
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
            'name'    =>  [
                'type'           => 'VARCHAR',
                'constraint'     => 100
            ],
            'email'    =>  [
                'type'           => 'VARCHAR',
                'constraint'     => 150
            ],
            'phone'    =>  [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
                'null'          => true
            ],
            'password'    =>  [
                'type'           => 'VARCHAR',
                'constraint'     => 100
            ],
            'avatar'    =>  [
                'type'           => 'VARCHAR',
                'constraint'     => 150,
                'null'          => true
            ],
            'state'    =>  [
                'type'           => 'TINYINT',
                'constraint'     => 1,
                'default'        => 0,
                'comment'        => '1: published'
            ],
            'created_by'    =>  [
                'type'           => 'INT',
                'constraint'     => 7
            ],
            'role'    =>  [
                'type'           => 'VARCHAR',
                'constraint'     => 20,
                'default'        => 'content'
            ],
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

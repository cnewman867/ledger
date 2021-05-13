<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
        'id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
        ],
        'firstname' => [
                'type'           => 'VARCHAR',
                'constraint'     => '55',
        ],
        'lastname' => [
                'type'           => 'VARCHAR',
                'constraint'     => '55',
        ],
        'email'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '50',
        ],
        'password' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
        ],
        'user_created_at' => [
                'type'           => 'DATETIME',
        ],
        'user_updated_at' => [
                'type'           => 'DATETIME',
        ],
        'opening_balance' => [
                'type'           => 'FLOAT',
        ],
        'overdraft_limit' => [
                'type'           => 'FLOAT',
        ],
        'balance_alert' => [
                'type'           => 'FLOAT',
        ],

    ]);
    $this->forge->addKey('id', true);
    $this->forge->createTable('users');
    }

    public function down()
    {
        //
    }
}

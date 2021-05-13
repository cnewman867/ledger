<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transactions extends Migration
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

            'user' => [
                    'type'           => 'INT',
                    'constraint'     => 5,
                    'unsigned'       => true,
            ],
            'amount' => [
                    'type'           => 'FLOAT',
            ],
            'description' => [
                    'type'           => 'TEXT',
            ],
            'type' => [
                    'type'           => 'CHAR(2)',
            ],
            'pay' => [
                    'type'           => 'VARCHAR(55)',
            ],
            'created_at' => [
                    'type'           => 'DATETIME',
            ],
            'updated_at' => [
                    'type'           => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('user', 'users', 'id');
        $this->forge->createTable('transactions');
    }

    public function down()
    {
        //
    }
}

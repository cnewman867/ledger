<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Users extends Seeder
{
    public function run()
    {
        $data = [
                 
            'id'                =>'',              
            'firstname'         => 'Rick',
            'lastname'          => 'Deckard',
            'email'             => 'rick.deckard@sf.police',
            'password'          => '$2y$10$E3s6fJvxmys4Gz4nWQKGJuMi7xEi4xsPsnAf5LzCzwIotRCIHtWUm', // saveTheOwls
            'user_created_at'   => '2021-05-10 12:01:43',
            'user_updated_at'   => '2021-05-10 12:01:43',
            'opening_balance'   => '2000.00',
            'overdraft_limit'   => '250.00',
            'balance_alert'     => '4000.00',
        ];

        // Using Query Builder
        $this->db->table('users')->insert($data);
          
    }
}
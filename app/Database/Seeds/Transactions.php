<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Transactions extends Seeder
{
    public function run()
    {
        $data = [
            [
                'user'          => 1,
                'amount'        => '-52.99',
                'description'   => 'More plants',
                'type'          => 'DR',
                'pay'           => 'Sarah Raven',
                'date_created'  => '2021-05-13 09::27:21',
                'date_updated'  => '2021-05-13 09::27:21',
            ],
            [
                'user'          => 1,
                'amount'        => '750',
                'description'   => 'Refund from HMRC',
                'type'          => 'CR',
                'pay'           => 'HMRC',
                'date_created'  => '2021-04-30 01:01:01',
                'date_updated'  => '2021-05-01 12:03:12',
            ],
            [
                'user'          => 1,
                'amount'        => '20.99',
                'description'   => 'Tangerine Dream CD for Chris',
                'type'          => 'DR',
                'pay'           => 'Amazon',
                'date_created'  => '2020-07-01 09:03:00',
                'date_updated'  => '2020-07-01 09:03:00',
            ],
            [
                'user'          => 1,
                'amount'        => '75.68',
                'description'   => 'Plants',
                'type'          => 'DR',
                'pay'           => 'Sarah Raven',
                'date_created'  => '2021-05-03 14:52:47',
                'date_updated'  => '2021-05-03 14:52:47',
            ],
            [
                'user'          => 1,
                'amount'        => '72.99',
                'description'   => 'Dog bed',
                'type'          => 'DR',
                'pay'           => 'Amazon',
                'date_created'  => '2021-04-11 12:00:02',
                'date_updated'  => '2021-04-11 12:00:02',
            ],
        ];
        $this->db->table('transactions')->insertBatch($data);
    }
}

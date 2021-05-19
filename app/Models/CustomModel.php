<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;

class CustomModel{

    protected $db;

    public function __construct(ConnectionInterface &$db) {
        $this->db =& $db;
    }
    // $user = session()->get('id');

    // function all(){
    //     return $this->db->table('transactions')->get()->getResult();

    // }

//get Row iso getResult if it's only going to be 1 result

    // get all transactions for the user
    // function getAllForUser($userid){
    //     return $this->db->table('transactions')
    //     ->where(['user = ', $userid])
   //     ->orderBy('date_created', 'desc')
    //     ->get()
    //     ->getResult();
    // }

//     function getCurrentBalance($userid){
// $builder->select('(SELECT SUM(transactions.amount) FROM transactions WHERE user =' . $userid . ' AS amount', false);
// $query = $builder->get();
//     }



    function where($userid){
        return $this->db->table('transactions')
        ->where(['user ' => $userid])
        ->orderBy('date_created', 'desc')
        ->get()
        ->getResult();

    }

    function getUserDetails($userid){
        return $this->db->table('users')
        ->where(['id ' => $userid])
        ->get()
        ->getRow();
    }

    function getCurrentBalance($userid){
        $query = "select sum(amount) as current from transactions where user = $userid";
        $result = $this->db->query($query)->getResult();
        return $result;

    }
    function getCurrentOverdraft($userid){
        $query = "select orverdraft from transactions where user = $userid";
        $result = $this->db->query($query)->getResult();
        return $result;

    }

    // function join(){
    //     return $this->db->table('transactions')
    //     ->where('post_id >', 1)
    //     ->join('users', 'posts.post_author = users.user_id')
    //     ->get()
    //     ->getResult();

    // }

    // function like(){
    //     return $this->db->table('transactions')
    //     ->like('post_title', 'new', 'both') // 'before' or 'after', default = 'both'
    //     ->join('users', 'posts.post_author = users.user_id')
    //     ->get()
    //     ->getResult();

    // }

    // function grouping(){
    //     return $this->db->table('transactions')
    //     ->groupStart()
    //         ->where(['post_id' => '2', 'post_created_at >' => '2020-01-01 00:00:00'])
    //     ->groupEnd()
    //     ->orWhere('post_author', '1')
    //     ->join('users', 'posts.post_author = users.user_id')
    //     ->get()
    //     ->getResult();

    // }

    // function wherein(){

    //     $emails=['cathy@newmancj.com'];
    //     return $this->db->table('transactions')
    //     ->groupStart()
    //         ->where(['post_id' => '2', 'post_created_at >' => '2020-01-01 00:00:00'])
    //     ->groupEnd()
    //     ->orWhereIn('email', $emails)
    //     ->join('users', 'posts.post_author = users.user_id')
    //     ->limit(2) // can pass 2nd parameter for offset
    //     ->get()
    //     ->getResult();

    // }

    function all(){
        return $this->db->table('transactions')->get()->getResult();
    }


    function getTransactions(){
        $builder = $this->db->table('transactions');
        $builder->join('users', 'transactions.user= users.id');
        $transactions = $builder->get()->getResult();
        return $transactions;
    }
}
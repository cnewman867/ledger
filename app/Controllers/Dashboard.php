<?php

namespace App\Controllers;

use App\Models\LedgerModel;
use \App\Models\CustomModel;

class Dashboard extends BaseController
{
    public function index()
    {
        helper('number');
        $userid = session()->get('id');
        $db = db_connect();
        $model = new CustomModel($db);

        $usertransactions = $model->where($userid);
        $userdetails = $model->getUserDetails($userid);
        $currentbalance = $model->getCurrentBalance($userid);

        // print_r($transactions);
        // exit();

        $data = [
            'title' => 'Ledger',
            'meta_title' => 'Ledger',
        ];

        $data['transactions'] = $usertransactions;
        $data['userdetails'] = $userdetails;
        $data['currentbalance'] = $currentbalance;

        echo view('templates/header', $data);
        echo view('dashboard');
        echo view('templates/footer');

    }

    public function transaction($id){

        $model= new LedgerModel();
        $transaction = $model->find($id);

        if($transaction){
            $data = [
                'title' => $transaction['pay'],
                'meta_title' => 'Ledger',
                'transaction' => $transaction,
            ];

        }else{
            $data = [
                'title' => 'Transaction not found',
                'meta_title' => 'Transaction not found',

            ];            
        }


        // echo view('templates/header', $data);
        return view('transaction', $data);
        // echo view('templates/footer');
    }

    public function newtransaction(){

        helper('form');
        $rules = [
            'pay' => 'required|min_length[3]',
            'amount' => 'required|min_length[1]|numeric',
            'type' => 'required',
            'description' => 'required|min_length[5]',

        ];
        $data = [
            'title' => 'Add new transaction',
            'meta_title' => 'New Transaction',
        ];

        if($this->request->getMethod() =='post'  && $this->validate($rules)) {
            $model = new LedgerModel();

            $newData = $_POST;

            $newData['user'] = $_SESSION['id'];
            if($newData['type'] == 'DR') {
                $newData['amount'] = '-'.$newData['amount'];
            }
            $model->save($newData);
            return redirect()->to('/');
            // print_r($query);
            // exit();
        } else {
            $data['validation'] = $this->validator;
        }
        return view('new_transaction', $data);
    }

    public function delete($id){
        $model= new LedgerModel();
        $transaction = $model->find($id); 
        if($transaction)       {
            $model->delete($id);
            return redirect()->to('/dashboard');
        }
    }

    public function update($id){

        $model= new LedgerModel();
        $transaction = $model->find($id);

        $data = [
            'title' => 'Update transaction',
            'meta_title' => 'Update Transaction',
        ];

        if($this->request->getMethod() =='post'){
            $model = new LedgerModel();
            $_POST['id'] = $id;

            $model->save($_POST);
            $transaction = $model->find($id);
        }
        $data['transaction'] = $transaction;

        return view('update_transaction', $data);
    }




}



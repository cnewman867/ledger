<?php

namespace App\Controllers;

use App\Models\CustomModel;
use App\Models\LedgerModel;

class Transactions extends BaseController
{
    public function index()
    {
        $db = db_connect();
        $model = new CustomModel($db);
        $result = $model->all();
        $user = session()->get('id');

    }

    // public function where()
    // {
    //     $db = db_connect();
    //     $model = new CustomModel($db);
    //     $result = $model->where();

    //     echo'<pre>';
    //     print_r($result);
    //     echo'<pre>';
    // }

    

    // public function join()
    // {
    //     $db = db_connect();
    //     $model = new CustomModel($db);
    //     $result = $model->join();

    //     echo'<pre>';
    //     print_r($result);
    //     echo'<pre>';
    // }

    // public function like()
    // {
    //     $db = db_connect();
    //     $model = new CustomModel($db);
    //     $result = $model->like();

    //     echo'<pre>';
    //     print_r($result);
    //     echo'<pre>';
    // }

    // public function grouping()
    // {
    //     $db = db_connect();
    //     $model = new CustomModel($db);
    //     $result = $model->grouping();

    //     echo'<pre>';
    //     print_r($result);
    //     echo'<pre>';
    // }

    // public function wherein()
    // {
    //     $db = db_connect();
    //     $model = new CustomModel($db);
    //     $result = $model->wherein();

    // }


    


}



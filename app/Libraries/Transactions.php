<?php 
namespace App\Libraries;

class Transactions{

	public function transactionItem($params){
		return view('components/transaction_item', $params);
	}
}
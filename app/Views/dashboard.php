
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Hello, <?= session()->get('firstname') ?></h1>
            <div class="row col-12 col-sm-4 float-right">
                <table class="table table-dark">
                  <tbody>
                    <tr>
                        <td>Account Balance: </td>
                        <td class="text-right"><?= number_to_currency($userdetails->opening_balance + $currentbalance[0]->current, 'GBP', '',2) ?></td>
                    </tr>
                    <tr>
                        <td>Agreed Overdraft:</td>
                        <td class="text-right"> <?= number_to_currency($userdetails->overdraft_limit, 'GBP', '',2)?></td>
                    </tr>
                    <tr>
                        <td>Overdraft Remaining: </td>
                        <td class="text-right"><?= number_to_currency($userdetails->opening_balance + $currentbalance[0]->current + $userdetails->overdraft_limit, 'GBP', '',2)?></td>
                    </tr>
                    <tr>
                        <td>Savings Threshold: </td>
                        <td class="text-right"> <?= number_to_currency($userdetails->balance_alert, 'GBP', '',2)?></td>
                    </tr>
                  </tbody>
                </table>
            </div>
        </div>  
        <a href="/dashboard/newtransaction" class="btn btn-primary btn-lg" role="button" >Add new transaction</a>
        <!-- table goes here     -->
        <div class="container">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Who</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Type</th>
                        <th scope="col">Date</th>
                    </tr>
                </thead>
                <tbody>


                    <?php foreach($transactions as $transaction) : ?>

                        <tr style="transform: rotate(0);">
                            <th scope="row"><a href='dashboard/transaction/<?= $transaction->id?>' class="stretched-link"><?= $transaction->id?></a></th>
                            <td><?= $transaction->pay?></td>
                            <td><?= number_to_currency($transaction->amount, 'GBP', '', 2)?></td>
                            <td><?= $transaction->type ?></td>
                            <td><?= $transaction->date_created?></td>

                        </tr>

                    <?php endforeach;?>

                </tbody>
            </table>
        </div>
    </div>
</div




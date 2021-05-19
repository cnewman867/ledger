
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Hello, <?= session()->get('firstname') ?></h1>
            <div class="row col-12 col-sm-4 float-right">
                <table class="table table-dark table-custom">
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
                        <td>Overdraft Used: </td>
                        <?php if($userdetails->opening_balance + $currentbalance[0]->current < $userdetails->overdraft_limit) : ?>
                            <td class="text-right overdraft-used"><?= number_to_currency($userdetails->opening_balance + $currentbalance[0]->current + $userdetails->overdraft_limit, 'GBP', '',2)?></td>
                        <?php else : ?>
                            <td class="text-right"><?= number_to_currency(0, 'GBP', '',2)?></td>
                        <?php endif; ?>
                    </tr>
                    <?php if (($userdetails->opening_balance + $currentbalance[0]->current + $userdetails->overdraft_limit) < -$userdetails->overdraft_limit) : ?>
                        <tr>
                            <td class="overdraft-used">WARNING! You have exceeded your overdraft limit!</td>
                        </tr>
                    <?php endif; ?>
                    <tr>
                        <td>Savings Threshold: </td>
                        <td class="text-right savings-threshold"> <?= number_to_currency($userdetails->balance_alert, 'GBP', '',2)?></td>
                    </tr>
                    <?php if (($userdetails->opening_balance + $currentbalance[0]->current) > $userdetails->balance_alert) : ?>
                        <tr>
                            <td class="savings-threshold">Congratulations, you have reached your savings threshold</td>
                        </tr>
                    <?php endif; ?>
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
                            <?php if($transaction->amount[0] == '-') {$transaction->amount = substr($transaction->amount, 1);} ?>
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




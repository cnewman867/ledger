<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<h1><?= $title ?></h1>
<div class="row">
    <div class="col-12 col-sm-8 offset-md-2 ">
        <form method="post">
            <div class="form-group">
                <label for="">To or From</label>
                <input id="" class="form-control" type="" name="pay" value="<?= $transaction['pay']?>">
            </div>
            <div class="form-group" >
                <label for="">Amount</label>
                <?php if($transaction['amount'][0] == '-') {$transaction['amount'] = substr($transaction['amount'], 1);} ?>
                <input id="" class="form-control col-12 col-sm-3" type="number" step=0.01 name="amount" value="<?= $transaction['amount']?>">
            </div>
            <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="type" id="inlineRadio1" value="CR" <?php echo ($transaction['type']=='CR')?'checked':'' ?> >
                  <label class="form-check-label" for="inlineRadio1">Deposit</label>
            </div>
            <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="type" id="inlineRadio2" value="DR" <?php echo ($transaction['type']=='DR')?'checked':'' ?> >
                  <label class="form-check-label" for="inlineRadio2">Withdrawal</label>
            </div>
            <hr>
            <div class="form-group">
                <label for="">Description</label>
                <textarea id="" class="form-control" name="description" rows="3"><?= $transaction['description']?></textarea>
            </div>

            <div class="form-group">
                <button class="btn btn-success btn-sm">Save</button>
            </div>
        </form>
    </div>

</div>

<?= $this->endSection() ?>
<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="container">
    <h1><?= $title ?></h1>
    <div class="row">
        <div class="col-12 col-sm-8 offset-md-2 ">
            <form method="post" action="/dashboard/newtransaction">
                <div class="form-group">
                    <label for="">To or From</label>
                    <input id="" class="form-control" type="" name="pay">
                </div>
                <!-- <div class="form-group col-12 col-sm-3" > -->
                <div class="form-group" >
                    <label for="">Amount</label>
                    <input id="" class="form-control col-12 col-sm-3" type="number" step=0.01 name="amount">
                </div>
                <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="type" id="inlineRadio1" value="CR">
                      <label class="form-check-label" for="inlineRadio1">Deposit</label>
                </div>
                <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="type" id="inlineRadio2" value="DR">
                      <label class="form-check-label" for="inlineRadio2">Withdrawal</label>
                </div>
                <hr>
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea id="" class="form-control" name="description" rows="3"></textarea>
                </div>       
                <div class="form-group">
                    <button class="btn btn-success btn-sm">Save</button>
                </div>
            </form>
        </div>

    </div>
</div>

<?= $this->endSection() ?>
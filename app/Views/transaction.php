<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<h1>Transaction <?= $transaction['id']?> - <?= $title ?></h1>

<p><?= $transaction['description']?></p>

<a href="/dashboard/delete/<?= $transaction['id'] ?>" class="btn btn-danger">Delete</a>
<a href="/dashboard/update/<?= $transaction['id'] ?>" class="btn btn-danger">Update</a>


<?= $this->endSection() ?>
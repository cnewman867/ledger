<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="/assets/css/style.css">
        <title><?= (isset($meta_title) ? $meta_title : 'Ledger') ?></title>


    </head>
    <body>
        <?php
        $uri = service('uri');
        ?>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-custom">
            <div class="container">
                <a class="navbar-brand" href="/">Ledger</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php if (session()->get('isLoggedIn')): ?>
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item <?= ($uri->getSegment(1) == 'dashboard' ? 'active' : null) ?>">
                                <a class="nav-link"  href="/dashboard">Dashboard</a>
                            </li>
                            <li class="nav-item <?= ($uri->getSegment(1) == 'profile' ? 'active' : null) ?>">
                                <a class="nav-link" href="/profile">Profile</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav my-2 my-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="/logout">Logout</a>
                            </li>
                        </ul>
                    <?php else: ?>
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item <?= ($uri->getSegment(1) == '' ? 'active' : null) ?>">
                                <a class="nav-link" href="/">Login</a>
                            </li>
                            <li class="nav-item <?= ($uri->getSegment(1) == 'register' ? 'active' : null) ?>">
                                <a class="nav-link" href="/register">Register</a>
                            </li>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </nav>
    <div class="container">
        <?= $this->renderSection('content') ?>
    </div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
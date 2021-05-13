<!doctype html>
<html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

      <title>Form Validation</title>
    </head>
    <body>

        <div class="container">
            <h1>Form Validation</h1>

            <?php if(isset($validation)) : ?>
                <div class="text-danger">
                    <?= $validation->listErrors() ?>
                </div>

            <?php endif; ?>
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input name="email" value="<?= set_value('email') ?>" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1" class="form-label">Category</label>
                    <select name="category" class="form-control">
                        <option vale=""></option>
                        <?php foreach($categories  as $cat) : ?>
                            <option <?= set_select('category', $cat) ?>value="<?= $cat?>"><?= $cat ?></option>
                        <?php endforeach; ?>
                    </select>
                    <!-- <input type="password" class="form-control" id="exampleInputPassword1"> -->
                </div>
<!--                 <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> -->

                <div class="form-group">
                    <label for="date" class="form-label">Date</label>
                    <input name="date" type="date" class="form-control" value="<?= set_value('date') ?>" id="exampleInputPassword1">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlFile1">Upload file</label>
                    <input type="file" name="thefile" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Upload file</label>
                    <input type="file" multiple name="thefiles[]" class="form-control-file" id="exampleFormControlFile1">
                </div>

                <?php 
                    echo'<pre>';
                    print_r($_POST);
                    echo'<pre>';
                ?>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
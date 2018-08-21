<?php
include_once 'vendor/autoload.php';
use App\classes\Login as login;

if (!empty($_POST)){

    $ob=new login();
    $ob->checkLogin($_POST);
    unset($_POST);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>CrescentBD</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin/assets/css/style.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-12 error_massage">
            <p class="text-danger">
                <?php

                if(isset($_GET['massage'])){
                    $massage= $_GET['massage'];
                    echo $massage;
                    unset($massage);
                }
                ?>
            </p>
        </div>
        <div class="col-lg-4 offset-lg-4 login">
          <div class="card">
              <div class="card-header">
                  <h5>Login</h5>
              </div>
              <div class="card-body">
                  <form action="" method="post">
                      <div class="form-group">
                          <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                          <p class="text-danger" id="emailtext"></p>
                      </div>
                      <div class="form-group form-margin">
                          <input type="password" class="form-control" id="pass" placeholder="Enter password" name="pass" required>
                          <p class="text-danger" id="passwordtext"></p>
                      </div>
                      <button type="submit" class="btn btn-success">Submit</button>
                      <a href="../frontend/apply.php" class="btn btn-info" title="Create Account">Registration</a>
                  </form>
              </div>
          </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<script src="admin/assets/js/script.js"></script>
</body>
</html>

<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sign Up</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</head>

<body>

    <div class="container">
        <div class="row">

            <div class="col-sm">

                <h2>Create your account</h2>
                <br>
                <?php echo validation_errors(); ?>
                <?php echo form_open('Admin/adminUser'); ?>
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="First name" name="firstName">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Last name" name="lastName">
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                        <input type="email" class="form-control" placeholder="Enter email" name="email">
                    </div>
                    <div class="col">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                        <input type="password" class="form-control" placeholder="Confirm Password" name="confirm">
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-outline-success">Create</button>
                <?php echo form_close(); ?>
            </div>

        </div>
    </div>






</body>

</html>
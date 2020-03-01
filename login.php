<?php
require_once ('member.php'); // For storing username and password.

session_start();
?>

<!-- HTML code for Bootstrap framework and form design -->

<!DOCTYPE html>
<html>
<head>
    <title>Sign in</title>
</head>
<body>
<div class="container">
    <form action="" method="post" name="Login_Form" class="form-signin">
        <label for="inputUsername" class="sr-only">Username</label>
        <input name="Username" type="username" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input name="Password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <button name="Submit" value="Login" class="btn btn-lg btn-primary btn-block" type="submit">LOG IN</button>

        <?php

        /* Check if login form has been submitted */
        if(isset($_POST['Submit'])){

            // Rudimentary hash check
            $result = $_POST['Password'] ===  $Password;

            /* Check if form's username and password matches */
            if( ($_POST['Username'] == $Username) && ($result === true) ) {

                /* Success: Set session variables and redirect to protected page */
                $_SESSION['Username'] = $Username;

                $_SESSION['Active'] = true;
                header("location:index.php");
                exit;

            } else {
                ?>
                <!-- Show an error alert -->
                &nbsp;
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Warning!</strong> Incorrect information.
                </div>
                <?php
            }
        }
        ?>

    </form>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>

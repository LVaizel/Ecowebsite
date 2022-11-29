<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['password'])) {
        $opassword= stripslashes($_REQUEST['old_password']);
        $opassword= mysqli_real_escape_string($con, $opassword);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $query    = "UPDATE `users` SET password='" . md5($password) . "' WHERE password='" . md5($opassword) . "'";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>Password Changed successfully.</h3><br/>
                  <p class='link'>Click here to <a href='../ecomhome.php'>Go back</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="password" class="login-input" name="old_password" placeholder="Old Password" required />
        <input type="password" class="login-input" name="password" placeholder="Password">
        <input type="submit" name="submit" value="Change" class="login-button">
        <p class="link"><a href="../ecomhome.php">Cancel</a></p>
    </form>
<?php
    }
?>
</body>
</html>

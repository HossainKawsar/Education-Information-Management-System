<?php
session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome!</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
    <img src="img/logo.png" alt="Kichu ekta" style="width:200px ; length:200px">

        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. You have successfully logged in to Education Management System. <br />Now you are ready to teach and check appointments.</h1>
    </div>
    <p>
    <div class="profile">
    <a href="submitcourse.php" class="btn btn-warning">Submit courses</a>
    <a href="checkapt.php" class="btn btn-warning">Check your appointments</a>
    <a href="profilet.php" class="btn btn-warning">Your account</a>
    <a href="editprofilet.php" class="btn btn-warning">Edit profile</a>
    </div>
    </p>
<p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out</a>
    </p>
</body>
</html>
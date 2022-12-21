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
    <title>Edit your profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; margin-left: 600px}
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Edit Profile</h1>
    </div>
    <div class="wrapper">
    <form action="../controller/submitprofiles.php" method="post">
    <div class="form-group">
                <label>Full Name: </label>
                <input type="text" name="fullname" class="form-control">               
</div>
<div class="form-group">
                <label>Semester: </label>
                <input type="text" name="bio" class="form-control">
</div>
    <div class="form-group">
                <label>Your Institution: </label>
                <input type="text" name="institution" class="form-control">
    </div>
    <div class="form-group">
                <label>Your Major: </label>
                <input type="text" name="major" class="form-control">

    </div>
    <div class="form-group">
                <label>Phone (Enter number after +880): </label>
                <input type="text" name="phone" class="form-control">
    </div>
    <div class="form-group">
                <input type="submit" class="btn btn-warning" name="submit">
            </div>
    </form>
    </div>
    <?php require "../controller/config.php"?>
    </body>
    </html>
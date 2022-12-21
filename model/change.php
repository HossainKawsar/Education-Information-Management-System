<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

$username = $_GET["user"];

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Change User status</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="../view/style.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>

<body>
<div class="wrapper">
<form action="../controller/changestatusclick.php?user=<?php echo $username; ?>" method="post">
<div class="form-group">
            <div class="form-group">
                <label for="status">Change user status for: <?php echo $username; ?></label>
                <select type="text" name="status" class="form-control">
                <option value="teacher">Teacher</option>
                <option value="user">Student</option>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="submit">
            </div>

</form>
</div> 
<?php require "../controller/config.php"?>

</body>
</html>
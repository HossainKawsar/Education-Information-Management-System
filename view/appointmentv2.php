    <?php

session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "testsite";

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

$query = "SELECT  uname,fullname FROM info_teacher";

$result = mysqli_query($connect, $query);
//$unique = array_unique($result);

$options = "";

while($row = mysqli_fetch_array($result))
{
    $options = $options."<option>$row[0]";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Make appointment</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; margin-left:600px }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Make an appointment with a teacher</h1>
    </div>
    <div class="wrapper">
    <form action="../controller/submitaptv2.php" method="post">
    <div class="form-group">
                <label for="user">See the teachers' username</label>
                <select type="text" name="yop" class="form-control">    
                <?php echo $options;?>
                </select>
    </div>

    <div class="form-group">
                <label>Enter course: </label>
                <input type="text" name="coursetitle" class="form-control">
    </div>
    <div class="form-group">
                <label>Enter preferred time: </label>
                <input type="text" name="time" class="form-control">
    </div>
    <div class="form-group">
                <label>Enter additional commnet: </label>
                <input type="text" name="comment" class="form-control">
    </div>
    <div class="form-group">
                <input type="submit" class="btn btn-warning" name="submit">
            </div>
    </form>
    </div>
    <?php require "../controller/config.php"?>
    </body>
    </html>
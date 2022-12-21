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
    <title>Welcom!</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
<link rel="shortcut icon" href="/C:\xampp\htdocs\files\Logo.png" type="image/x-png" />
<?php
$conn = mysqli_connect("localhost", "root", "", "testsite");
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT username, userstatus FROM users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = mysqli_fetch_array($result)) {
    if($_SESSION["username"]  === $row["username"]){
        if($row["userstatus"] === "teacher"){
            header("location: welcomet.php");
        }
        elseif($row["userstatus"] === "admin"){
            header("location: adminhome.php");
        }
        else{
        header("location: welcomes.php");
        }
    }
}
}
?>

</body>
</html>
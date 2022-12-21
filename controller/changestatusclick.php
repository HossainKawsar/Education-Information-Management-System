<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
if(isset($_POST["submit"]))
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "testsite";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed! " . $conn->connect_error);
    }

$status = $_POST["status"];
$username = $_GET["user"];

$sql = ("UPDATE users SET userstatus='$status' WHERE username='$username'"); 

if ($conn->query($sql) === TRUE) {
    echo "New course added successfully";
    $conn->close();
    header("location: ../view/changestatus.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>
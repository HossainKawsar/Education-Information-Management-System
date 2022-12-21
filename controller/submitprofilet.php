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
        die("Connection failed: " . $conn->connect_error);
    }
 
$uname = $_SESSION["username"];
$fullname = $_POST["fullname"];
$bio = $_POST["bio"];
$education = $_POST["education"];
$email = $_POST["email"];
$availability = $_POST["availability"];
$uname = $_SESSION["username"];

$sql = ("INSERT INTO info_teacher (uname,fullname,education,email,availability,bio) VALUES ('$uname','$fullname','$education','$email','$availability','$bio') ON DUPLICATE KEY UPDATE fullname=VALUES(fullname),education=VALUES(education), email=VALUES(email), availability=VALUES(availability), bio=VALUES(bio)"); 
if ($conn->query($sql) === TRUE) {
    echo "Profile updated!";
    $conn->close();
    header("location: ../view/profileupdated.php");
} else {
    //$conn->query($sqlupdate);
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>
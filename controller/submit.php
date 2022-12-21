<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== false){
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

    }

$user = $_SESSION["username"];
$name = $_POST["name"];
$description = $_POST["description"];
$longdes = $_POST["longdes"];
$prereq = $_POST["prereq"];
$coursetype = $_POST["coursetype"];
$appointment = $_POST["appointment"];

$sql = "SELECT * FROM info_teacher";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = mysqli_fetch_array($result)) {
        if($_SESSION["username"]  === $row["uname"]){
          $teacher = $row["fullname"];
        }
    }
}


$sql2 = ("INSERT INTO course (name,description,teacher,coursetype,appointment,user,longdes,filelink,prereq) VALUES ('$name','$description','$teacher','$coursetype','$appointment','$user','$longdes','$filelink','$prereq') ON DUPLICATE KEY UPDATE description=VALUES(description), longdes=VALUES(longdes), filelink=VALUES(filelink),appointment=VALUES(appointment)"); 

if ($conn->query($sql2) === TRUE) {
    echo "New course added successfully!";
    $conn->close();
} 
}
?>
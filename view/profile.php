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
    <title>User Profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
        #profile {
  border-collapse: collapse;
  width: 50%;
}

#profile td, #customers th {
  border: 1px solid #ddd;
  padding: 20px;
  
}

#profile tr:nth-child(even){background-color: #f2f2f2;}

#profile tr:hover {background-color: #ddd;}

#profile th {
  padding-top: 22px;
  padding-bottom: 22px;
  padding-left: 30px;
  text-align: left;
  background-color: #000000   ;
  color: white;
}
    </style>

</head>

<body>
<?php
$user = "";
$role = "";
$created = "";
$taught = array();
$conn = mysqli_connect("localhost", "root", "", "testsite");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT username, userstatus, created_at FROM users";
$sql2 = "SELECT name,user FROM course";
$sql3 = "SELECT * from info_student";
$result = $conn->query($sql);
$result2 = $conn->query($sql2);
$result3 = $conn->query($sql3);
if ($result->num_rows > 0) {
while($row = mysqli_fetch_array($result)) {
    if($_SESSION["username"]  === $row["username"]){
      $user = $row["username"];
      $role = $row["userstatus"];
      $created = $row["created_at"];
    }
}
while($row = mysqli_fetch_array($result2)) {
  if($_SESSION["username"]  === $row["user"]){
    $taught[] = $row["name"];
  }
}

while($row = mysqli_fetch_array($result3)) {
  if($_SESSION["username"]  === $row["uname"]){
    $fullname = $row["fullname"];
    $ins = $row["institution"];
    $add = $row["address"];
    $phone = $row["phone"];
    $major = $row["major"];
    $bio = $row["bio"];
  }
}

}
?>
    <div class="page-header">
        <h1><b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>'s Profile</h1>
    </div>
    <div align="center">
    <table id="profile">
    <tr>
    <th> Username</th>
    <th> User role</th>
    <th> Created at</th>
    <th> Courses taught</th>
    </tr>
    <tr>
    <td><?php echo htmlspecialchars($_SESSION["username"]); ?> </td>
    <td><?php echo $role; ?> </td>
    <td><?php echo $created; ?> </td>
    <td><?php foreach($taught as $us){
    echo "$us " ;
} ?> </td>
    </tr>
    </table>
    </div>
    <h1>More Information</h1>
    <h3>Full Name: <?php echo $fullname; ?> </h3>
    <h3>Institution: <?php echo $ins; ?> </h3>
    <h3>Address: <?php echo $add; ?> </h3>
    <h3>Phone: 0<?php echo $phone; ?> </h3>
    <h3>major: <?php echo $major; ?> </h3>
    <h3>Semester: <?php echo $bio; ?> </h3>
    </div>
</body>
</html>
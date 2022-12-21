<!DOCTYPE html>
<html lang="en">
<head>
  <title>Change user status</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<h2>Change status (click on uname to change)</h2>

<div class="bs-docs-example">
    
    <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade in active" id="cse">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Current status</th>
                    </tr>
                </thead>
                <tbody>
                <?php
$conn = mysqli_connect("localhost", "root", "", "testsite");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT username, userstatus FROM users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . '<a href="../model/change.php?user='.$row['username'].'">'.$row['username'].'</a>' . "</td>";
        echo "<td>" . $row['userstatus'] . "</td>"; 
        echo "<tr>";
    }
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
                </tbody>
            </table>
        </div>
        </body>
        </html>
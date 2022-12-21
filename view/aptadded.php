
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Successful!</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Appointment request was successful! Going back home in <span id="countdowntimer">5 </span> seconds...</h1>
        <?php header("Refresh: 5; url=welcomes.php"); ?>

    </div>
    <p>
    <div class="profile">
    <a href="welcomes.php" class="btn btn-primary">Go back home now</a>
    </div>
    </p>
</body>

<script type="text/javascript">
    var timeleft = 5;
    var downloadTimer = setInterval(function(){
    timeleft--;
    document.getElementById("countdowntimer").textContent = timeleft;
    if(timeleft <= 0)
        clearInterval(downloadTimer);
    },1000);
</script>

</html>
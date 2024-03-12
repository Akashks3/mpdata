<?php
//include auth_session.php file on all user panel pages
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="form">
        <p>username :<?php echo $_SESSION['username']; ?></p>
        <p><a href="logout.php">Logout</a></p>
    </div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
</head>
<body>
<?php
function makeconnection() {
    // Replace "your_password_here" with your actual database password
    $password = "your_password_here";
    $cn = mysqli_connect("localhost", "root", $password, "travel");
    if (!$cn) {
        die("Failed to connect to MySQL: " . mysqli_connect_error());
    }
    return $cn;
}

// Attempt to make database connection
$cn = makeconnection();
?>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<body>
<?php
function makeconnection()
{
    $cn = mysqli_connect("localhost", "root", "", "travel");
    if (!$cn) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    return $cn;
}

// Call the function to establish connection
$connection = makeconnection();

// Check if connection is successful
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully";
}

// Close the connection
mysqli_close($connection);
?>
</body>
</html>

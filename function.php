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
    $password = "your_password_here"; // Replace "your_password_here" with your actual database password
    $cn=mysqli_connect("localhost","root",$password,"travel");
    if(mysqli_connect_errno())
    {
        echo "failed to connect to mysqli:".mysqli_connect_error();
    }
    return $cn;
}
$cn = makeconnection();
?>
</body>
</html> 

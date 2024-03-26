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
     
  $cn = mysqli_init();

    mysqli_ssl_set($cn,NULL,NULL, "DigiCertGlobalRootG2.crt.pem", NULL, NULL);

// Establish the connection
    mysqli_real_connect($cn, $host, $username, $password, $db_name, 3306, NULL, MYSQLI_CLIENT_SSL);

//	$cn=mysqli_connect("localhost","root","","travel");

	if(mysqli_connect_errno())
	{
		echo "failed to connect to mysqli:".mysqli_connect_error();
	}
	return $cn;

}
//$cn=mysqli_connect("localhost","root","","travel");

$host = 'travel1.mysql.database.azure.com';
     $username = 'traveladmin@travel1';
     $password = 'server@123';
     $db_name = 'travel';
$cn=mysqli_connect($host, $username, $password, $db_name);
?>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="js/jquery.min.js"></script>
</head>
<body>
<?php
// Include the function file for database connection
include('function.php');

// Error variable to store any potential errors
$error = '';

// Check if the form is submitted
if(isset($_POST["sbmt"])) {
    // Check if form fields are empty
    if(empty($_POST["t1"]) || empty($_POST["t2"]) || empty($_POST["t3"]) || empty($_POST["t4"])) {
        $error = "All fields are required.";
    } else {
        // Form fields are not empty, proceed with saving data
        $name = $_POST["t1"];
        $phone = $_POST["t2"];
        $email = $_POST["t3"];
        $message = $_POST["t4"];

        // Attempt to make database connection
        $cn = makeconnection();

        // Check if connection is successful
        if($cn) {
            // Escape user inputs for security
            $name = mysqli_real_escape_string($cn, $name);
            $phone = mysqli_real_escape_string($cn, $phone);
            $email = mysqli_real_escape_string($cn, $email);
            $message = mysqli_real_escape_string($cn, $message);

            // Attempt to insert data into database
            $query = "INSERT INTO contactus (Name, Phno, Email, Message) VALUES ('$name', '$phone', '$email', '$message')";
            if(mysqli_query($cn, $query)) {
                echo "<script>alert('Record Saved');</script>";
            } else {
                $error = "Error: " . mysqli_error($cn);
            }

            // Close database connection
            mysqli_close($cn);
        } else {
            $error = "Failed to connect to database.";
        }
    }
}
?>
<!-- Your HTML content -->
</body>
</html>

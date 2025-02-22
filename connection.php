<?php
$servername = "localhost"; // Use "127.0.0.1" if "localhost" does not work
$username = "root"; // Change this if you have set a different username
$password = ""; // Keep this empty if there is no password
$database = "project_database"; // Replace with your database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

if($conn){
    echo "Successfully connected";
}
else{
    echo "Not connected";
}

?>

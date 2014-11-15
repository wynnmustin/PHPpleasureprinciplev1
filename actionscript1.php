<?php
require_once('config.php'); 
$servername = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'pleasure_principle1';


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$value1 = $_POST['category'];
$value2 = $_POST['weeklycost'];
$value3 = $_POST['frequency'];
$value4 = $_POST['date'];
$value5 = $_POST['targetdesc'];
$value6 = $_POST['targetamt'];

$sql = "INSERT INTO data1 (category, weeklycost, frequency, date, targetdesc, targetamt)
VALUES ('$value1', '$value2', '$value3', '$value4', '$value5', '$value6')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();
?>
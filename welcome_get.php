<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Retrieve form data
$name = $_POST['name'];
$age = $_POST['age'];
$rollno = $_POST['rollno'];
$classteacher = $_POST['teacher'];

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "myDB";

// Create a new MySQLi connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert data into the database
$sql = "INSERT INTO student_history (name, age, rollno, teacher) VALUES ('$name', '$age','$rollno', '$classteacher')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>

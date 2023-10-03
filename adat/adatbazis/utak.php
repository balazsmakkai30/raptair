<?php
$servername = "localhost";
$username = "root"; // Default username for XAMPP
$password = ""; // Default password for XAMPP is empty
$dbname = "raptairbase"; // Database name

// Function to create a database if it doesn't exist
function createDatabase($conn, $dbname) {
    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
    if ($conn->query($sql) === TRUE) {
        echo "Database created successfully!<br>";
    } else {
        echo "Error creating database: " . $conn->error . "<br>";
    }
}

// Function to check if a record with the same date already exists
function isDateUnique($conn, $checkin) {
    $sql = "SELECT * FROM trips WHERE checkin = '$checkin'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        return false; // Date already exists
    } else {
        return true; // Date is unique
    }
}

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Call the function to create the database
createDatabase($conn, $dbname);

// Reconnect to the newly created database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection to the database
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create the 'trips' table
$sql = "CREATE TABLE IF NOT EXISTS trips (
    id INT AUTO_INCREMENT PRIMARY KEY,
    destination VARCHAR(255) NOT NULL,
    checkin DATE NOT NULL,
    checkout DATE NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table 'trips' created successfully!<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

// Add an index to the 'checkin' column for faster searching
$sql = "ALTER TABLE trips ADD INDEX (checkin)";

if ($conn->query($sql) === TRUE) {
    echo "Index added successfully!<br>";
} else {
    echo "Error adding index: " . $conn->error . "<br>";
}

// Continue with your previous code for handling form submissions

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $destination = $_POST["destination"];
    $checkin = $_POST["checkin"];
    $checkout = $_POST["checkout"];

    // Check if the date is unique
    if (isDateUnique($conn, $checkin)) {
        $sql = "INSERT INTO trips (destination, checkin, checkout) VALUES ('$destination', '$checkin', '$checkout')";

        if ($conn->query($sql) === TRUE) {
            echo "Record added successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Error: Date already exists!";
    }
}

$conn->close();
?>
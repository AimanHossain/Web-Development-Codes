<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eduford";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Prepare and execute the SQL query
    $sql = "UPDATE message SET name=?, email=?, subject=?, message=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $name, $email, $subject, $message);
    $stmt->execute();

    // Check if the update was successful
    if ($stmt->affected_rows > 0) {
        echo "Table updated successfully!";
    } else {
        echo "Error updating table.";
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>

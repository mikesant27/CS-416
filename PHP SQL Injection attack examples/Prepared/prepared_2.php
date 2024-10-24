<?php
// Include the connection file
include 'conn.php';
$dbname = "test_db";
// Select the database
$conn->exec("USE $dbname");

// Check if the form data has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hash the password before inserting (secure password storage)
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    try {
        // Prepare the SQL statement for inserting a new user
        $stmt = $conn->prepare("INSERT INTO users (name, password, email) VALUES (:name, :password, :email)");

        // Bind parameters
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':password', $hashedPassword);
        $stmt->bindParam(':email', $email);

        // Execute the statement
        $stmt->execute();

        // Success message after executing
        echo "New user created successfully!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

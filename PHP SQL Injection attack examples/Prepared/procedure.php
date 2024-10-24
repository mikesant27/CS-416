<?php
// Include the connection file
include 'conn.php';
$dbname = "test_db";

try {
    // Select the database
    $conn->exec("USE $dbname");
} catch (PDOException $e) {
    die("Error selecting database: " . $e->getMessage());
}

// Check if the form data has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Simple data sanitization
    $userName = htmlspecialchars(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
    $password = $_POST['password'];

    if (!$email) {
        die("Invalid email format.");
    }

    // Hash the password before inserting (secure password storage)
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    try {
        // Prepare the SQL call for the stored procedure
        $stmt = $conn->prepare("CALL AddUser(:name, :password, :email)");

        // Execute the statement with user-provided data
        $stmt->execute([
            'name' => $userName,
            'password' => $hashedPassword,  // Store the hashed password
            'email' => $email
        ]);

        echo "New user created successfully!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

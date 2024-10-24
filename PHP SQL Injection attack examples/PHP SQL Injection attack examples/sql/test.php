<?php
// Assuming $pdo is the PDO connection

// Prepare the SQL statement for inserting a new user
$stmt = $pdo->prepare("INSERT INTO users (name, password, email) VALUES (:name, :password, :email)");

// Hash the password before inserting (secure password storage)
$hashedPassword = password_hash($password, PASSWORD_BCRYPT);

// Execute the statement with user-provided data
$stmt->execute([
    'name' => $userName,
    'password' => $hashedPassword,  // Store the hashed password
    'email' => $email
]);
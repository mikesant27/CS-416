<?php
include 'conn.php';

// Check if $conn is defined and available
if (isset($conn)) {
    // Database name
    $dbname = "test_db";

    try {
        // Select the database
        $conn->exec("USE $dbname");

        // Check if the request is GET
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            // Check if the 'user_name' and 'password' parameters are set
            if (isset($_GET['user_name']) && isset($_GET['password'])) {
                if (!empty($_GET['user_name']) && !empty($_GET['password'])) {
                    $userName = $_GET['user_name'];
                    $pw = $_GET['password'];

                    echo "<b>Name Submitted:</b> " . htmlspecialchars($userName) . "<br>";
                    echo "<b>Password Submitted:</b> " . htmlspecialchars($pw) . "<br>";

                    // Use a prepared statement to prevent SQL injection
                    try {
                        $sql = "SELECT * FROM users WHERE name = :userName AND password = :password";
                        $stmt = $conn->prepare($sql);

                        // Bind parameters
                        $stmt->bindParam(':userName', $userName);
                        $stmt->bindParam(':password', $pw);

                        // Execute the prepared statement
                        $stmt->execute();

                        // Check if there are rows returned
                        if ($stmt->rowCount() > 0) {
                            // Output data of each row
                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                echo "<b>Id:</b> " . htmlspecialchars($row["id"]) . " <b>Name:</b> " . htmlspecialchars($row["name"]) . " <b>Email:</b> " . htmlspecialchars($row["email"]) . "<br>";
                            }
                        } else {
                            echo "<p>No results found.</p>";
                        }
                    } catch (PDOException $e) {
                        // Handle SQL errors
                        echo "<p>Error fetching data: " . htmlspecialchars($e->getMessage()) . "</p>";
                    }
                } else {
                    echo "<p>User name or password parameter is set but empty.</p>";
                }
            } else {
                echo "<p>User name or password parameter is missing.</p>";
            }
        } else {
            echo "<p>Invalid request method. Please use GET.</p>";
        }
    } catch (PDOException $e) {
        // Handle database selection errors
        echo "<p>Error selecting database: " . htmlspecialchars($e->getMessage()) . "</p>";
    }
} else {
    echo "<p>Database connection not established.</p>";
}

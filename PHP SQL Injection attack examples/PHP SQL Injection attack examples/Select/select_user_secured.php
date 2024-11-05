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
            // Check if the 'user_name' parameter is set
            if (isset($_GET['user_name'])) {
                if (!empty($_GET['user_name'])) {
                    $userName = $_GET['user_name'];
                    echo "<b>Name Submitted:</b> " . htmlspecialchars($userName) . "<br>";

                    // Use prepared statements to avoid SQL injection
                    try {
                        $sql = "SELECT * FROM users WHERE name = :userName";
                        $stmt = $conn->prepare($sql);
                        $stmt->bindParam(':userName', $userName, PDO::PARAM_STR);





                        $fullQuery = str_replace(':userName', $conn->quote($userName), $stmt->queryString);
                        echo "<b>Full Query:</b> " . $fullQuery . "<br>";


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
                        echo "<p>Error fetching data: " . $e->getMessage() . "</p>";
                    }
                } else {
                    echo "<p>User parameter is set but empty.</p>";
                }
            } else {
                echo "<p>User parameter is missing.</p>";
            }
        } else {
            echo "<p>Invalid request method. Please use GET.</p>";
        }
    } catch (PDOException $e) {
        // Handle database selection errors
        echo "<p>Error selecting database: " . $e->getMessage() . "</p>";
    }
} else {
    echo "<p>Database connection not established.</p>";
}
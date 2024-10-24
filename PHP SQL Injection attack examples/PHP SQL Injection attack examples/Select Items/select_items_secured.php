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
            // Check if the 'itemNumber' parameter is set
            if (isset($_GET['itemNumber'])) {
                if (!empty($_GET['itemNumber'])) {
                    // Cast itemNumber to integer for safety
                    $itemNumber = (int) $_GET['itemNumber'];
                    echo "<b>Name Submitted:</b> " . htmlspecialchars($itemNumber) . "<br>";

                    // Prepare the SQL query to prevent SQL injection
                    $sql = "SELECT itemNumber, ItemName, ItemDescription FROM Items WHERE itemNumber = :itemNumber";

                    try {
                        // Prepare the statement
                        $stmt = $conn->prepare($sql);
                        // Bind the item number to the query
                        $stmt->bindParam(':itemNumber', $itemNumber, PDO::PARAM_INT);
                        // Execute the query
                        $stmt->execute();

                        // Check if results exist
                        if ($stmt->rowCount() > 0) {
                            // Display the results in a table
                            echo "<table border='1'>";
                            echo "<tr><th>Item Number</th><th>Item Name</th><th>Item Description</th></tr>";

                            // Fetch and display each row
                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                echo "<tr>";
                                echo "<td>" . htmlspecialchars($row["itemNumber"]) . "</td>";
                                echo "<td>" . htmlspecialchars($row["ItemName"]) . "</td>";
                                echo "<td>" . htmlspecialchars($row["ItemDescription"]) . "</td>";
                                echo "</tr>";
                            }

                            echo "</table>";
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

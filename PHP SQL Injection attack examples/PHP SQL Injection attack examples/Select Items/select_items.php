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
                    $itemNumber = $_GET['itemNumber'];
                    echo "<b>Item # Submitted:</b> " . htmlspecialchars($itemNumber) . "<br>";

                    // Execute the query and display results
                    try {
                        // Select the database (replace 'your_database_name' with the actual name of your database)
                        $conn->exec("USE test_db");

                        // SQL query to select an item
                        $sql = "SELECT itemNumber, ItemName, ItemDescription FROM Items where itemNumber= $itemNumber";
                        echo $sql;

                        $result  = $conn->query($sql);

                        // Check if results exist
                        if ($result->rowCount() > 0) {
                            // Display the results in a table
                            echo "<table border='1'>";
                            echo "<tr><th>Item Number</th><th>Item Name</th><th>Item Description</th></tr>";

                            // Fetch and display each row
                            while ($row = $result->fetch()) {
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

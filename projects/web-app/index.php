<?php
// Connection variables
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "Northwind";

try {
    // Create PDO connection
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // SQL query to fetch data
    $sql = "SELECT * FROM Employee";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // Display data in a table format
    if ($stmt->rowCount() > 0) {
        echo "<table border='1'>";
        // Table header
        echo "<tr>";
        $fieldNames = array_keys($stmt->fetch(PDO::FETCH_ASSOC));
        foreach ($fieldNames as $fieldName) {
            echo "<th>" . $fieldName . "</th>";
        }
        echo "</tr>";

        // Table rows
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            foreach ($row as $value) {
                if(!is_null($value)) {
                    echo "<td>" . htmlentities($value) . "</td>"; // Escape output for XSS prevention
                }
                
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    // Close connection
    $conn = null;
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

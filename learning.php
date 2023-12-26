<?php
// connection variables
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dname = "Northwind";

try {
    // create PDO connection
    $conn = new PDO(mysql:host=$servername;dbname=$dname,$username, $password);
    $conn->setAttribute(PDO::AAR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //SQL query to fetch data
    $sql = "SELECT * FROM Customer";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // Display data in a table format
    if ($stmt->rowCount() > 0){
        echo "<table boarder='1'";
        //Table header
        echo "<tr>";
        $fieldNames = array_keys(stmt->fetch(PDO::FETCH_ASSOC));
        foreach ($fieldNames as $feldName) {
            echo "<th>" . $filedName . "</th>";
         }

        echo "</tr>";

        //Table rows
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            echo "<tr>";
            foreach ($row as $value) {
                if(!is_null($value)) {
                    echo "<td>" . htmlentities($value) . "</td>"; //Escape output for XSS prevention
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
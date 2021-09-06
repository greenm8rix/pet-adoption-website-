<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nawafnidhi";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, breed, age, gender,childFriendly,about FROM dog LIMIT 22";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>breed</th><th>childFriendly</th><th>age</th><th>about</th></tr>";
    
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["breed"]. "</td><td> " . $row["childFriendly"]. "</td><td> " . $row["age"]. "</td><td> " . $row["about"]. "</td></tr>";
		
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
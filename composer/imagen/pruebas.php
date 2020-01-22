<link rel="stylesheet" href="login.css">

<?php
$servername = "localhost";
$username = "javis";
$password = "Admin123";
$dbname = "asir2_crud";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



?>

</body>
</html>

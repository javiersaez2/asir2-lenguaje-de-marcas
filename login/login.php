<?php
$servername = "192.168.71.10:3306";
$username = "javis";
$password = "Admin123";
$dbname = "asir2_web";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
// formulariotik bidalitako datuak irakurri
// leer desde el formulario
$user =  $_POST['user'];
$password = $_POST['password'];
//
$sql = "SELECT * FROM users WHERE user = '$user';";
//echo $sql . "<br><br>";
//
$result = $conn->query($sql);
/*
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if ($user == $row["user"]){
        if (password_verify($password, $row["pass"])) {
            echo "OK";
        } else{
            echo "KO";
        }
    } else {
        echo "KO";
    }
} else {
    echo "KO";
}
*/
$row = $result->fetch_assoc();
if (($result->num_rows > 0) && ($user == $row["user"]) && (password_verify($password, $row["pass"]))) {

    header("Location: read.php");
} else{
    header ("Location: login.html");
}
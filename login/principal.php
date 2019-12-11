<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "asir2_crud";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//
$sql = "SELECT * FROM blog";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    ?>
 
<link rel="stylesheet" href="read.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- https://fontawesome.com/icons/edit?style=solid !-->
<a href="login.html"><div class="button">LOGIN</div></a>
<?php while($row = $result->fetch_assoc()) { ?>
<div class=color>        
<div class="gallery"><div class=dot><?php echo  $row["info"];?>€</div> <?php echo "<img width='20%' src=img/" . $row["img"].">"  ?>  
</br></br><div class="desc"><?php echo "Producto: " . $row["title"]; ?></div>
</br>
</br>
        </div> 
         </div> 
</div>
            <?php
    }
} else {
    echo "0 results";
}
$conn->close();
?>
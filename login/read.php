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

<?php while($row = $result->fetch_assoc()) { ?>
        
        <div class="gallery"> <div class=dot><?php echo  $row["info"];?></div> <?php echo "<img width='20%' src=img/" . $row["img"].">"  ?>  
        <div class="desc"><?php echo "id: " . $row["id"]. "<br> Producto: " . $row["title"]. "<br> Cuantos:" . $row["info"]; ?></div>


 <div class="desc2">          
<button class="btn"><a href="update.php"><i class="fa fa-edit"></i></button>
</a>
</div>

<div class="desc2">
<form action="delete.php" method="POST">
<button class="btn" value="Delete"> <a href="delete.php"><i class="fa fa-trash"></i></button>
<input type="hidden" name="id" value="<?php echo $row["id"]?>">
</a></form>
</div>

<div class="desc2">
<button class="btn"> <a href="insert.php"><i class="fa fa-plus-square"></i></button>
</button></a>
        </div> 
         </div> 

            <?php
    }
} else {
    echo "0 results";
}
$conn->close();
?>
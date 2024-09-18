<?php
include("connection.php");
$id = $_GET['id']; 
$query = "DELETE FROM form WHERE id = '$id'";
$data = mysqli_query($con,$query); 

if($data)
     {
        ?>

        <meta http-equiv = "refresh" content = "0; url = http://localhost/crud/display.php"/>
            
        <?php
        
     }

?>
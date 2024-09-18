<?php

include("connection.php"); 
$query = "SELECT * FROM form"; 
$data = mysqli_query($con,$query); 
$total = mysqli_num_rows($data); 
; 

if($total!=0)
{

    ?>

        <table border="3px" cellspacing="5" width="100%">
            <tr>
            <th width="5">ID</th>
                <th width="10%">First Name</th>
                <th width="10%">Last Name</th>
                <th width="10%">Password</th>
                <th width="10%">C-password</th>
                <th width="10%">Gender</th>
                <th width="10%">Email</th>
                <th width="10%">Phone</th>
                <th width="15%">Address</th>
                <th width="10%">Oparetions</th>
            </tr> 

   <?php


while($res = mysqli_fetch_assoc($data))
{
   echo "<tr>
                <td>".$res['id']."</td>
                <td>".$res['F_name']."</td>
                <td>".$res['L_Name']."</td>
                <td>".$res['pass']."</td>
                <td>".$res['cpass']."</td>
                <td>".$res['gender']."</td>
                <td>".$res['email']."</td>
                <td>".$res['phone']."</td>
                <td>".$res['adress']."</td>
                <td>
                <a href='update.php?id=$res[id]'>Update</a>
                 <a href='delete.php?id=$res[id]'>Delete</a>
                </td>

                
         </tr> 
         " ;
}

}



 
?>

</table>


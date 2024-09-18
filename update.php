
<?php include("connection.php");
   $id =  $_GET['id']; 
   $query = "SELECT * FROM form where id='$id'"; 
   $data = mysqli_query($con,$query); 
   $total = mysqli_num_rows($data); 
   $res = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php crud oparetion </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

        <div class="container">
     <form action="#" method="POST">
        <div class="title">Update info</div>
         
            <div class="form">

           <div class="input_firld">
            <label for="">First Name</label>
            <input type="text" value=" <?php echo $res['F_name'];  ?> " class="input" name="fname" required>
           </div>

           <div class="input_firld">
            <label for="">Last Name</label>
            <input type="text" value=" <?php echo $res['L_Name'];?> " class="input" name="lname" required>
           </div>

           <div class="input_firld">
            <label for="">Password</label>
            <input type="Password" value=" <?php echo $res['pass'];?> " class="input" name="pass" required>
           </div>

           <div class="input_firld">
            <label for=""> Confirm Password</label>
            <input type="Password" value=" <?php echo $res['cpass'];?> " class="input" name="conpass" required>
           </div>

           <div class="input_firld">
            <label for="">Gender</label>

             <select name="gender"  class="selectbox" required>
                <option value="not selected">Select</option>
                <option value="Male"
                <?php if($res['gender']=='Male')echo 'selected'; ?> >Male</option>
                <option value="Female"
                 <?php if($res['gender']=='Female')echo 'selected'; ?> >Female</option>
                <option value="Others"
                  <?php if($res['gender']=='Others')echo 'selected'; ?> >Others</option>
             </select>

           </div>

           <div class="input_firld">
            <label for=""> Email</label>
            <input type="email" value=" <?php echo $res['email'];?> " class="input" name="email">
           </div>

           <div class="input_firld">
            <label for="">Phone</label>
            <input type="text" value=" <?php echo $res['phone'];  ?> " class="input" name="phone" required>
           </div>

           <div class="input_firld">
            <label for="">Adress</label>
            <textarea name="adress">
           <?php echo $res['adress']; ?> 
        </textarea>
           </div>

           <div class="input_firld terms">
            <lable class="chake">
                <input type="checkbox">
                <span class="chackmark"></span>
            </lable>
            <p>Agree to tearms and condition</p>
           </div>

           <div class="input_firld">

           <input type="submit" value="Update" class="btn" name="upd">

           </div>

        </div>
     </form>
        </div>

</body>
</html>

<?php

   if(isset($_POST['upd'])){

     $fname  =  $_POST['fname']; 
     $lname  =  $_POST['lname']; 
     $pwd    =  $_POST['pass']; 
     $cpwd   =  $_POST['conpass']; 
     $gender =  $_POST['gender']; 
     $email  =  $_POST['email']; 
     $phone  =  $_POST['phone']; 
     $adress =  $_POST['adress']; 

     if($fname!="" && $lname!="" && $pwd!="" && $cpwd!="" && $gender!="" && $email!="" && $phone!="" && $adress!=""){

          $query = "UPDATE form set F_name='$fname', L_Name='$lname',pass='$pwd',cpass='$cpwd',gender='$gender',email='$email',phone='$phone',adress='$adress' Where id='$id'";
          $data = mysqli_query($con,$query); 
     }

     if($data)
     {
        ?>

        <meta http-equiv = "refresh" content = "0; url = http://localhost/crud/display.php"/>
            
        <?php
        
     }

     
  
   
   

 }

?>

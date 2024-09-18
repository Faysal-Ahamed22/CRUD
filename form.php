
<?php include("connection.php");?>

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
        <div class="title">Registration Form</div>
         
            <div class="form">

           <div class="input_firld">
            <label for="">First Name</label>
            <input type="text" class="input" name="fname" required>
           </div>

           <div class="input_firld">
            <label for="">Last Name</label>
            <input type="text" class="input" name="lname" required>
           </div>

           <div class="input_firld">
            <label for="">Password</label>
            <input type="Password" class="input" name="pass" required>
           </div>

           <div class="input_firld">
            <label for=""> Confirm Password</label>
            <input type="Password" class="input" name="conpass" required>
           </div>

           <div class="input_firld">
            <label for="">Gender</label>
             <select name="gender" class="selectbox" required>
                <option value="not selected">Select</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Others">Others</option>
             </select>
           </div>

           <div class="input_firld">
            <label for=""> Email</label>
            <input type="email" class="input" name="email">
           </div>

           <div class="input_firld">
            <label for="">Phone</label>
            <input type="text" class="input" name="phone" required>
           </div>

           <div class="input_firld">
            <label for="">Adress</label>
            <textarea name="adress"> </textarea>
           </div>

           <div class="input_firld terms">
            <lable class="chake">
                <input type="checkbox">
                <span class="chackmark"></span>
            </lable>
            <p>Agree to tearms and condition</p>
           </div>

           <div class="input_firld">

           <input type="submit" value="register" class="btn" name="reg">

           </div>

        </div>
     </form>
        </div>

</body>
</html>

<?php

   if(isset($_POST['reg'])){

     $fname  =  $_POST['fname']; 
     $lname  =  $_POST['lname']; 
     $pwd    =  $_POST['pass']; 
     $cpwd   =  $_POST['conpass']; 
     $gender =  $_POST['gender']; 
     $email  =  $_POST['email']; 
     $phone  =  $_POST['phone']; 
     $adress =  $_POST['adress']; 

     if($fname!="" && $lname!="" && $pwd!="" && $cpwd!="" && $gender!="" && $email!="" && $phone!="" && $adress!=""){

         $query =  "INSERT INTO form (F_name,L_Name,pass,cpass,gender,email,phone,adress) values('$fname','$lname','$pwd','$cpwd','$gender','$email','$phone','$adress')"; 
    $data = mysqli_query($con,$query); 

     }

     else echo "<script>alert('Required Info are not provided');</script>";
  
   
   

 }

?>

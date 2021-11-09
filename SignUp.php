<?php

include ('connection.php');

$regID = $_POST['regID'];
$fName = $_POST['fName'];
$lName = $_POST['lName'];
$password = $_POST['password'];

$query = "insert into admin(regId,fName,lName,Password) VALUES ('$regID','$fName','$lName','$password')";

$send_query= mysqli_query($connection,$query);

if($send_query){
 ?>

    <html>
         <h1 style="text-align: center">Your account has been created </h1>
         <a href="SignUp.html"><input type="button" value="Go Back" class="btn-success" style="color: cornflowerblue"></a>
         <a href="Login.php"><input type="button" value="Click here to login" class="btn-success" style="text-align: center;color: cadetblue"></a>
    </html>
<?php
}else{
    ?>
   <html>
         <h1 style="text-align: center">Your account has not been created </h1><br>
         <a href="SignUp.html"><input type="button" value="Click here to try again" class="btn-success"></a>

   </html>
<?php
}


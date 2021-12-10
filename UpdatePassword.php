<?php

include ("connection.php");

$password=$_POST['password'];
$verify=$_POST['confirmPassword'];

$registration_Number=$_REQUEST['regId'];
$newPassword=$_REQUEST['password'];

if($password==$verify){
    $query="update admin set Password='$newPassword' where regId='$registration_Number'";
    $update=mysqli_query($connection,$query);
    if($update){
        echo "Your password has been changed";
        ?>
    <br>
     <a href="Login.php">Click here to Login</a>
<?php
    }else{
        echo "Failed to update the password";
    }
}else{
    echo "Failed to update your password.";
    ?>
    <br>
    <a href="Login.php">Click here to Try Again.</a>
    <?php

}

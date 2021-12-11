<?php
include ('connection.php');

$id=$_REQUEST['employee_id'];
$designation=$_REQUEST['designation'];
$salary=$_REQUEST['salary'];

$query="update employees set salary='$salary', designation='$designation' where employee_id='$id'";
$update_Employees=mysqli_query($connection,$query);

if($update_Employees){
    echo "Record has been updated";
    ?>
    <br>
  <a href="view-for-Employees.php">Click here to view records.</a>
<?php

}else{
    echo "Failed to update records";
    ?>
    <br>
    <a href="updateEmployees.html">Click here to try again.</a>
    <?php

}
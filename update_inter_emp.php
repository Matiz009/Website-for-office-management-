<?php
include ('connection.php');

$id=$_REQUEST['id'];
$designation=$_REQUEST['designation'];
$status=$_REQUEST['status'];
$salary=$_REQUEST['salary'];
$country=$_REQUEST['country'];
$date=$_REQUEST['date'];
$query="update international_employees set Salary='$salary', designation='$designation',country='$country',date_of_joining='$date',status='$status' where id='$id'";

$update_Employees=mysqli_query($connection,$query);

if($update_Employees){
    echo "Record has been updated";
    ?>
    <br>
    <a href="view_inter_emp.php">Click here to view records.</a>
    <?php

}else{
    echo "Failed to update records";
    ?>
    <br>
    <a href="update_international_employees.html">Click here to try again.</a>
    <?php

}
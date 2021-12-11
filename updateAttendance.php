<?php
include ('connection.php');

$id=$_REQUEST['id'];
$date=$_REQUEST['date'];
$status=$_REQUEST['status'];

$query="update attendance set Date='$date', Status='$status' where ID='$id'";
$update=mysqli_query($connection,$query);

if($update){
    echo "Record has been updated";
    ?>
    <br>
    <a href="viewAttendance.php">Click here to view records.</a>
    <?php

}else{
    echo "Failed to update records";
    ?>
    <br>
    <a href="updateAttendance.html">Click here to try again.</a>
    <?php

}

<?php

include ("connection.php");

$firstname=$_POST['firstName'];
$lastname=$_POST['lastName'];
$id=$_POST['id'];
$date=$_POST['date'];
$status=$_POST['status'];

$query="insert into attendance(First_Name,Last_Name,ID,Date,Status) VALUES ('$firstname','$lastname','$id','$date','$status')";

$send=mysqli_query($connection,$query);

if($send){
    echo "Attendance has been added successfully";
        ?>
<br><a href="admin.html"><h3>Click here to go to Home.</h3></a>
<?php

}else{
    echo "Failed to add your attendance";
    ?>
    <br>
    <a href="AddAttendance.html"><h3>Click here to try again.</h3></a>
    <?php
}
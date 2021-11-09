<?php

include ("connection.php");

 $employee_ID= $_POST['employee-id'];
 $fName=$_POST['fName'];
 $lName=$_POST['lName'];
 $designation=$_POST['designation'];
 $salary=$_POST['salary'];
 $doj=$_POST['date-of-join'];

 $query="insert into employees(employee_id,fName,lName,designation,salary,doj) values ('$employee_ID','$fName','$lName','$designation','$salary','$doj')";


$send_query= mysqli_query($connection,$query);

if($send_query){
    ?>

    <html>
    <h1 style="text-align: center">Your record has been inserted</h1>
    <a href="admin.html"><input type="button" value="Go Back"  style="color: cornflowerblue"></a>
    </html>
    <?php
}else{
    ?>
    <html>
    <h1 style="text-align: center">Your record has not been inserted </h1><br>

    </html>
    <?php
}

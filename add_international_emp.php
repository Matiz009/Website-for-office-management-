<?php

include ("connection.php");

$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$id=$_POST['id'];
$date=$_POST['date'];
$email=$_POST['email'];
$salary=$_POST['salary'];
$designation=$_POST['designation'];
$status=$_POST['status'];
$country=$_POST['country'];


$query="insert into international_employees(First_Name,Last_Name,id,email,designation,country,status,Salary,date_of_joining) VALUES ('$firstName','$lastName','$id','$email','$designation','$country','$status','$salary','$date')";

$send_query= mysqli_query($connection,$query);

if($send_query){
    ?>

    <html>
    <h1 style="text-align: center">Your record has been inserted</h1>
    <a href="international_employee.html">Go Back</a>
    </html>
    <?php
}else{
    ?>
    <html>
    <h1 style="text-align: center">Your record has not been inserted </h1><br>
    <a href="international_employee.html">Try Again</a>

    </html>
    <?php
}

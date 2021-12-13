<!Doctype Html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Records</title>

</head>

<body>
<h1 style="color: firebrick">International Employees Records</h1>
<table border="5px" cellpadding="2px" cellspacing="20px" style="border-collapse: collapse">
    <tr>

        <th>First Name</th>
        <th>Last Name</th>
        <th>Id</th>
        <th>Email</th>
        <th>Designation</th>
        <th>Country</th>
        <th>Status</th>
        <th>Salary</th>
        <th>Date of Joining</th>

    </tr>
    <?php

    include "connection.php";
    $query= "Select * from international_employees";
    $result= mysqli_query($connection,$query);

    while ($record=mysqli_fetch_assoc($result)){?>

        <tr style="text-align: center">
            <td><?php  echo $record['First_Name']; ?></td>
            <td><?php  echo $record['Last_Name']; ?></td>
            <td><?php  echo $record['id']; ?></td>
            <td><?php  echo $record['email']; ?></td>
            <td><?php  echo $record['designation']; ?></td>
            <td><?php  echo $record['country']; ?></td>
            <td><?php  echo $record['status']; ?></td>
            <td><?php  echo $record['Salary']; ?></td>
            <td><?php  echo $record['date_of_joining']; ?></td>
        </tr>
        <?php

    }
    ?>
</table><br><br>
<a href="international_employee.html">Back</a>
</body>
</html>

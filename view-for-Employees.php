<!Doctype Html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Records</title>

</head>

<body>
<h1 style="color: gray">Employee Records</h1>
<table border="1px" cellpadding="2px" cellspacing="10px" style="border-collapse: collapse">
    <tr style="text-align: center">
        <th>Employee ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Designation</th>
        <th>Salary</th>
        <th>Date of Joining</th>
    </tr>
    <?php

    include "connection.php";
    $query= "Select employee_id,fName,lName,designation,salary,doj From employees";
    $result= mysqli_query($connection,$query);

    while ($record=mysqli_fetch_assoc($result)){?>

        <tr style="text-align: center">
            <td><?php  echo $record['employee_id']; ?></td>
            <td><?php  echo $record['fName']; ?></td>
            <td><?php  echo $record['lName']; ?></td>
            <td><?php  echo $record['designation']; ?></td>
            <td><?php  echo $record['salary']; ?></td>
            <td><?php  echo $record['doj']; ?></td>
        </tr>
        <?php

    }
    ?>
</table><br><br>
<a href="admin.html"><input type="button" value="Go Back"style="color: cornflowerblue"></a>
</body>
</html>
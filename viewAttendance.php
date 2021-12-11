<!Doctype Html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Records</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>
<h1 style="color: firebrick;text-align: center;font-family: 'Britannic Bold'">Attendance Report</h1>
<a href="admin.html" ><h6 style="float: left;margin-top: -3%;color: firebrick">Home</h6></a>
<table border="2px" cellpadding="5px" cellspacing="5px" class="table table-dark">
    <tr style="text-align: center">
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
         <th scope="col">ID</th>
        <th scope="col">Date</th>
        <th scope="col">Status</th>
    </tr>
    <?php

    include "connection.php";
    $query= "Select * From attendance";
    $result= mysqli_query($connection,$query);

    while ($record=mysqli_fetch_assoc($result)){?>

        <tr>
            <td><?php  echo $record['First_Name']; ?></td>
            <td><?php  echo $record['Last_Name']; ?></td>
            <td><?php  echo $record['ID']; ?></td>
            <td><?php  echo $record['Date']; ?></td>
            <td><?php  echo $record['Status']; ?></td>
        </tr>

        <?php

    }
    ?>
</table><br>

</body>
</html>
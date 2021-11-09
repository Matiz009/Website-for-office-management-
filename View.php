<!Doctype Html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Records</title>

</head>

<body>
      <h1 style="color: firebrick">Admin Records</h1>
      <table border="5px" cellpadding="2px" cellspacing="20px" style="border-collapse: collapse">
           <tr style="text-align: center">
               <th>Registration ID</th>
               <th>First Name</th>
               <th>Last Name</th>
               <th>Password</th>
           </tr>
          <?php

          include "connection.php";
          $query= "Select regID,fName,lName,Password from admin";
          $result= mysqli_query($connection,$query);

          while ($record=mysqli_fetch_assoc($result)){?>

              <tr style="text-align: center">
                  <td><?php  echo $record['regID']; ?></td>
                  <td><?php  echo $record['fName']; ?></td>
                  <td><?php  echo $record['lName']; ?></td>
                  <td><?php  echo $record['Password']; ?></td>
              </tr>
          <?php

          }
          ?>
      </table><br><br>
      <a href="SignUp.html"><input type="button" value="Go Back"style="color: cornflowerblue"></a>
</body>
</html>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="styling.css">


</head>

<body>
<div id="login">
    <h3 class="text-center text-white pt-5">Login form</h3>
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">
                    <form id="login-form" class="form" action="" method="post">
                        <h3 class="text-center text-info">Login</h3>
                        <div class="form-group">
                            <label for="username" class="text-info">Registration No:</label><br>
                            <input type="text" name="regID" id="username" class="form-control" placeholder="f23-44">
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-info">Password:</label><br>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <a href="forgotPassword.html"><label for="remember-me" class="text-info"><span>Forgot Password</span> </label></a><br>
                            <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            <a href="SignUp.html" style="text-decoration: none;"><input class="btn btn-info btn-md" value="Main Page" style="float: right;width: 100px;"></a>
                        </div>
                        <div id="register-link" class="text-right">
                            <a href="signup.html" class="text-info">Register here</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>
<?php

$host = "localhost";
$username = "root";
$password = "";
$db_name = "office";

$connection=mysqli_connect($host,$username,$password,$db_name);



if(isset($_POST['regID'])){

    $reg = $_POST['regID'];

    $pass = $_POST['password'];

    $query = "SELECT * from admin WHERE regID='".$reg."' AND Password='".$pass."' ";


    $result= mysqli_query($connection,$query);

    if(mysqli_num_rows($result)==1){


        header("Location: admin.html");
        exit();
    }
    else {
        echo "<br>";
        die("Query Failed: Wrong Username or Password". mysqli_error($conn));
    }
}
?>



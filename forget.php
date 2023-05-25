<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forget password</title>
    <link rel="stylesheet" href="page.css">
</head>
<body>
    <div class="container">
        <div><h1>forget password</h1></div>
        <form method="POST">
            <div class="field">
                <label>username :</label>
                <input type="text" name="username">
            </div><div class="field">
                <label>new password :</label>
                <input type="text" name="password">
            </div>
            <div class="field">
                <label>confirm password :</label>
                <input type="text" name="cpassword">
            </div>
            <div class="submit">
                <input type="submit" name="submit" value="submit">
            </div>
        </form>
    </div>
</body>
</html>

<?php
   if($_SERVER["REQUEST_METHOD"]=='POST'){
    include 'conn.php';
    $username=$_POST['username'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];

    $sql="SELECT * FROM student WHERE username='$username'";
    $ex=$con->query($sql);
    if($ex->num_rows>0){
        if($password==$cpassword){
            $up="UPDATE student SET password='$password' WHERE username='$username'";
            $e=$con->query($up);
            if($e){
                header('location:index.php');
            }
        }
        else{
            echo "password is doesn't match";
        }
    }
    else{
        echo "username not found";
    }
   } 

?>
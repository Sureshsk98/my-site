<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="page.css">
</head>
<body>
    <div class="container">
        <div><h1>signup form</h1></div>
        <form  method="POST">
            <div class="field">
                <label >your first name:</label>
                <input type="text" name="fname">
            </div>
            <div class="field">
                <label >your last name:</label>
                <input type="text" name="lname">
            </div>
            <div class="field">
                <label >your mail:</label>
                <input type="gmail" name="gmail">
            </div>
            <div class="field">
                <label >your Phone No.:</label>
                <input type="text" name="phone">
            </div>
            <div class="field">
                <label >your username:</label>
                <input type="text" name="username">
            </div>
            <div class="field">
                <label >your password:</label>
                <input type="text" name="password">
            </div>
            <div class="submit">
                <input type="submit" value="submit" name="submit">
            </div>
        </form>
    </div>    
</body>
</html>
<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        include "conn.php";
        $username=$_POST['username'];
        $password=$_POST['password'];
        $phone=$_POST['phone'];
        $gmail=$_POST['gmail'];
        $firstname=$_POST['fname'];
        $lastname=$_POST['lname'];

        $sql="SELECT * FROM student WHERE username='$username'";
        $s=$con->query($sql); 
        if($s){
            if($s->num_rows>0){
                     echo "already exist";
             }
        else{

                $ins="INSERT INTO student(username,password,phone,gmail,firstname,lastname)
                         VALUES('$username','$password','$phone','$gmail','$firstname','$lastname')";
                $ex=$con->query($ins);
                     if($ex){
                        //    echo "success";
                        header('location:index.php');
                     }
                     else{
                         echo "failed";
                     }
    }}
}
?>
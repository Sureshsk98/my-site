<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEC - login page</title>
    <link rel="stylesheet" href="page.css">
</head>
<body>
    <div class="container">
        <div><h1>Login Form</h1></div>
        <form method="POST">
            <div class="field">
                <label >username :</label>
                <input type="text" name="username">
            </div>
            <div class="field">
                <label >password :</label>
                <input type="text" name="password">
            </div>
            <div class="forget">
                <a href="forget.php">forgot password</a>
            </div>
            <div class="submit">
                <input type="submit" name="submit" value="submit">
            </div>
            <div class="signup">Not a Member! <a href="signup.php">Sign Up</a>
            </div>
        </form>
    </div>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include 'conn.php';
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="SELECT * FROM student WHERE username='$username' AND password='$password'";
    $ex=$con->query($sql);
     
    if($ex){
        if($ex->num_rows>0){
            $_SESSION['username']=$username;
            header('location:college.php');
        }
        else{
            echo "invalid username and password";
        }
    }
    // else{
    //     echo "not found";
    // }

}
?>

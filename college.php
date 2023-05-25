<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEC college</title>
    <link rel="stylesheet" href="college.css">
</head>
<body>
    <header>
        <div class="container">
          <a href="tec.com"><img src="" alt="college"></a>
            <button class="bar" onclick="on()">
                <span></span>
                <span></span>
                <span></span>
            </button>
          <div class="head hide">
            <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contacts</a></li>
            <li><a href="#">Help</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
        </div>
        </div>
    </header>
    <div class="mar">
    <marquee behavior="alternate" direction="right">TRICHY ENGINEERING COLLEGE</marquee>
    </div>
    <div><h1>welcome  <?php echo $_SESSION['username']; ?></h1></div>
    
    <script>
    function on(){
        document.querySelector(".head").classList.toggle("hide");
    }
</script>
</body>
</html>

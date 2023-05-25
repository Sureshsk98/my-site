<?php

$con=new mysqli("localhost","suresh","Sksuresh25","tec");

if($con->connect_error){
    die( "connection failed".$con->connect_error);
}
// $sql="create DATABASE tec";
// if($con->query($sql)){
//     echo "create success";
// }
// else{
//     echo "failed";
// }
?>
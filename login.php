<?php
include "connection.php";

$email =  $_POST['email'];
$pass = md5($_POST['pass']);
$sql="SELECT email,pass FROM login";
 if($sql)
 {

 }
$conn->close();

?>


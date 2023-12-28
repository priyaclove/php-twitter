<?php
$servername="localhost";
$usernam="root";
$password="root";
$db="tvitter";
$conn= new mysqli($severname,$username,$password,$db);
if($conn->$connect_error){
    die("connection failed".$connect_error);
}


function pr( $data){
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}



?>
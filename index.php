<?php
include "connection.php";
?>
<!DOCTYPE HTML>
<html>
    <head><h1>TVITTER</h1>
 <h3>
   <input type ="submit" name="register" value="register"></h3>
</head>
    <titlt></title>
    <style>
        h3{text-align : right;}
        div.inset { border-style: inset; }
        p{ text-align : center ; }
        h1{ text-align : center ; }
    body { background-color : lightblue ; } 
    </style>
    <form action="login.php" method="post">
    <div class="inset">
   <p> <lable for ="email" >EMAIL :</lable> 
     <input type="email" name="email" >
    <br><br>
  <p>  <lable for ="email" >PASSWORD :</lable> 
    <input type="password" name="pass" >
    <br><br>
   <p> <input type="submit" name="login" value="   login   ">
</div>
    </body>
    </html>
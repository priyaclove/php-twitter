  <?php
  include"connection.php";

  $uname=$_POST['uname'];
 // echo $uname;
  $email=$_POST['email'];
 // echo $email;
  $pass=md5($_POST['password']);
   //echo $pass;
  $country=$_POST['country'];
 // echo $country;
  $gender=$_POST['gender'];
 // echo $gender;
  $sql="INSERT INTO register(uname,email,pass,country,gender) VALUES ($uname,$email,$pass,$country,$gender)";
  echo($sql);
  die(lllllllll);
  /*
  if(conn->query($sql) === TRUE){
    echo "insert";
  }
  else
  {
    echo "not insert";
  }
  $conn->close();  */
 ?>

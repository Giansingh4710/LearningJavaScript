<?php

  $servername = "sql1.njit.edu";
  $username = "zma4";
  $password = "Z_viper908";
  $dbname = "zma4";
  $con = mysqli_connect($servername, $username, $password, $dbname);

  if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

  $fName = $_POST["firstName"];
  echo $fName;
  $lName = $_POST['lastName'];
  $pass = $_POST['password'];
  $id = $_POST['idNum'];

  $sql = "SELECT * FROM `it3` WHERE `Stylist First Name`='$fName' and `Stylist Last Name`='$lName' and `Stylist Password`='$pass' and `Stylist ID Number`='$id'";
  $result = $con->query($sql);

  $verified = false;

  if (mysqli_num_rows($result) > 0) {

    $verified = false;

  }

?>
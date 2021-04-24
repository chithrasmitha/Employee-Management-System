<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="registration";

$con = mysqli_Connect($dbhost,$dbuser,$dbpass,$dbname);

if(mysqli_Connect_errno())
{
  echo "Failed to connect";

}
?>



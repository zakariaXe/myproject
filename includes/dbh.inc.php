<?php
$serverName="localhost";
$dbusername="root";
$dbpassword="";
$dbName="ENSAT";

$conn=mysqli_connect($serverName,$dbusername,$dbpassword,$dbName);

if(!$conn) {
  die("connection failed:" .mysqli_connect_error());
}

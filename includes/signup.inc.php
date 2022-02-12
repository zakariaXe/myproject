<?php
if (isset($_POST["submit"])){
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$pwd=$_POST["pwd"];

$email=$_POST["email"];
$rpwd=$_POST["rewrite"];
require_once 'dbh.inc.php';
include 'functions.php';

if (emptyInputSignup($nom,$prenom,$pwd,$email) !== false){
  header("location: ../signup.php?error=emptyinput");
  exit();
}
if (invalidname($prenom) !== false){
  header("location: ../signup.php?error=InvalidFirstname");
  exit();
}
if (invalidname($nom) !== false){
  header("location: ../signup.php?error=InvalidName");
  exit();
}
if (invalidemail($email) !== false){
  header("location: ../signup.php?error=InvalidEmail");
  exit();
}
if ($pwd !== $rpwd){
  header("location: ../signup.php?error=passwordsdontmatch");
  exit();
}
if (Emailexists($conn,$email) !== false){
    header("location: ../signup.php?error=accountalreadycreatedwiththisEmail");
    exit();
}
$hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);

  $sql="INSERT INTO compte (Nom,Prenom,Email,PwdUSer) VALUES('$nom','$prenom','$email','$hashedpwd')";
  mysqli_query($conn,$sql);
  echo "You are Signed Up";
  header("location: ../login.php");


}
else {header("location: ../signup.php");
exit(); }

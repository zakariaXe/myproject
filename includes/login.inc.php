<?php
session_start();
if (isset($_POST["connect"])){

 $user=$_POST["email"];
 $pass=$_POST["pwd"];
 require_once 'dbh.inc.php';
 include 'functions.php';
 if (emptyInputlogin($pass,$user) !== false){
   header("location: ../login.php?error=emptyinput");
   exit();}
   if (Emailexists($conn,$user) == false){
       header("location: ../login.php?error=Noaccountwiththisemailfound");
       exit();
   }
 $sql="SELECT Prenom, Email, PwdUSer  FROM compte WHERE Email='".$user."'  AND PwdUSer='".$pass."'";
 $query=mysqli_query($conn,$sql);
 $num= mysqli_num_rows($query);
 if($num>0){
 $row=mysqli_fetch_assoc($query);
 $_SESSION["name"]=$row['Prenom'];;
 header("location:welcome.php");
   }
else {
  header("location: ../login.php?error=Nomatchingaccountfound");}
 }

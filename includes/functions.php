<?php
require_once 'dbh.inc.php';
function emptyInputSignup($n,$p,$pd,$em){
  $result;
  if(empty($n) || empty($p) || empty($pd) || empty($em) ){
    $result=true;
  }
  else {
    $result=false;
  }
  return $result;
}
function emptyInputlogin($n,$p){
  $result;
  if(empty($n) || empty($p) ){
    $result=true;
  }
  else {
    $result=false;
  }
  return $result;
}
function invalidname($name){
  $result;
  if (!preg_match("/^[a-zA-Z]*$/",$name)) {
    $result = true;
  }
  else{
    $result = false;
  }
  return $result;
}
function invalidemail($Email){
  $result;

  if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
    $result = true;
  }
  else{
    $result = false;
  }
  return $result;
}
function Emailexists($conn,$Email){
  $result;
  $sql="SELECT * FROM compte WHERE Email = ?;";
  $stmt= mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt,$sql)){
    header("location: ../signup.php?error=stmtfailed");
    exit();
  }
  mysqli_stmt_bind_param($stmt,"s", $Email);
  mysqli_stmt_execute($stmt);

  $resultData= mysqli_stmt_get_result($stmt);
  if($row = mysqli_fetch_assoc($resultData)){
    return $row;
  }
  else {
    $result=false;
    return $result;
  }

}

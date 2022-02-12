<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
<link rel="stylesheet" href="includes/style/style-signup.css">
  </head>
  <body>
    <ul>
    <li>  <a href="signup.php">SIGN UP</a></li>
    <li>  <a href="login.php">LOGIN</a></li>
    </ul>
    <div class="background">
       <div class="shape"></div>
       <div class="shape"></div>
   </div>
    <form  action="includes/signup.inc.php" method="POST">
      <h3>Signup Here</h3>
      <label for="nom">Name:</label>
      <input type="text" name="nom" placeholder="nom">
      <label for="prenom">Firstname:</label>
      <input  type="text" name="prenom" placeholder="prenom">
      <label for="email">Email:</label>
      <input  type="text" name="email" value="email@gmail.com">
      <label for="pwd">PASSWORD:</label>
      <input  type="password" name="pwd" placeholder="Mot de passe">
      <label for="rewrite">CONFIRM PASSWORD:</label>
      <input type="password" name="rewrite" placeholder="Confirmer Mot de passe">
      <button type="submit" name="submit">Sign up</button>
    </form>
    <div id="footer">
    <?php
    if(isset($_GET["error"])){
      if($_GET["error"] == "emptyinput"){
        echo "<p>Fill in all fields!</p>";
      }
      else if ($_GET["error"] == "InvalidFirstName" || $_GET["error"] == "InvalidName") {
        echo "<p>Choose a proper name and firstname!</p>";
      }
      else if ($_GET["error"] == "InvalidEmail") {
        echo "<p>Choose a proper email!</p>";
      }
      else if ($_GET["error"] == "passwordsdontmatch") {
        echo "<p>Passwords doesn't match!</p>";
      }
      else if ($_GET["error"] == "accountalreadycreatedwiththisEmail") {
        echo "<p> Email Taken</p>";
      }
      else if ($_GET["error"] == "stmtfailed") {
        echo "<p> something went wrong try agin!</p>";
      }
    }
     ?>
   </div>
  </body>
</html>

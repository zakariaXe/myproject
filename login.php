<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="includes/style/style-login.css">
  </head>
  <body>
    <ul>
    <li>  <a href="login.php">LOGIN</a></li>
    <li>  <a href="signup.php">SIGN UP</a></li>
    </ul>
    <div class="background">
       <div class="shape"></div>
       <div class="shape"></div>
   </div>

    <form  action="includes/login.inc.php" method="POST">
      <h3>Login Here</h3>
      <label for="email">Email</label>
      <input type="text" name="email" placeholder="email@gmail.com" id="username">
       <label for="password">Password</label>
      <input type="password" name="pwd" placeholder="Password" id="password">
      <button type="submit" name="connect">LOGIN</button>
    </form>
    <div id="footer">
      <?php   if(isset($_GET["error"])){
            if($_GET["error"] == "emptyinput"){
              echo "<p>Fill in all fields!</p>";}
              if($_GET["error"] == "Noaccountwiththisemailfound"){
                echo "<p>You don't have an account with this email</p>";}
              else if($_GET["error"] == "Nomatchingaccountfound"){
                echo "<p> wrong password  !</p>";}  }
            ?>
    </div>
  </body>
</html>

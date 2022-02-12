
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet"  href="style/style-welcome.css">
  </head>
  <body>
<ul>
<li>  <a href="listdisplay.php">Liste des etudiants</a></li>

<li>  <a href="../login.php">Deconnexion</a></li>
</ul>

<?php
session_start();
$N=$_SESSION['name'];
echo "<h1>Bienvenu  $N<h1>";?>

  </body>
</html>

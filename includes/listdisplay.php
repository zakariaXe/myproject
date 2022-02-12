<?php
session_start();
require_once 'dbh.inc.php';
$sql="SELECT *  FROM compte ";
$query=mysqli_query($conn,$sql);
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <link rel="stylesheet" href="style/style-listdisplay.css">
   </head>
   <body>
     <section>
       <ul>
       <li>  <a href="../login.php">Deconnexion</a></li>
       </ul>
     <h1>Liste des ETUDIANTS 2021-2022</h1>
     <table id="students">
     <tr>
     <th>Nom</th>
     <th>Prenom</th>
     <th>Email</th>
    </tr>
    <?php
    while($row=mysqli_fetch_assoc($query)){

      echo "<tr>";
      echo "<td>";
      echo $row['Nom'];
      echo "</td>";
      echo "<td>";
      echo $row['Prenom'];
      echo "</td>";
      echo "<td>";
      echo $row['Email'];
      echo "</td>";
      echo "</tr>";}
      ?>
    </table>
    </section>
   </body>
 </html>

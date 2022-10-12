<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./styles/style.css">
    <title></title>
  </head>
  <body>
    <h3>Użytkownicy z tabeli users</h3>
    <table>
      <tr>
        <th>Imię i nazwisko</th>
        <th>Miasto</th>
        <th>Data utworzenia</th>
      </tr>
    <?php
     require_once('./scripts/1_connect.php');
     $sql = "SELECT * FROM `users` INNER JOIN `cities` ON `users`.`city_id`=`cities`.`id`;";
     $result = $conn->query($sql);
     $count = 0;
     while($user = $result->fetch_assoc()){
       $count++;
       echo <<< E
       <tr>
       <td> $user[name] $user[surname]</td>
       <td> $user[city]</td>
       <td> $user[created_at]</td>
       </tr>
       E;
     }
     ?>
   </table>
  </body>
</html>

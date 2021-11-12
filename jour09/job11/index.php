<?php
$bdd = mysqli_connect("localhost","root","root","jour08");
mysqli_set_charset($bdd,"UTF8");
$requete = mysqli_query($bdd,"SELECT AVG (capacite) FROM `salles`");
$rooms = mysqli_fetch_all($requete, MYSQLI_ASSOC); 
var_dump($rooms)
?>




<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>index</title>
</head>
    <body>
<table>
    <thead>
        <tr>
            <th>capacité </th>
          
          
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <?php foreach($rooms[0] as $room){echo $room."</br>";}?>
            </td>
          
          
        </tr>
    </tbody>
  
</table>
    </body>
</html>

<?php
$bdd = mysqli_connect("localhost","root","root","jour08");
mysqli_set_charset($bdd,"UTF8");
$requete = mysqli_query($bdd,"SELECT nom, capacite FROM salles ");
$rooms = mysqli_fetch_all($requete, MYSQLI_ASSOC); 

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
            <th> nom </th>
            <th> capacite </th>
           
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <?php foreach($rooms as $room){echo $room["nom"]."</br>";}?>
            </td>
            <td>
                <?php foreach($rooms as $room){echo $room["capacite"]."</br>";}?>
            </td>
           
        </tr>
    </tbody>
  
</table>
    </body>
</html>
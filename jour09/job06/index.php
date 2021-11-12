
<?php
$bdd = mysqli_connect("localhost","root","root","jour08");
mysqli_set_charset($bdd,"UTF8");
$requete = mysqli_query($bdd,"SELECT COUNT(nom) as nb_etudiants FROM etudiants ;");
$etudiants = mysqli_fetch_all($requete, MYSQLI_ASSOC); 

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
            <th> nb_etudiants </th>
          
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <?php foreach($etudiants as $etudiant){echo $etudiant["nb_etudiants"]."</br>";}?>
            </td>
          
        </tr>
    </tbody>
  
</table>
    </body>
</html>
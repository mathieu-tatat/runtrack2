
<?php
$bdd = mysqli_connect("localhost","root","root","jour08");
mysqli_set_charset($bdd,"UTF8");
$requete = mysqli_query($bdd,"SELECT * FROM etudiants");
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
            <th> prenom </th>
            <th> nom </th>
            <th> naissance </th>
            <th> sexe </th>
            <th> email </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <?php foreach($etudiants as $etudiant){echo $etudiant["prenom"]."</br>";}?>
            </td>
            <td>
                <?php foreach($etudiants as $etudiant){echo $etudiant["nom"]."</br>";}?>
            </td>
            <td>
                <?php foreach($etudiants as $etudiant){echo $etudiant["naissance"]."</br>";}?>
            </td>
            <td>
                <?php foreach($etudiants as $etudiant){echo $etudiant["sexe"]."</br>";}?>
            </td>
            <td>
                <?php foreach($etudiants as $etudiant){echo $etudiant["email"]."</br>";}?>
            </td>
        </tr>
    </tbody>
  
</table>
    </body>
</html>
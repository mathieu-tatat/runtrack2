
<?php
    if (($_GET["style"]) == "style1"){
    ?><link rel="stylesheet" href="style1.css"><?php
    }

    if (($_GET["style"]) == "style2"){
        ?><link rel="stylesheet" href="style2.css"><?php
    }
    if (($_GET["style"]) == "style3"){
        ?><link rel="stylesheet" href="style3.css"><?php
    }
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Style</title>
</head>
<header><h1>Formulaire styles</h1></header>
<body>
<form  action="" method="get">
    <select name="style">
    <option>style1 </option>
    <option>style2 </option>
    <option>style3 </option>
    </select>
    <p>Nom : <input type="text" name="nom" /></p>
    <p>Prenom: <input type="text" name="age" /></p>
    <p>Age: <input type="text" name="nom" /></p>
    <p>Adresse : <input type="text" name="age" /></p>
    <p><input type="submit" value="submit"></p>    
    </form>


</body>
<footer><h2>Choose your style !!!</h2></footer>
</html>
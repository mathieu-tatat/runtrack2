<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="form.css">
  <meta charset="utf-8">
  <title></title>
</head>
<body>





<table>
   <tr>
       <td>argument</td>
       <td>valeur</td>
       
   </tr>
   <tr>
       
       <td>nom:</td>
       <td><?php echo $_POST["nom"]; ?></td>
      
      
   </tr>


   <tr>
       
       <td>prenom:</td>
       <td><?php echo $_POST["prenom"]; ?></td>
      
      
   </tr>
   <tr>
       
       <td>age:</td>
       <td><?php echo $_POST["age"]; ?></td>
      
      
   </tr>
   <tr>
       
       <td>@mail:</td>
       <td><?php echo $_POST["mail"]; ?></td>
      
      
   </tr>




</table>




</body>
</html>
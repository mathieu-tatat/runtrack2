<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="tabl.css">
  <meta charset="utf-8">
  <title></title>
</head>
<body>

<?php
$count = 0;
foreach($_POST as $value){
    $count = $count+1;
}
echo $count;

?>


</body>
</html>
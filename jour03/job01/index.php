
<?php 
$tab = [200, 204, 173, 98, 171, 404, 459];
for ($num = 0; $num < count($tab); $num++) { 
  echo $tab[$num];
  if ($tab[$num] % 2 == 0) {
    echo ": est paire\n <br/>";
  }
  else {
    echo ": est impaire\n <br/>";
  }
}
?>

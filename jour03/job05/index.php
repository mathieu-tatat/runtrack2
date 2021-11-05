<?php 
$consonnes = 0;
$voyelles =0;
$str = "On n est pas le meilleur quand on le croit mais quand on le sait";
$dic = [
    "voyelles"=>["a","e","i","o","u","y"],
    "consonnes"=>["b", "c", "d", "f", "g", "h", "j", "k", "l", "m", "n", "p", "q", "r", "s", "t", "v", "w", "x", "z"],
] ;
for ($i = 0;(isset($str[$i]));$i ++){
    foreach($dic[$voyelles] as $key => $valeur){
        echo $valeur;

    }
}

?>


<?php

function letspeek($str) {
    
   for ($i=0; isset($str[$i]); $i++) {   
        if($str[$i] == "a" || $str[$i] == "A" ){
            $str[$i] = "4";
        }
        elseif($str[$i] == "b" || $str[$i] == "B" ){
            $str[$i] = "8";
        }
        elseif($str[$i] == "e" || $str[$i] == "E" ){
            $str[$i] = "3";
        }
        elseif($str[$i] == "g" || $str[$i] == "G" ){
            $str[$i] = "6";
        }
        elseif($str[$i] == "l" || $str[$i] == "L" ){
            $str[$i] =  "1";
        }
        elseif($str[$i] == "s" || $str[$i] == "s" ){
            $str[$i] =  "5";
        }
    }
        return ($str);
}

echo letspeek("Hello bienvenue A tous a LaPlateformE!");
?> 
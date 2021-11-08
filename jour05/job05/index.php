<?php

function occurences($str,$chr) {
    $count= 0;
   for ($i=0; isset($str[$i]); $i++) {   
        if($str[$i] == $chr){
            echo $str[$i];
        }
        $count++;
    }
}

echo occurences("Hello LaPlateforme!","e");
?> 
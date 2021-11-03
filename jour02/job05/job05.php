<?php    
    $number = 2;  
    while ($prime <=1000 ) {   
        for ( $var=1; $var<=$number; $var+=1) {  
            if (($number%$i)==0) {  
        $conteur+=1;  
            }  
        }  
        if ($conteur<3) {  
            echo $number."<br>";  
            $prime+=1;  
            }  
        $number+=1;  
    }  
    ?>  
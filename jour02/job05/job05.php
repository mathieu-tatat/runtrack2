<?php  
    $prime = 0;  
    $number = 2;  
    while ($prime <=1000 )  
    {  
    $conteur=0;  
    for ( $var=1; $var<=$number; $var++)  
    {  
    if (($number%$var)==0)  
    {  
    $conteur++;  
    }  
    }  
    if ($conteur<3)  
    {  
    echo $number."<br>";  
    $prime+=1;  
    }  
    $number+=1;  
    }  
    ?>  
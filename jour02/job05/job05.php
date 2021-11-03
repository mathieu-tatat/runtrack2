<?php  
    $prime = 0;  
    $number = 2;  
    while ($prime <=1000 )  
    {  
    $conteur=0;  
    for ( $i=1; $i<=$number; $i++)  
    {  
    if (($number%$i)==0)  
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
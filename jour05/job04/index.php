<?php

function calcule($a,$operation,$b) {
    if ( $operation == '+'){
        $result = $a + $b;
    }
    elseif($operation == '-'){
        $result = $a - $b;
    }
    elseif ($operation =='*'){
        $result = $a * $b;
    }
    elseif($operation == '/'){
        $result = $a / $b;
    }
    elseif($operation == '%'){
        $result = $a / $b;
    }
    else 
    echo "ceci n'est pas un operateur";
    
    return $result;
}

echo calcule(3,'-',5);
?> 
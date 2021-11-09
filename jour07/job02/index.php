
<?php

    if(isset($_COOKIE["nbvisites"])){
    setcookie("nbvisites",$_COOKIE["nbvisites"] +1);}   
    
    else{
    setcookie("nbvisites", 0);
}
    foreach($_POST as $key => $value){
    $value = 0;
    $_COOKIE["nbvisites"] = $value;
    setcookie("nbvisites", 0);
}

?>




<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>index</title>
</head>
    <body>

        <p><?php echo 'Nombre de visites de la  page : '.$_COOKIE['nbvisites']?></p>

        <form action="" method="post">
            <input type="submit" value="Reset" id="nbvisites" name="nbvisites">
        </form> 

    </body>
</html>

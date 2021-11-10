
<?php 

if (!isset($_COOKIE['prenom'])) {   
	
	$prenom = $_POST['prenom'];
	setcookie("prenom", $prenom, time() + 10000 ); 
}

else {
	echo "Bonjour ".$_COOKIE['prenom']."&nbsp";
}


if (isset($_POST["deco"])){ 
	setcookie("prenom", ""); 
} 

?>

<!DOCTYPE html>
<html>
    <head>
    <title> job04</title>
    </head>
    <body>
    <form method='post'> 
            <input type='text' name='prenom' />   
            <input type='submit' name='connexion' value='connexion'/>   
        </form> 

        <form method='post'>
            <input type='submit' name='deco' value='deco'/>
        </form> 
    </body>
 
</html>
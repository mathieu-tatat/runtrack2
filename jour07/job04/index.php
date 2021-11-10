
<?php 

if (!isset($_COOKIE['prenom'])) {   
	
	
    echo "<form method='post'> 
            <input type='text' name='prenom' />   
            <input type='submit' name='connexion' value='connexion'/>   
        </form>";
        $prenom = $_POST['prenom'];
	setcookie("prenom", $prenom, time() + 10000 ); 
    
}

else {
	echo "Bonjour ".$_COOKIE['prenom']."&nbsp"; 
    echo "<form method='post'>
            <input type='submit' name='deco' value='deco'/>
        </form>";
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
     

       
    </body>
 
</html>
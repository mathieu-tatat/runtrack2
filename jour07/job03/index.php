
 <?php 
        session_start();

        $_SESSION["prenom"][] = $_POST["prenom"];

        foreach($_SESSION["prenom"] as $value){ 
            echo $value."&nbsp";
        }

        if (isset($_POST["reset"])){ 
            session_destroy();
        }
        ?>



<!DOCTYPE html>
    <html>
    <head>
    <title> index</title>
    </head>
    <body>
       
        <form method="post"> 
                <input type="text" name="prenom" />   
            </form> 

        <form method="post"> 
                <input type="submit" name="reset" value="reset"/>   
            </form> 

 </body>
</html>
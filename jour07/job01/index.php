<?php
    session_start();


        if (!isset ($_SESSION['nbvisites']))
        {
        $_SESSION['nbvisites']=0;
        }else
        {
        $_SESSION['nbvisites']++;
        }
        if(isset($_POST["reset"]))
        {
            session_destroy();
            $_SESSION['nbvisites'] = 0;
        }
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>index</title>
</head>
    <body>

        <p><?php echo 'Nombre de visites de la  page : '.$_SESSION['nbvisites']?></p>

        <form method="post" action="">
            <input type="submit" name="reset" value="reset">
        </form>

    </body>
</html>
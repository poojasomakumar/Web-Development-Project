<?php
    session_start();

    if(isset($_SESSION['user']))
    {
        echo ' Welcome ' .$_SESSION['username'].'<br/>';
        
    }
    else
    {
        header("location:loginfront.php");
    }

?>

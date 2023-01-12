<?php
    session_start();


    if(!isset($_SESSION['id'])) 
     {  
        header("location:login.php");  
        die();  
     }  
    else if(isset($_SESSION['id']))
     {
         // echo "<h1>Welcome to Home</h1>";
     }
    else
     {
        header("location:login.php");  
        die(); 
     }


?>
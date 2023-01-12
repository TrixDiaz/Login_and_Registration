<?php
require './partials/database.php';  // require will produce a fatal error (E_COMPILE_ERROR) and stop the script
    //start session to store values in session
    session_start();

    $msg="";
    $registersuccess="";
    $passwordlenght="";
    $namelenght="";
    $passwordmsg="";
    $empty="";
    $passwordchange="";
    //Login Button Function 
    if(isset($_POST['login'])) 
    {
       
        // fetching name and password from textbox
        $name=mysqli_real_escape_string($conn,$_POST['name']);  
        $password=mysqli_real_escape_string($conn,$_POST['password']);
        $password = md5($password);
        // fetching username and password from database 
        $query=mysqli_query($conn,"select * FROM users WHERE name='$name' && password='$password'");  
        
        $num=mysqli_num_rows($query);  
        if ($num>0) {  
            
             //Data Found
             
             $row=mysqli_fetch_assoc($query);  
             $id = $_SESSION['id']=$row['id'];  
             $_SESSION['name']=$row['name'];  
             header("location:home.php?id=$id");  
        }else{  
             $msg="Unknown Username and bad Password!";  
        }  
   }  
    //End 
   //Register Button Function
   if(isset($_POST['register']))
   {

        // fetching name and password from textbox
        $name=mysqli_real_escape_string($conn,$_POST['name']);  
        $password=mysqli_real_escape_string($conn,$_POST['password']);
        $confirmpassword=mysqli_real_escape_string($conn,$_POST['confirmpassword']);
        $password = md5($password);

        if(empty($_POST['name']) && empty($_POST['password']) && empty($_POST['confirmpassword']))
         {
           $empty = "Fill all the Fields.";
         }
        elseif(strlen($_POST['name']) <= 6) 
         {
              $namelenght = 'ERROR: Name Minimum 6 Character';
         }
        elseif(strlen($_POST['password']) <= 6)
         {
           $passwordlenght = 'ERROR: Password Minimum 6 Character';
         }
        elseif($_POST["password"] != $_POST["confirmpassword"])
         {
           $passwordmsg = "ERROR: Password does not match " ;
         }
        else
         { 
           $query =mysqli_query($conn,"INSERT INTO users (name, password) VALUES ('$name','$password')");
           $registersuccess = 'Account Successfully Created';
         }
   } //end
   
   if(isset($_POST['change']))
   {
        // fetching name and password from textbox
        $old=mysqli_real_escape_string($conn,$_POST['old']);  
        $password=mysqli_real_escape_string($conn,$_POST['password']);
        $confirmpassword=mysqli_real_escape_string($conn,$_POST['confirmpassword']);
        $password = md5($password);

        $select = mysqli_query($conn,"SELECT password FROM users WHERE name='$id' "); 
        
        if($select == true)
        {
          if(empty($_POST['old']) && empty($_POST['password']) && empty($_POST['confirmpassword']))
          {
            $empty = "Fill all the Fields.";
          }
         elseif(strlen($_POST['password']) <= 6)
          {
            $passwordlenght = 'ERROR: Password Minimum 6 Character';
          }
         elseif($_POST["password"] != $_POST["confirmpassword"])
          {
            $passwordmsg = "ERROR: Password does not match " ;
          }
         else
          { 
            $query =mysqli_query($conn,"UPDATE users SET password='$password' WHERE name='$id' ");
            $passwordchange = 'Password Successfully Changed';
          }
        }
       
   } //end

































   ?>




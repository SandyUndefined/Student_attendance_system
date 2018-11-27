<?php
session_start();
 if (isset($_POST['admin'])) 
 {

 	if (empty($_POST['username']) || empty($_POST['password'])) 
  	 {
  	 	header("location:login_page.php?Empty= Please Enter Username and Password");
  	 }
  	 else
  	 {
        
        $username = "Sandeep Sharma";
        $password = "1234";


  	 	if ($_POST['username']==$username && $_POST['password']==$password) 
  	 	{
  	 	   $_SESSION['User'] = $_POST['username'];  
  	 		header("location:admin.php");	
  	 	}
  	 	else
  	 	{

  	 		header("location:login_page.php?Invalid= Invalid Username and Password");
  	 	}

  	 }
 }
 else
 {

 }

?>
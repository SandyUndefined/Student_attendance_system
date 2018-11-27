<?php 
  require_once('connection.php');
   session_start();
   
  if (isset($_POST['teacher'])) 
  {

  	 if (empty($_POST['username']) || empty($_POST['password'])) 
  	 {
  	 	header("location:login_page.php?Empty= Please Enter Username and Password");
  	 }
  	 else
  	 {
  	 	$query = "select * from teacher where EMAIL='".$_POST['username']."' and PASSWORD= '".$_POST['password']."'";
      
  	 	$result = mysqli_query($conn,$query);
  	 	if(mysqli_fetch_assoc($result))
  	 	{
  	 		$_SESSION['User'] = $_POST['username'];
  	 		header("location:teacher.php");
  	 	}
  	 	else{

  	 		header("location:login_page.php?Invalid= Invalid Username and Password");
  	 	}
  	 }
  }
  else
  {

  }
 ?>
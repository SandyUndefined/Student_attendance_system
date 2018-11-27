<?php
     
     include_once('connection.php');
        session_start();
      if (isset($_POST['adding_teacher'])) 
      {
      	
      	 if (!empty($_POST['name']) && ($_POST['email']) && ($_POST['password']) && ($_POST['state']) && ($_POST['city'])) 
      	 {

            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $state = $_POST['state'];
            $city = $_POST['city'];
            
           if (mysqli_query($conn,"insert into teacher (NAME,EMAIL,PASSWORD,STATE,CITY) values('$name','$email','$password','$state','$city')")); 
           {  echo '<script language="javascript">';
              echo 'alert("Teacher added successfully")';
              echo '</script>';
           	 header("refresh:0,url=admin.php");
           }

      	 }
      	 else
      	 {
      	 	header("location:add_teacher.php?Empty= Please Fill All The Fields");
      	 }

      }

    ?>
 <?php
     
     include_once('connection.php');
        session_start();
      if (isset($_POST['adding_student'])) 
      {
      	
      	 if (!empty($_POST['name']) && ($_POST['DOB']) && ($_POST['phonenumber']) && ($_POST['rollnumber']) && ($_POST['department']) && ($_POST['semester'])) 
      	 {

            $name = $_POST['name'];
            $dob = $_POST['DOB'];
            $phonenumber = $_POST['phonenumber'];
            $rollnumber = $_POST['rollnumber'];
            $department = $_POST['department'];
            $sem = $_POST['semester'];


           if (mysqli_query($conn,"insert into student (SNAME,DOB,PHONE,ROLL,DEPT,SEM) values('$name','$dob','$phonenumber','$rollnumber','$department',$sem)")); 
           {
            echo '<script language="javascript">';
              echo 'alert("Student added successfully")';
              echo '</script>';
           	 header("refresh:0,url=teacher.php");
           }

      	 }
      	 else
      	 {
      	 	header("location:add_student.php?Empty= Please Fill All The Fields");
      	 }

      }

    ?>
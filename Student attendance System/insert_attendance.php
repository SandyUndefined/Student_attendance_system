 <?php  
 include_once('connection.php');
 session_start();
 if (isset($_POST['record'])) 
  {
  	if(isset($_POST['present']) && $_POST['present'])
  	{
  	foreach ($_POST['present'] as $key => $check) 
  	{
  		$sname = $_POST['SNAME'][$key];
  		$roll = $_POST['ROLL'][$key];
  		$email = $_SESSION['User'];
  		$dep = $_GET['dep'];
  		$sem = $_GET['sem'];
  		$date = date("Y-m-d");
  		if (isset($_POST['present']) == "present") 
  		{
  			$_POST['present'] = "Present";
  			$check = $_POST['present'];
  		}
  		else
  		{
  			$_POST['present'] = "Absent";
  			$check = $_POST['present'];
  		}
  		if (mysqli_query($conn,"insert into attendance(Name,Roll,Email,Department,Sem,Date,Status) values('$sname','$roll','$email','$dep','$sem','$date','$check')"));
  		 {
        echo '<script language="javascript">';
              echo 'alert("Attendance Submitted")';
              echo '</script>'; 
  			header("refresh:0,url=teacher.php");
  		}


  	}
     }
     else
     {
     	echo '<script language="javascript">';
              echo 'alert("No Student Found")';
              echo '</script>';
             header("refresh:0,url=select_attendance.php");
     }
  }
  else
  {
  	echo "Repeat";
  }
?>
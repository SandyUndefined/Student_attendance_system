<?php
 include_once('connection.php');
 session_start();
if (isset($_POST['submit']))
 {          
           if ($_POST['department'] && $_POST['semester'] == 'NULL') 
           {
           	 echo '<script language="javascript">';
              echo 'alert("Please Select department and Semester")';
              echo '</script>';
           	 header("refresh:0,url=select_attendance.php");
           }
       else
        {

         $dep = $_POST['department'];
         $sem = $_POST['semester'];
         $user = $_SESSION['User'];

 		  $query = "SELECT ROLL,SNAME FROM `student` WHERE DEPT= '$dep' AND SEM = '$sem' ";
          $result = mysqli_query($conn,$query);

        if (isset($_SESSION['User'])) 
        {
	
	   include("header.php");
?>
        <div class="card">
	       <div class="card-body bg-info text-white pl-5"><?php echo ' Hello  ,' .$user; ?>
		     <button type="button" class="btn btn-dark  float-right mr-5"><a  class=" text-white" href="logout.php?logout">Logout</a></button>
		     <button type="button" class="btn btn-success  float-right  mr-5"><a  class=" text-white" href="select_attendance.php">Back </a></button>
	    </div>
        </div>
        <?php
     }
       else
    {
	  header("location:login_page.php");
     }
?>
<form method="Post" action="insert_attendance.php?dep=<?php echo $dep?>&sem=<?php echo $sem?>&user=<?php echo $user?>">
<div class="container text-white">
	<table class="table table-striped">
		<thead class="thead-dark">
			<tr>
				<th scope="col">Roll Number</th>
				<th scope="col">Name</th>
				<th scope="col"></th>
				<th scope="col">Present/Absent</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$c=0;
			while ($rows=mysqli_fetch_assoc($result)) 
			 	{
			 ?>
			  <tr>
			  	<th><?php echo $rows['ROLL'];?>
			  	<input type="hidden" name="ROLL[]" value="<?php echo $rows['ROLL'];?>"></th>
			  	<th><?php echo $rows['SNAME'];?>
			  		<input type="hidden" name="SNAME[]" value="<?php echo $rows['SNAME'];?>">
			  	</th>
			  	<th></th>
			  	<th>
			  	  <div class="form-check">
  <input type="checkbox" class="form-check-input" id="check1"  value="present" name="present[<?php echo $c; ?>]">
                  </div>
                </th>
			  </tr>
			 <?php	
			 $c++;
			 } 
			?>
		</tbody>
	</table>
	<center>
		<input type="submit" name="record" value="Submit"  class="btn btn-success submit_green w-25 ">
		</center>
</div>
</form>
<?php
}
}
?>

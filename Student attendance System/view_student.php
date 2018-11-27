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
           	 header("refresh:0,url=select_student.php");
           }
       else
        {

         $dep = $_POST['department'];
         $sem = $_POST['semester'];
         $user = $_SESSION['User'];

 		  $query = "SELECT * FROM `student` WHERE DEPT= '$dep' AND SEM = '$sem' ";
          $result = mysqli_query($conn,$query);

        if (isset($_SESSION['User'])) 
        {
	
	   include("header.php");
?>
        <div class="card">
	       <div class="card-body bg-info text-white pl-5"><?php echo ' Hello  ,' .$user; ?>
		     <button type="button" class="btn btn-dark  float-right mr-5"><a  class=" text-white" href="logout.php?logout">Logout</a></button>
		     <button type="button" class="btn btn-success  float-right  mr-5"><a  class=" text-white" href="teacher.php">Back </a></button>
	    </div>
        </div>
        <?php
     }
       else
    {
	  header("location:login_page.php");
     }
?>
<div class="container text-white">
	<table class="table table-striped">
		<thead class="thead-dark">
			<tr>
				<th scope="col">Name</th>
				<th scope="col">Date of Birth</th>
				<th scope="col">Phone Number</th>
				<th scope="col">Roll number</th>
				<th scope="col">Department</th>
				<th scope="col">Semester</th>
			</tr>
		</thead>
		<tbody>
			<?php
			while ($rows=mysqli_fetch_assoc($result)) 
			 {
			 ?>
			  <tr>
			  	<th><?php echo $rows['SNAME'];?></th>
			  	<th><?php echo $rows['DOB'];?></th>
			  	<th><?php echo $rows['PHONE'];?></th>
			  	<th><?php echo $rows['ROLL'];?></th>
			  	<th><?php echo $rows['DEPT'];?></th>
			  	<th><?php echo $rows['SEM'];?></th>
			  </tr>
			 <?php	
			 } 
			?>
		</tbody>
	</table>
</div>
<?php
}
}
?>
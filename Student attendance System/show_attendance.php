<?php
include_once('connection.php');
$query = "SELECT Roll,Name,Department,Sem,Status FROM `attendance` WHERE Date = '$_POST[date]' AND Email = '$_POST[email]'";
$result = mysqli_query($conn,$query);
session_start();
if (isset($_SESSION['User'])) 
{
	include("header.php");
?>
<div class="card">
	<div class="card-body bg-info text-white pl-5"><?php echo 'Hello ,' .$_SESSION['User']; ?>
		<button type="button" class="btn btn-dark  float-right mr-5"><a  class=" text-white" href="logout.php?logout">Logout</a></button>
		<button type="button" class="btn btn-success  float-right  mr-5"><a  class=" text-white" href="view_attendance.php">Back </a></button>
	</div>
</div>

<?php
}
else
{
	header("location:login_page.php");
}
?>
<div class="container">
	<table class="table table-striped">
		<thead class="thead-dark">
			<tr>
				<th scope="col">Roll</th>
				<th scope="col">Name</th>
				<th scope="col">department</th>
				<th scope="col">Semester</th>
				<th scope="col">Status</th>
			</tr>
		</thead>
		<tbody>
			<?php
			while ($rows=mysqli_fetch_assoc($result)) 
			 {
			 ?>
			  <tr class="text-white">
			  	<th><?php echo $rows['Roll'];?></th>
			  	<th><?php echo $rows['Name'];?></th>
			  	<th><?php echo $rows['Department'];?></th>
			  	<th><?php echo $rows['Sem'];?></th>
			  	<th><?php echo $rows['Status'];?></th>
			  </tr>
			 <?php	
			 } 
			?>
		</tbody>
	</table>
</div>

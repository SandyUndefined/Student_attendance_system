<?php
include_once('connection.php');
$query = "SELECT DISTINCT Email,Date FROM `attendance`";
$result = mysqli_query($conn,$query);
session_start();
if (isset($_SESSION['User'])) {
	
	include("header.php");
?>
<div class="card">
	<div class="card-body bg-info text-white pl-5"><?php echo 'Hello ,' .$_SESSION['User']; ?>
		<button type="button" class="btn btn-dark  float-right mr-5"><a  class=" text-white" href="logout.php?logout">Logout</a></button>
		<button type="button" class="btn btn-success  float-right  mr-5"><a  class=" text-white" href="admin.php">Back </a></button>
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
				<th scope="col">Email</th>
				<th scope="col">Date</th>
				<th scope="col"></th>
				<th scope="col">Show Attendance</th>
			</tr>
		</thead>
		<tbody>
			<?php
			while ($rows=mysqli_fetch_assoc($result)) 
			 {
			 ?>
             
			  <tr>
			  	<th><?php echo $rows['Email'];?></th>
			  	<input type="hidden" name="email" value="<?php echo $email = $rows['Email'];?>">
			  	<th><?php echo $rows['Date'];?></th>
			  	<th></th>
			  	<th>
			  		<form action="show_attendance.php" method="POST">
			  			<input type="hidden" value="<?php echo $rows['Email'] ?>" name="email">
			  			<input type="hidden" value="<?php echo $rows['Date'] ?>" name="date">
			  			<input type="submit" value="Show Attendance" class="btn btn-success w-50 text-white">
			  		</form>
			  	</th>
			  </tr>
			 <?php	
			 } 
			?>
		</tbody>
	</table>
</div>
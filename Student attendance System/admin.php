<?php
session_start();
if (isset($_SESSION['User'])) {
	
	include("header.php");
?>
<div class="card">
	<div class="card-body bg-info text-white pl-5"><?php echo 'Hello ,' .$_SESSION['User']; ?>
		<button type="button" class="btn btn-dark  float-right mr-5"><a  class=" text-white" href="logout.php?logout">Logout</a></button>
	</div>
</div>
<?php
}
else
{
	header("location:login_page.php");
}
?>
<div class="container pt-5">
<center>
<button type="button" class="btn btn-primary admin_button float-left w-25 "><a href="add_teacher.php">Add Teacher</a></button>
<button type="button" class="btn btn-primary admin_button  w-25 "><a href="delete_teacher.php">Delete Teacher</a></button>
<button type="button" class="btn btn-primary  admin_button float-right w-25"><a href="view_attendance.php">View Attendance</a></button>
<button type="button" class="btn btn-primary admin_button  view w-25 "><a href="view_teacher.php">View Teacher</a></button>
</center>
</div>
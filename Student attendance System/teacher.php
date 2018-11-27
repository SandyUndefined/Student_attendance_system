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
<button type="button" class="btn btn-primary teacher float-left w-25"><a href="add_student.php">ADD STUDENT</a></button>
<button type="button" class="btn btn-primary teacher  w-25"><a href="select_student.php">VIEW STUDENT</a></button>
<button type="button" class="btn btn-primary teacher float-right w-25"><a href="select_attendance.php">TAKE ATTENDANCE</a></button>
</center>
</div>


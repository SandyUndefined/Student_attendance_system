<?php
session_start();
if (isset($_SESSION['User'])) {
	
	include("header.php");
?>
<div class="card">
	<div class="card-body bg-info text-white pl-5"><?php echo 'Hello ,' .$_SESSION['User']; ?>
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
<div class="container pt-5">
<form action="take_attendance.php" method="POST" name="submit">
	<div class="row">
   <div class="col"> 
  	<div class="form-group input-group">
		<div class="input-group-prepend">
			<span class="input-group-text"><i class="fas fa-graduation-cap"></i></span>
		</div>
		<select class="form-control" name="department">
			<option selected hidden value="NULL">Enter your Department</option>
			<option>BCA</option>
			<option>MCA</option>
		</select>	
	</div>
</div>	
<div class="col">
	<div class="form-group input-group">
		<div class="input-group-prepend">
				<span class="input-group-text"><i class="fas fa-graduation-cap"></i></span>
		</div>
	<select class="form-control" name="semester" required>
		<option selected hidden value="NULL">Enter your Semester</option>
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		<option>6</option>
	</select>
	</div>
</div>	
	<div class="col">	
	  <div class="form-group input-group">
		  <div class="input-group-prepend">
			  <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
		  </div>
		  <input type="text" class="form-control" name="date" disabled placeholder=<?php echo date("Y-m-d");?> />
	  </div>
	</div>
	<div class="col">
		<div class="form-group input-group">
		<input name="submit" value="Take Attendance" type="submit" class="btn submit_green btn-success w-75 "text-white >
		</div>
	</div>
	</div>
</form>
</div>


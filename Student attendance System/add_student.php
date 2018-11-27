<?php
session_start();
if (isset($_SESSION['User'])) {
	
	include("header.php");
?>

<div class="card">
	<div class="card-body bg-info text-white"><?php echo 'Hello '.$_SESSION['User']; ?>
		<button type="button" class="btn btn-dark  float-right  mr-5 "><a  class=" text-white" href="logout.php?logout">Logout</a></button>
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
<div class="container mt-4">
			<div class="row">
				<div class="col-sm-4"></div>
	             <div class="col-sm-4">
	             	<?php
            if(@$_GET['Empty'] == true)
             {
         ?>
          <div class="alert alert-danger" role="alert">
              <?php echo $_GET['Empty'];?>
          </div>
          <?php 
            }
		  ?>
					<form  name="add_student" action="insert.php" method="post">
						<div class="form-group input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-user"></i></span>
								</div>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Full Name"/>
						</div>

						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
							</div>
							<input type="text" class="form-control" name="DOB" id="datepicker"  placeholder="Enter your Date Of Birth"/>
						</div>

						<div class="form-group input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-phone"></i></span>
							    </div>
			                 <input type="text" class="form-control" name="phonenumber" id="phonenumber"  placeholder="Enter your Phone Number"/>	
						</div>

						<div class="form-group input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-list-ol"></i></span>
							    </div>
						<input type="text" class="form-control" name="rollnumber" id="rollnumber"  placeholder="Enter your Roll Number"/>
						</div>
						<div class="form-group input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-graduation-cap"></i></span>
								</div>
								<select class="form-control" name="department">
									<option selected hidden>Enter your Department</option>
									<option>BCA</option>
									<option>MCA</option>
								</select>	
						</div>
						<div class="form-group input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-school"></i></span>
								</div>
								<input class="form-control" id="disabledInput" type="text" placeholder="Siliguri Institue Of Technology" disabled>
						</div>
						<div class="form-group input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-graduation-cap"></i></span>
								</div>
								<select class="form-control" name="semester">
									<option selected hidden>Enter your Semester</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>6</option>
								</select>
						</div>
							<button type="submit" class="btn btn-success student float-right mt-3 mr-5 w-75 trigger-btn" name="adding_student" >Add Student</button>
					</form>
				</div>
			</div>
		</div>



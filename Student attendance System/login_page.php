<?php
include("header.php");
?>
<script type="text/javascript">
	<?php include 'script.js'; ?>
</script>
<div class="container">
<div class="row">
	<div class="col-sm-4"></div>
	<div class="col-sm-4"></div>
	<div class="col-sm-4">
		<center><h1 class="text-white" >Login</h1></center>
		<br><br>
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
		  <?php
            if(@$_GET['Invalid'] == true)
             {
         ?>
          <div class="alert alert-danger" role="alert">
              <?php echo $_GET['Invalid'];?>
          </div>
          <?php 
            }
		  ?>
		<form  name="login_form" action="process_admin.php" method="post">
			<div class="form-group input-group mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text"><i class="fas fa-user"></i></span>
				</div>
				<input type="text" class="form-control" placeholder="username" name="username"> 
			</div>
			<div class="form-group input-group mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text"><i class="fas fa-key"></i></span>
				</div>
				<input type="password" class="form-control" placeholder="password" name="password">
			</div>
			<button type="submit" class="btn btn-login w-100 mt-4 login" value="admin" name="admin" onclick="this.form.target='_blank;'return true;">Login as Admin</button>
			<button type="submit" class="btn btn-login w-100 mt-4 login" value="teacher" name="teacher" onclick="login_form.action = 'process_teacher.php'; return true;" formmethod="post">Login as Teacher</button>
		</form>
	</div>
</div>
</div>


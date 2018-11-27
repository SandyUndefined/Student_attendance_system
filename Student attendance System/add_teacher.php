<?php
session_start();
if (isset($_SESSION['User'])) 
{
	
	include("header.php");
?>
<div class="card">
	<div class="card-body bg-info text-white"><?php echo 'Hello '.$_SESSION['User']; ?>
		<button type="button" class="btn btn-dark  float-right  mr-5 "><a  class=" text-white" href="logout.php?logout">Logout</a></button>
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
<div class="container mt-5">
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
					<form  name="add_teacher" action="insert_two.php" method="post">
						<div class="form-group input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-user"></i></span>
								</div>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Full Name"/>
						</div>
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-at"></i></span>
							</div>
							<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
						</div>
						<div class="form-group input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-key"></i></span>
							    </div>
			                 <input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>	
						</div>
						<div class="form-group input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
								</div>
								<select class="form-control" name="state">
									<option selected hidden>Enter your State</option>
									<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                    <option value="Assam">Assam</option>
                                    <option value="Bihar">Bihar</option>
                                    <option value="Chandigarh">Chandigarh</option>
                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                    <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                                    <option value="Daman and Diu">Daman and Diu</option>
                                    <option value="Delhi">Delhi</option>
                                    <option value="Goa">Goa</option>
                                    <option value="Gujarat">Gujarat</option>
                                    <option value="Haryana">Haryana</option>
                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                    <option value="Jharkhand">Jharkhand</option>
                                    <option value="Karnataka">Karnataka</option>
                                    <option value="Kerala">Kerala</option>
                                    <option value="Lakshadweep">Lakshadweep</option>
                                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                                    <option value="Maharashtra">Maharashtra</option>
                                    <option value="Manipur">Manipur</option>
                                    <option value="Meghalaya">Meghalaya</option>
                                    <option value="Mizoram">Mizoram</option>
                                    <option value="Nagaland">Nagaland</option>
                                    <option value="Orissa">Orissa</option>
                                    <option value="Pondicherry">Pondicherry</option>
                                    <option value="Punjab">Punjab</option>
                                    <option value="Rajasthan">Rajasthan</option>
                                    <option value="Sikkim">Sikkim</option>
                                    <option value="Tamil Nadu">Tamil Nadu</option>
                                    <option value="Tripura">Tripura</option>
                                    <option value="Uttaranchal">Uttaranchal</option>
                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                    <option value="West Bengal">West Bengal</option>
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
									<span class="input-group-text"><i class="fas fa-city"></i></span>
							    </div>
			                 <input type="text" class="form-control" name="city" id="city"  placeholder="Enter your City"/>	
						</div>
							<input type="submit" class="btn btn-success float-right mt-3 mr-5 w-75 trigger-btn submit_green" name="adding_teacher" value="Add Teacher"  >
					</form>
				</div>
			</div>
		</div>
    

   
<?php
include_once('connection.php');
$query = "SELECT NAME,EMAIL,STATE,CITY FROM `teacher`";
$result = mysqli_query($conn,$query);
session_start();
if (isset($_SESSION['User'])) 
{
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
				<th scope="col">Name</th>
				<th scope="col">Email</th>
				<th scope="col">State</th>
				<th scope="col">City</th>
				<th scope="col">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
			while ($rows=mysqli_fetch_assoc($result)) 
			 {
			 ?>
			  <tr>
			  	<th><?php echo $rows['NAME'];?></th>
			  	<th><?php echo $rows['EMAIL'];?></th>
			  	<th><?php echo $rows['STATE'];?></th>
			  	<th><?php echo $rows['CITY'];?></th>
			  	<th>
			  	<button type="button" class="btn btn-danger"><a  class=" text-white" href="delete_action.php?dt=<?php echo $rows['NAME'];?>"  onclick="return checkdeleted()">Delete</a></button>
                </th>
			  </tr>
			 <?php	
			 } 
			?>
		</tbody>
	</table>
</div>
<script type="text/javascript">
	function checkdeleted() {
		return confirm('Are You sure? Want to delete this data');
	}
</script>
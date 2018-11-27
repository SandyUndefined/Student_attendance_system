<?php
include_once("connection.php");
$name = $_GET['dt'];

$query2 = "DELETE FROM teacher WHERE NAME='$name'";
$delete = mysqli_query($conn,$query2);
if($delete)
{
	echo '<script language="javascript">';
              echo 'alert("Teacher deleted successfully")';
              echo '</script>';
	header("refresh:0,url=delete_teacher.php");
}
else
{
	echo "not deleted";
}

?>

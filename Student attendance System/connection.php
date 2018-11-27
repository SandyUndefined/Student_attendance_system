<?php

$conn = mysqli_connect('localhost','root','','student_attendance_system');

if(!$conn)
{
	die('Please check your connection'. mysqli_error($conn));
}


  ?>
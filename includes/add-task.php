<?php 
	//adding task date and time vars
	$task = strip_tags($POST['task']);
	$date = date('Y-m-d');
	$time = date('H:i:s');

	//connects to database
	include('connect.php');

	//stores info in mysqli
	$mysqli = new mysqli('localhost', 'root', 'root', 'todo2');
	//mysqli with info will put all things into database
	$mysqli ->query("INSERT INTO tasks VALUES ('', '$task', '$date', '$time')");
	//actually queries the tasks
	$query = "SELECT * FROM tasks WHERE task = '$task' and date='$date', and time='$time' ";
 ?>
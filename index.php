<!DOCTYPE html>
<html>
<head>
	<title> To-Do List </title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<div class="wrap">
		<div class="task-list">
			<ul>
				<?php require("includes/connect.php"); ?>
			</ul>
		</div>
	<form class="add-new-task" autocomplete="off">
		<input type="text" name="new-task" placeholder="Add new item..."/>
	</form>	
	</div>
</body>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script>
	//calling the add task function
	add_task();

	//add function that adds the task
	function add_task(){
		$('.add-new-task').submit(function(){
			//creating new_task variable
			var new_task = $('.add-new-task input[name=new-task]').val();
			//if variable is empty...
			if(new_task != ''){
				$.post('includes/add-task.php', {task: new_task}, function(data){
					$(('add-new-task input[name=new-task]').val();
						$(data).appendTo('task-list ul').hide().fadeIn();
				});
			}
			return false;
		});
	}
</script>
</html>
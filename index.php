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
				<?php require("includes/connect.php");
				//new mysqli variable 
				$mysqli = new mysqli('localhost', 'root', 'root', 'todo2');
				//new query variable
				//selects everything from tasks table and orders them by date and time
				//ASC means ascension(newest to oldest)
				$query = "SELECT * FROM tasks ORDER BY date ASC, time ASC";
				//goes through query and connection and gives us new variable called numrows
				if($result = $mysqli->query($query)){
					$numrows = $result->num_rows;
					//goes through numrows to echo out info
					if($numrows>0){
						while($row = $result->fetch_assoc()){
							$task_id = $row['id'];
							$task_name = $row["task"];

							echo "<li>
							<span>'.$task_name'
							";
						}
					}
				}

				?>
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
			//if variable is not empty...
			if(new_task != ''){
				$.post('includes/add-task.php', {task: new_task}, function(data){
					$('add-new-task input[name=new-task]').val();
						$(data).appendTo('task-list ul').hide().fadeIn();
				});
			}
			return false;
		});
	}

	//delete-button function
	$('.delete-button').click(function(){
		//made new current_element variable
		var current_element = $(this);
		//made new task_id variable
		var task_id = $(this).attr('id');

		//calls .post info
		$.post('includes/delete-task.php', {id: task_id}, function(){
			//calls current_element variable
			current_element.parent().fadeOut("fast", function(){
				$(this).remove();
			});
		});
	});
</script>
</html>
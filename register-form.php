<?php
	//establishes connection to congif.php
	require_once(__DIR__ . "/../model/config.php");
?>

<!--title to help user undertand-->
<h1>Register</h1>
<!--linked create user onto form-->
<form method="post" action="<?php echo $path . "controller/create-user.php"; ?>">
<!--tells ^^^ what type of method-->
<!--new form that helps user register to the website-->
	<div>
		<label for="username">Username: </label>
		<input type="text" name="username"/>
	</div>
	<div>
		<label for="password">Password: </label>
		<input type="password" name="password"/>
	</div>
	<div>
		<button type="submit">Submit</button>
	</div>
</form>
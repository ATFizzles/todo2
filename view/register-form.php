<?php
    require_once(__DIR__ . "/../model/config.php");

 ?>

<h1>Register</h1>

<form id="reg" method="post" action="<?php echo $path . "controller/create-user.php"; ?>">
	<div>
		<label for="username">Username: </label>
		<input id="usernamein" type="text" name="username" />
	</div>

	<div>
		<label for="password">Password: </label>
		<input id="passwordin" type="password" name="password" />
	</div>

	<div>
		<button id="regsubmit" ype="submit">Submit:</button>
	</div>
</form>

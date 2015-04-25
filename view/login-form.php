<?php
    require_once(__DIR__ . "/../model/config.php");

 ?>

 <h1>Login</h1>

 <form id="log" method="post" action="<?php echo $path . "controller/login-user.php"; ?>"> 	
      <div>
		<label for="username">Username: </label>
		<input id="usernamein" type="text" name="username" />
	</div>

	<div>
		<label for="password">Password: </label>
		<input id="passwordin" type="password" name="password" />
	</div>

	<div>
		<button id="logsubmit" type="submit">Submit:</button>
	</div>
 </form>


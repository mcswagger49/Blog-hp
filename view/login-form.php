<?php
    require_once(__DIR__ . "/../model/config.php");
?>

	<h1>Login</h1>

	<form method="post" action="<?php echo $path . "controller/login-user.php"?>">
		  <div>
      	  <label for="username">Username: </label><!--show the username label tag -->
      	  <input type="text" name="username" /><!-- allows user to type text -->
      </div>
      <div>
        	<label for="password">Password: </label><!--show the password label -->
        	<input type="password" name="password" /><!-- allows user to type password -->
      </div>

      <div>
      	   <button type="submit">Submit</button><!-- the submit button on the website -->
      </div>
	</form>
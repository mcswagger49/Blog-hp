<?php
    require_once(__DIR__ . "/../model/config.php");
?>

<h1>Register</h1>

<form method="post" action="<?php echo $path ."controller/create-user.php"; ?>"><!--registering not using create-post not making one. -->
      <div>
          <label for="email">Email: </label><!--show the email label -->
          <input type="text" name="email" /><!-- allows user to type text -->
      </div>

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
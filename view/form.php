<?php
	require_once(__DIR__ . "/../model/config.php");
	require_once(__DIR__ . "/../controller/login-verify.php");

		if(authenticateUser())  {
			header("Location: " . $path . "index.php");
			die();//killing the program
	}
?>

<h1>Create Blog Post</h1><!-- Header for the blog post -->
	
<form method="post" action="<?php echo $path ."controller/create-post.php"; ?>"><!--registering not using create-post not making one. -->
	<div>
		<label for="title">Title: </label><!-- labels the title -->
		<input type="text" name="title" />
	</div>

	<div>
		 <label for="post">Post: </label><!-- label for the post textarea -->
		 <textarea name="post"></textarea><!--spams more than one area -->
	</div>

	<div>
		<button type="submit">Submit</button><!-- Creates the submit butten-->
	</div>
</form>


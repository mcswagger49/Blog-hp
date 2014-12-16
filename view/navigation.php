<?php
	require_once(__DIR__ . "/../model/config.php");// requires the new file config.php 
	require_once(__DIR__ . "/../controller/login-verify.php");

		if(authenticateUser())  {
			header("Location: " . $path . "index.php");
			die();//killing the program
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<div class="page-wrap"></div>
<nav><!-- one nav bar on the top of the page -->
<ul>
	<li><a href="<?php echo $path . "post.php"?>">Blog Post Form</a></li><!--points to post file--> 
</ul>
</nav>
</head>
<body>
<h1>Joshua's Blog</h1>
</body>
</html>
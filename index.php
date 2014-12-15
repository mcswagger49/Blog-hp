
<?php
  require_once(__DIR__ . "/controller/login-verify.php");//uses the login-verify file
	require_once(__DIR__ . "/view/header.php");//requires the header
  if(authenticateUser()) {//authenticates the user to make sure its the real user
      require_once(__DIR__ . "/view/navigation.php");
  }
	require_once(__DIR__ . "/view/navigation.php");//requires and shows the link in the webpage
	require_once(__DIR__ . "/controller/create_db.php");//requires things
	require_once(__DIR__ . "/controller/read-post.php");
  require_once(__DIR__ . "/view/footer.php");//requires the footer
	
?>

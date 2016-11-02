<?php
	// Check for empty fields
	if(empty($_POST['name']) || empty($_POST['email']) || !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
	{
		echo "No arguments Provided!";
		return false;
	}
	
	$name = strip_tags(htmlspecialchars($_POST['name']));
	$email_address = strip_tags(htmlspecialchars($_POST['email']));
	
	return true;			
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form-Exp4</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body> 
	<h1 style="text-align: center;">REGISTRATION FORM</h1> 
	<form name="RegForm" action="/submit.php"
		onsubmit="return checkValidation()" method="post"> 
		<p>Name: <input type="text"
						size="65" name="Name" /></p> 
		<br /> 
		<p>Address: <input type="text"
						size="65" name="Address" /></p> 
		<br /> 
		<p>E-mail Address: <input type="text"
							size="65" name="EMail" /></p> 
		<br /> 
		<p>Password: <input type="text"
							size="65" name="Password" /></p> 
		<br /> 		
			<input type="submit"
				value="Send" name="Submit" /> 
			<input type="reset"
				value="Reset" name="Reset" /> 
		</p> 
	</form> 
<script src="script.js"></script>
	<?php
echo “This is PHP code”;
?>
</body> 

</html>

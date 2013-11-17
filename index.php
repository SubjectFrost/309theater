<html>

 <head>
  <title>Index</title>
 </head>
 <body>

 <form action="<?php echo $_SERVER["PHP_SELF"]; ?>"  onsubmit="return validateForm()" method="post">
 <p>Your name: <input type="text" name="name" id="name"></p>
 <p>Credit card number: <input type="text" name="card" id = "card"></p>
 
 <p><input type="submit" value="submit"></p>

<script type="text/javascript"src="livevalidation.js">
	var na = new LiveValidation('name');
	na.add(Validate.Presence);
	var ca = new LiveValidation('card');
	ca.add(Validate.Numericality, {onlyInteger: true} );
	
 </script>
</form>
Hi <?php echo htmlspecialchars($_POST["name"]); ?>.
You are <?php echo (int)$_POST["card"]; ?> .
</html>
 </body>
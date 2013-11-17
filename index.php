<html>

 <head>
  <title>Index</title>
 </head>
 <body>

 <form action="<?php echo $_SERVER["PHP_SELF"]; ?>"  onsubmit="return validateForm()" method="post">
 <p>Your name: <input type="text" name="name" id="name"></p>
 <p>Credit card number: <input type="text" name="card" id = "card"></p>
 <p>Expiration date: mm <input type="text" name="exp_month" id = "exp_month" size = "2"> yy <input type="text" name = "exp_year" id = "exp_year" size = "2"></p>
 <p><input type="submit" value="submit"></p>

<script type="text/javascript"src="livevalidation.js">
	var name = new LiveValidation('name');
	name.add(Validate.Presence);
	var card = new LiveValidation('card');
	card.add(Validate.Numericality, {onlyInteger: true} );
	
 </script>
</form>
Hi <?php echo htmlspecialchars($_POST["name"]); ?>.
You are <?php echo (int)$_POST["card"]; ?> .
</html>
 </body>
<html>
<script type="text/javascript" src="livevalidation.js"></script>
 <head>
  <title>Index</title>
 </head>
 <body>

 <form action="<?php echo $_SERVER["PHP_SELF"]; ?>"  onsubmit="return validateForm()" method="post">
 <p>Your name: <input type="text" name="name" id="name"; ?></p>
 <p>Credit card number: <input type="text" name="card" id = "card"></p>
 <p>Expiration date: mm <input type = "text" name="exp_month" id = "exp_month" size = "2"> yy <input type="text" name = "exp_year" id = "exp_year" size = "2"></p>
 <p><input type="submit" value="submit"></p>

<script type="text/javascript">
 var name = new LiveValidation("name");
 name.add(Validate.Presence);
 var card = new LiveValidation("card");
 card.add(Validate.Numericality, {onlyInteger: true} );
 var expm = new LiveValidation('exp_month');
	expm.add(Validate.Numericality, { minimum: 1, maximum: 12, onlyInteger: true });
	expm.add(Validate.Length, { is: 2 } ); 
	var expy = new LiveValidation('exp_year');
	expy.add(Validate.Numericality, { minimum: 1, maximum: 99, onlyInteger: true });
	expy.add(Validate.Length, { is: 2 } );
 </script>
</form>
Hi <?php echo htmlspecialchars($_POST["name"]); ?>.
You are <?php echo (int)$_POST["age"]; ?> years old.
</html>
 </body>
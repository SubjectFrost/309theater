<html>
<script type="text/javascript" src="livevalidation.js"></script>
 <head>
  <title>Index</title>
 </head>
 <body>

 <form action="<?php echo $_SERVER["PHP_SELF"]; ?>"  onsubmit="return validateForm()" method="post">
 <p>Your name: <input type="text" name="name" id="name"; ?></p>
 <p>Credit card number: <input type="text" name="card" id = "card"></p>
 <p>Expiration date: <br>yy <input type="text" name = "exp_year" id = "exp_year" size = "2"><br>mm <input type = "text" name="exp_month" id = "exp_month" size = "2"> </p>
 <p><input type="submit" value="submit"></p>

<script type="text/javascript">
var today = new Date();

 var name = new LiveValidation("name");
 name.add(Validate.Presence);
 
 var card = new LiveValidation("card");
 card.add(Validate.Numericality, { onlyInteger: true} );
 card.add(Validate.Length, { is: 16 } ); 
 card.add(Validate.Presence);
 
 var expm = new LiveValidation('exp_month');
	expm.add(Validate.Numericality, { minimum: 1, maximum: 12, onlyInteger: true });
	expm.add(Validate.Length, { is: 2 } ); 
	expm.add(Validate.Presence);
	expm.add(Validate.Custom, { against: function() { return expired(exp_month, exp_year)} });
	var expy = new LiveValidation('exp_year');
	expy.add(Validate.Numericality, { minimum: 1, maximum: 9999, onlyInteger: true });
	expy.add(Validate.Length, { is: 2 } );
	expy.add(Validate.Presence);
	expy.add(Validate.Custom, { against: function() { return (exp_year < date("y"))}});
 </script>
</form>
Hi <?php echo htmlspecialchars($_POST["name"]); ?>.
Card number: <?php echo (int)$_POST["card"]; ?>.
</html>
 </body>
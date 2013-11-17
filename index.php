<html>
<script type="text/javascript" src="livevalidation.js"></script>
 <head>
  <title>Index</title>
 </head>
 <body>

 <form action="<?php echo $_SERVER["PHP_SELF"]; ?>"  onsubmit="return validateForm()" method="post">
 <p>Your name: <input type="text" name="name" id="name"; ?></p>
 <p>Credit card number: <input type="text" name="creditcardnumber" id = "creditcardnumber"></p>
 <p>Expiration date: <br>yy <input type="text" name = "exp_year" id = "exp_year" size = "2"><br>mm <input type = "text" name="exp_month" id = "exp_month" size = "2"> </p>
 <p><input type="submit" value="submit"></p>

<script type="text/javascript">
var today = new Date();

 var name = new LiveValidation("name");
 name.add(Validate.Presence);
 
 var creditcardnumber = new LiveValidation("creditcardnumber");
 creditcardnumber.add(Validate.Numericality, { onlyInteger: true} );
 creditcardnumber.add(Validate.Length, { is: 16 } ); 
 creditcardnumber.add(Validate.Presence);
 
 var expm = new LiveValidation('exp_month');
	expm.add(Validate.Numericality, { minimum: 1, maximum: 12, onlyInteger: true });
	expm.add(Validate.Length, { is: 2 } ); 
	expm.add(Validate.Presence);
	expm.add(Validate.Custom, { against: function() { return expired(exp_month, exp_year)} });
	var expy = new LiveValidation('exp_year');
	expy.add(Validate.Numericality, { minimum: 1, maximum: 99, onlyInteger: true });
	expy.add(Validate.Length, { is: 2 } );
	expy.add(Validate.Presence);
	
 </script>
</form>
Hi <?php echo htmlspecialchars($_POST["name"]); ?>.
Card number: <?php echo (int)$_POST["creditcardnumber"]; ?>.


<?php
	  $myCalendar = new tc_calendar("date", true);
	  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
	  $myCalendar->setDate(01, 03, 1960);
	  $myCalendar->setPath("calendar/");
	  $myCalendar->setYearInterval(1960, 2015);
	  $myCalendar->dateAllow('1960-01-01', '2015-03-01');
	  $myCalendar->setSpecificDate(array("2011-04-01", "2011-04-13", "2011-04-25"), 0, 'month');
	  $myCalendar->setOnChange("myChanged('test')");
	  $myCalendar->writeScript();
	  ?>

<script language="javascript">
<!--
function myChanged(v){
	alert("Hello, value has been changed : "+document.getElementById("date1").value+"["+v+"]");
}
//-->
</script>
 </body>
 </html>

 
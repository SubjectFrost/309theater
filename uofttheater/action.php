<html>
<script type="text/javascript" src="../livevalidation.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css" />
<body>




 <form action="index.php/main/createTicket"  onsubmit="return validate()" method="post" id="form" >
 <p>Your name: <br>First: <input type="text" name="fname" id="fname"/>
 <br>Last: <input type="text" name = "lname" id = "lname"/></p>
 <p>Credit card number: <input type="text" name="ccn" id = "ccn"/></p>
 <p>Expiration Date: <input type="text" name = "ccex" id="ccex" size= 4 /></p>
 
 <script>
 $(function() {
$( "#ccex" ).datepicker({
showOn: "button",
buttonImage: "images/calendar.gif",
buttonImageOnly: true
 , minDate: +1,  dateFormat: 'mmy'});
});
 </script>
 
 <input type="hidden" name="seat" id="seat" value = "<?$_POST["seat"]?>"/> 
 <input type="hidden" name="showtimeid" id = "showtimeid" value="<?$_POST["showtimeid"]?>"/>
 <input type = "hidden" name = "movieID" value = "<?=$_POST["movieID"]?>"/>
 <input type = "hidden" name = "theaterID" value = "<?=$_POST["theaterID"]?>"/>
 <input type = "hidden" name = "date" value = "<?=$_POST["date"]?>"/>
 <p><input type="submit" value="submit" id="submit"></p>
 
<script type="text/javascript">
var showt = new LiveValidation("showtime_id");
showt.add(Validate.Presence);
showt.add(Validate.Numericality, { onlyInteger: true } );

 var fname = new LiveValidation("fname");
 fname.add(Validate.Presence);
 var lname = new LiveValidation("lname");
 lname.add(Validate.Presence);
 
 var ccn = new LiveValidation("ccn");
 ccn.add(Validate.Numericality, { onlyInteger: true} );
 ccn.add(Validate.Length, { is: 16 } ); 
 ccn.add(Validate.Presence);
 
 var expd = new LiveValidation('ccex');
	expd.add(Validate.Numericality, { onlyInteger: true });
	expd.add(Validate.Length, { is: 4 } ); 
	expd.add(Validate.Presence);
	
	
 </script>
</form>
</body>
</html>
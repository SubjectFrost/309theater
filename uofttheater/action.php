<html>
<script type="text/javascript" src="../livevalidation.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css" />
<body>

 
 <form action="index.php/main/seats"  onsubmit="return seats()" method="post" id="seats" >
 <p>Showtime ID: <input type="text" name="showtime_id" id="showtime_id"></p>
 <input type = "submit" value = "submit" id = "submit1">
 </form>
 <?php
//echo anchor('','Back') . "<br />";


if(!empty($seats)) {

if ($seats[0] == 0) {
if (($_POST['seat1'] == "clicked") && ($_POST['seat2'] != "clicked") && ($_POST['seat3'] != "clicked")) {

echo "<form action=\"";
echo $_SERVER["PHP_SELF"];
echo "\" method=\"POST\"><input type=\"hidden\" name=\"seat1\" value=\"not_clicked\" /><input type=\"image\" src=\"images/green.png\" name=\"submit\"/></form>";
}
else
{
echo "<form action=\"";
echo $_SERVER["PHP_SELF"];
echo "\" method=\"POST\"><input type=\"hidden\" name=\"seat1\" value=\"clicked\" /><input type=\"image\" src=\"images/white.png\" name=\"submit\"/></form>";
}
}
else
{
echo "<form action=\"";
echo $_SERVER["PHP_SELF"];
echo "\" method=\"POST\"><input type=\"image\" src=\"images/yellow.png\" name=\"submit\"/></form>";
}


if ($seats[1] == 0) {
if (($_POST['seat2'] == "clicked") && ($_POST['seat1'] != "clicked") && ($_POST['seat3'] != "clicked")) {

echo "<form action=\"";
echo $_SERVER["PHP_SELF"];
echo "\" method=\"POST\"><input type=\"hidden\" name=\"seat2\" value=\"not_clicked\" /><input type=\"image\" src=\"images/green.png\" name=\"submit\"/></form>";
}
else
{
echo "<form action=\"";
echo $_SERVER["PHP_SELF"];
echo "\" method=\"POST\"><input type=\"hidden\" name=\"seat2\" value=\"clicked\" /><input type=\"image\" src=\"images/white.png\" name=\"submit\"/></form>";
}
}
else
{
echo "<form action=\"";
echo $_SERVER["PHP_SELF"];
echo "\" method=\"POST\"><input type=\"image\" src=\"images/yellow.png\" name=\"submit\"/></form>";
}


if ($seats[2] == 0) {
if (($_POST['seat3'] == "clicked") && ($_POST['seat1'] != "clicked") && ($_POST['seat2'] != "clicked")) {

echo "<form action=\"";
echo $_SERVER["PHP_SELF"];
echo "\" method=\"POST\"><input type=\"hidden\" name=\"seat3\" value=\"not_clicked\" /><input type=\"image\" src=\"images/green.png\" name=\"submit\"/></form>";
}
else
{
echo "<form action=\"";
echo $_SERVER["PHP_SELF"];
echo "\" method=\"POST\"><input type=\"hidden\" name=\"seat3\" value=\"clicked\" /><input type=\"image\" src=\"images/white.png\" name=\"submit\"/></form>";
}
}
else
{
echo "<form action=\"";
echo $_SERVER["PHP_SELF"];
echo "\" method=\"POST\"><input type=\"image\" src=\"images/yellow.png\" name=\"submit\"/></form>";
}

}

//And if the $site variable is not empty we echo it's content by using the generate method of the table class / library
//if(!empty($showtimes)) echo $this->table->generate($showtimes); 

?>
 
 <form action="index.php/main/createTicket"  onsubmit="return validate()" method="post" id="form" >
 <p>Your name: <br>First: <input type="text" name="fname" id="fname">
 <br>Last: <input type="text" name = "lname" id = "lname"></p>
 <p>Credit card number: <input type="text" name="ccn" id = "ccn"></p>
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
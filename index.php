<html>
<script type="text/javascript" src="livevalidation.js"></script>

 
 <head>
  <title>Index</title>
 </head>
 <body>
 <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css" />
<script>
$(function() {
$( "#date" ).datepicker({
showOn: "button",
buttonImage: "uofttheater/images/calendar.gif",
buttonImageOnly: true
 , minDate: +1, maxDate: "+14D"});
});

</script>
 <form action="action.php"  onsubmit="action.php" method="post" id="datepicker">
 <p>Date: <input type="text" id="date" /></p>
 
 <p><input type="submit" value="submit" id="submit"></p>
 <input type="hidden" name = "redirect" VALUE="action.php">
 
 
 </form>
 </body>
 </html>

 
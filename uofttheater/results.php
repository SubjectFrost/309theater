<html>
<body>
<form action="../../seats.php" onsubmit="return seats()" method="post" id="seats">
<p>Showtime ID: <input type="text" name="showtime_id" id="showtime_id"/></p>
<input type = "hidden" name = "movieID" value = "<?=$_POST["movieID"]?>"/>
 <input type = "hidden" name = "theaterID" value = "<?=$_POST["theaterID"]?>"/>
 <input type = "hidden" name = "date" value = "<?=$_POST["date"]?>"/>
<input type = "submit" value = "submit" id = "submit"/></form>
<form action="../../main/createTicket" method = "get">
<input type = "hidden" name = "showtime_id" id = "showtime_id" value = "1234"/>
</form>
<?php
echo anchor('../../../index.php','Back') . "<br />";


//And if the $site variable is not empty we echo it's content by using the generate method of the table class / library
if(!empty($results)) echo $this->table->generate($results); 

?>
</body>
</html>

<html>
<body>
<form action="../../action.php" onsubmit="return seats()" method="post" id="seats">
<p>Showtime ID: <input type="text" name="showtimeid" id="showtimeid"/></p>
<input type = "hidden" name = "movieID" value = "<?=$_POST["movieID"]?>"/>
 <input type = "hidden" name = "theaterID" value = "<?=$_POST["theaterID"]?>"/>
 <input type = "hidden" name = "date" value = "<?=$_POST["date"]?>"/>
<input type = "submit" value = "submit" id = "submit"/></form>

<?php
echo anchor('../../../index.php','Back') . "<br />";


//And if the $site variable is not empty we echo it's content by using the generate method of the table class / library
if(!empty($results)) echo $this->table->generate($results); 

?>
</body>
</html>

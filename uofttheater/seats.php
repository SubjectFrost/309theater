<html>
<head>
<title>Test</title>
<body>

<?php echo '<p>Select a seat.</p>';
echo $_POST["showtimeid"];
$showtimeid = $_POST["showtimeid"];
?>
 

<div id = "buttons">
<?php 
$seat = 0;
if (($_POST['seat1'] == "clicked") && ($_POST['seat2'] != "clicked") && ($_POST['seat3'] != "clicked")) {
$seat = 1;
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
?>
<?php 
if (($_POST['seat2'] == "clicked") && ($_POST['seat1'] != "clicked") && ($_POST['seat3'] != "clicked")) {
$seat = 2;
echo "<form action=\"";
echo $_SERVER["PHP_SELF"];
echo "\" method=\"POST\"><input type=\"hidden\" name=\"showtime_id\" id = \"showtime_id\" value=\"<?=$_POST[\"showtimeid\"]?>\"/><input type=\"hidden\" name=\"seat2\" value=\"not_clicked\" /><input type=\"image\" src=\"images/green.png\" name=\"submit\"/></form>";

}
else
{
echo "<form action=\"";
echo $_SERVER["PHP_SELF"];
echo "\" method=\"POST\"><input type=\"hidden\" name=\"seat2\" value=\"clicked\" /><input type=\"hidden\" name=\"showtime_id\" id = \"showtime_id\" value=\"<?=$_POST[\"showtimeid\"]?>\"/><input type=\"image\" src=\"images/white.png\" name=\"submit\"/></form>";
}
?>
<?php 
if (($_POST['seat3'] == "clicked") && ($_POST['seat1'] != "clicked") && ($_POST['seat2'] != "clicked")) {
$seat = 3;
echo "<form action=\"";
echo $_SERVER["PHP_SELF"];
echo "\" method=\"POST\"><input type=\"hidden\" name=\"seat3\" value=\"not_clicked\" /><input type=\"hidden\" name=\"showtime_id\" id = \"showtime_id\" value=\"<?=$_POST[\"showtimeid\"]?>\"/><input type=\"image\" src=\"images/green.png\" name=\"submit\"/></form>";
}
else
{
echo "<form action=\"";
echo $_SERVER["PHP_SELF"];
echo "\" method=\"POST\"><input type=\"hidden\" name=\"seat3\" value=\"clicked\" /><input type=\"hidden\" name=\"showtime_id\" id = \"showtime_id\" value=\"<?=$_POST[\"showtimeid\"]?>\"/><input type=\"image\" src=\"images/white.png\" name=\"submit\"/></form>";
}
?>




</div>

 <form action="action.php"   method="post" id="form" >
<input type="hidden" name="seat" id="seat" value = "<?=$seat?>"/> 
//<input type="hidden" name="showtime_id" id = "showtime_id" value="<?=$_POST["showtimeid"]?>"/>
 <input type = "hidden" name = "movieID" value = "<?=$_POST["movieID"]?>"/>
 <input type = "hidden" name = "theaterID" value = "<?=$_POST["theaterID"]?>"/>
 <input type = "hidden" name = "date" value = "<?=$_POST["date"]?>"/>
 <p><input type="submit" value="submit" id="submit"></p>

</body>
</html>
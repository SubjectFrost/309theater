<html>
<head>
<title>Test</title>
<body>

<?php echo '<p>Select a seat.</p>';
if (index.php/main/isSeatTaken/11734/1 == 0) {
echo 'moo';
}
else
{
echo 'foo';
}
class Phpver {
	function isOccupied($showtime_id,$seat) {
		//queries the db for informations about the seats
		$sql = "select available from showtime where id=?";
		$available = $this->db->query($sql,array($showtime_id));
		$ava = 0;
		
		foreach ($available->result() as $row){
			$ava = $row->available;
		}
		if ($ava == 3){
			return 0;
		}
		if ($ava == 0){
			return 1;
		}
		if ($ava > 0){
			$query = $this->db->query("select seat from ticket where showtime_id=? and seat=?",array($showtime_id,$seat));
			if ($query->num_rows() > 0) {
				return 1;
			}
			return 0;
		}
	}

}

?>


<div id = "buttons">
<?php 
if (isOccupied(11734,1) == 0) {
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
echo "\" method=\"POST\"><input type=\"hidden\" name=\"seat1\" value=\"clicked\" /><input type=\"image\" src=\"images/yellow.png\" name=\"submit\"/></form>";
}
?>
<?php 
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
?>
<?php 
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
?>




</div>

</body>
</html>
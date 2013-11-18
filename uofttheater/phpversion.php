<html>
<head>
<title>Test</title>
<body>

<?php echo '<p>Select a seat.</p>';


?>


<div id = "buttons">
<?php 
if (index.php/main/isSeatTaken/11734/1 == 0) {
if (($_POST['seat1'] == "clicked") && ($_POST['seat2'] != "clicked") && ($_POST['seat3'] != "clicked")) {

echo "<form action=\"";
echo $_SERVER["PHP_SELF"];
echo "\" method=\"POST\"><input type=\"hidden\" name=\"seat1\" value=\"not_clicked\" /><input type=\"image\" src=\"uofttheater/images/green.png\" name=\"submit\"/></form>";
}
else
{
echo "<form action=\"";
echo $_SERVER["PHP_SELF"];
echo "\" method=\"POST\"><input type=\"hidden\" name=\"seat1\" value=\"clicked\" /><input type=\"image\" src=\"uofttheater/images/white.png\" name=\"submit\"/></form>";
}
}
else
{
echo "<form action=\"";
echo $_SERVER["PHP_SELF"];
echo "\" method=\"POST\"><input type=\"hidden\" name=\"seat1\" value=\"clicked\" /><input type=\"image\" src=\"uofttheater/images/yellow.png\" name=\"submit\"/></form>";
}
?>
<?php 
if (($_POST['seat2'] == "clicked") && ($_POST['seat1'] != "clicked") && ($_POST['seat3'] != "clicked")) {

echo "<form action=\"";
echo $_SERVER["PHP_SELF"];
echo "\" method=\"POST\"><input type=\"hidden\" name=\"seat2\" value=\"not_clicked\" /><input type=\"image\" src=\"uofttheater/images/green.png\" name=\"submit\"/></form>";
}
else
{
echo "<form action=\"";
echo $_SERVER["PHP_SELF"];
echo "\" method=\"POST\"><input type=\"hidden\" name=\"seat2\" value=\"clicked\" /><input type=\"image\" src=\"uofttheater/images/white.png\" name=\"submit\"/></form>";
}
?>
<?php 
if (($_POST['seat3'] == "clicked") && ($_POST['seat1'] != "clicked") && ($_POST['seat2'] != "clicked")) {

echo "<form action=\"";
echo $_SERVER["PHP_SELF"];
echo "\" method=\"POST\"><input type=\"hidden\" name=\"seat3\" value=\"not_clicked\" /><input type=\"image\" src=\"uofttheater/images/green.png\" name=\"submit\"/></form>";
}
else
{
echo "<form action=\"";
echo $_SERVER["PHP_SELF"];
echo "\" method=\"POST\"><input type=\"hidden\" name=\"seat3\" value=\"clicked\" /><input type=\"image\" src=\"uofttheater/images/white.png\" name=\"submit\"/></form>";
}
?>




</div>

</body>
</html>
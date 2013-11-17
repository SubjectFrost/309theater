<html>
<head>
<title>Test</title>
<body>

<?php echo '<p>Moo</p>';


?>


<div id = "buttons">
<?php 
if (($_POST['seat1'] == "clicked") && ($_POST['seat2'] != "clicked")) {

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
?>
<?php 
if (($_POST['seat2'] == "clicked") && ($_POST['seat1'] != "clicked")) {

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

<span style="float.right"><a href="#" onclick = "taken()" ><img
name="boxbutton" src="uofttheater/images/yellow.png" width="30" height="30" border="1"
alt="square image" title="draw a square"></a></span>




</div>

</body>
</html>
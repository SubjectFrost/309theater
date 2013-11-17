<html>
<head>
<title>Test</title>
<body>

<?php echo '<p>Moo</p>';


?>


<div id = "buttons">
<?php 
if (isset($_POST['variable'])) {

echo "<form action=\"";
echo $_SERVER["PHP_SELF"];
echo "\" method=\"POST\"><input type=\"hidden\" name=\"variable\" value=\"clicked\" /><input type=\"image\" src=\"uofttheater/images/green.png\" name=\"submit\"/></form>";
}
else
{
echo "<form action=\"";
echo $_SERVER["PHP_SELF"];
echo "\" method=\"POST\"><input type=\"hidden\" name=\"variable\" value=\"50\" /><input type=\"image\" src=\"uofttheater/images/white.png\" name=\"submit\"/></form>";
}
?>
<span style="float.right"><a href="#" onclick = "select()" ><img
name="linebutton" src="uofttheater/images/white.png" width="30" height="30" border="1"
alt="line image" title="draw a line"></a></span>

<span style="float.right"><a href="#" onclick = "taken()" ><img
name="boxbutton" src="uofttheater/images/yellow.png" width="30" height="30" border="1"
alt="square image" title="draw a square"></a></span>




</div>

</body>
</html>
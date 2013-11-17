<html>
<head>
<title>Test</title>
<body>

<?php echo '<p>Moo</p>';


?>


<div id = "buttons">
<?php 
if (1 == 1) {
echo '<span style="float.right"><a href="#" onclick = "isSelected()" ><img
name="cursor" src="uofttheater/images/green.png" width="30" height="30" border="1"
alt="cursor image" title="selection"></a></span>' }; ?>

<span style="float.right"><a href="#" onclick = "select()" ><img
name="linebutton" src="uofttheater/images/white.png" width="30" height="30" border="1"
alt="line image" title="draw a line"></a></span>

<span style="float.right"><a href="#" onclick = "taken()" ><img
name="boxbutton" src="uofttheater/images/yellow.png" width="30" height="30" border="1"
alt="square image" title="draw a square"></a></span>




</div>

</body>
</html>
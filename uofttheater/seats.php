<?php
echo anchor('','Back') . "<br />";


if(!empty($seats)) {

if ($seats[0] == 0) {
if (($_POST['seat1'] == "clicked") && ($_POST['seat2'] != "clicked") && ($_POST['seat3'] != "clicked")) {

echo "<form action=\"";
echo $_SERVER["PHP_SELF"];
echo "\" method=\"POST\"><input type=\"hidden\" name=\"seat1\" value=\"not_clicked\" /><input type=\"image\" src=\"../images/green.png\" name=\"submit\"/></form>";
}
else
{
echo "<form action=\"";
echo $_SERVER["PHP_SELF"];
echo "\" method=\"POST\"><input type=\"hidden\" name=\"seat1\" value=\"clicked\" /><input type=\"image\" src=\"../images/white.png\" name=\"submit\"/></form>";
}
}
else
{
echo "<form action=\"";
echo $_SERVER["PHP_SELF"];
echo "\" method=\"POST\"><input type=\"image\" src=\"../images/yellow.png\" name=\"submit\"/></form>";
}


if ($seats[1] == 0) {
if (($_POST['seat2'] == "clicked") && ($_POST['seat1'] != "clicked") && ($_POST['seat3'] != "clicked")) {

echo "<form action=\"";
echo $_SERVER["PHP_SELF"];
echo "\" method=\"POST\"><input type=\"hidden\" name=\"seat2\" value=\"not_clicked\" /><input type=\"image\" src=\"../images/green.png\" name=\"submit\"/></form>";
}
else
{
echo "<form action=\"";
echo $_SERVER["PHP_SELF"];
echo "\" method=\"POST\"><input type=\"hidden\" name=\"seat2\" value=\"clicked\" /><input type=\"image\" src=\"../images/white.png\" name=\"submit\"/></form>";
}
}
else
{
echo "<form action=\"";
echo $_SERVER["PHP_SELF"];
echo "\" method=\"POST\"><input type=\"image\" src=\"../images/yellow.png\" name=\"submit\"/></form>";
}


if ($seats[2] == 0) {
if (($_POST['seat3'] == "clicked") && ($_POST['seat1'] != "clicked") && ($_POST['seat2'] != "clicked")) {

echo "<form action=\"";
echo $_SERVER["PHP_SELF"];
echo "\" method=\"POST\"><input type=\"hidden\" name=\"seat3\" value=\"not_clicked\" /><input type=\"image\" src=\"../images/green.png\" name=\"submit\"/></form>";
}
else
{
echo "<form action=\"";
echo $_SERVER["PHP_SELF"];
echo "\" method=\"POST\"><input type=\"hidden\" name=\"seat3\" value=\"clicked\" /><input type=\"image\" src=\"../images/white.png\" name=\"submit\"/></form>";
}
}
else
{
echo "<form action=\"";
echo $_SERVER["PHP_SELF"];
echo "\" method=\"POST\"><input type=\"image\" src=\"../images/yellow.png\" name=\"submit\"/></form>";
}

}

//And if the $site variable is not empty we echo it's content by using the generate method of the table class / library
//if(!empty($showtimes)) echo $this->table->generate($showtimes); 

?>

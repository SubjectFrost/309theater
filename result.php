<html>
<body>

<?php
$con=mysqli_connect("bungle07.cs.toronto.edu:3306","g1ight","430994","g1ight");
// Check connectionif (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM showtime");

while($row = mysqli_fetch_array($result))
  {
  echo $row['movie_id'] . " " . $row['theater_id'];
  echo "<br>";
  }

mysqli_close($con);
?>


</body>
</html>
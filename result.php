<html>
<body>

<?php

$result = $this->db->query("SELECT * FROM movie");

while($row = $this->db->query($result);)
  {
  echo $row['movie_id'] . " " . $row['theater_id'];
  echo "<br>";
  }


?>


</body>
</html>
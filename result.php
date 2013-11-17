<html>
<body>

<?php

$this->db->query("SELECT * FROM movie");

while($row = $this->db->query("SELECT * FROM movie");)
  {
  echo $row['movie_id'] . " " . $row['theater_id'];
  echo "<br>";
  }


?>


</body>
</html>
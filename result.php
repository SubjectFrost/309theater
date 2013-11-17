<html>
<body>

<?php

$this->db->query("SELECT * FROM showtime");

while($row = $this->db->query($result);)
  {
  echo $row['movie_id'] . " " . $row['theater_id'];
  echo "<br>";
  }


?>


</body>
</html>
<html>
<body>

<?php

$query = $this->db->get('SELECT ticket FROM g1ight');

foreach ($query->result() as $row)
{
    echo $row->ticket;
}

?>


</body>
</html>
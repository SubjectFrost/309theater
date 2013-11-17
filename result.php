<html>
<body>

<?php

$query = $this->db->get('SELECT ticket FROM g1ight');

if ($query->num_rows() > 0)
{
foreach ($query->result() as $row)
{
    echo $row->ticket;
}
foo!
}

?>


</body>
</html>
<html>
<body>

<?php

$query = $this->db->get('g1ight');

foreach ($query->result() as $row)
{
    echo $row->title;
}

?>


</body>
</html>
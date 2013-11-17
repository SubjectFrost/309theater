<?php
class Ticket_model extends CI_Model {

	function get_tickets()
	{
		$query = $this->db->query("select * from ticket");
		return $query;	
	}  

	function populate() {
		$this->db->query("insert into ticket (first,last,creditcardnumber,creditcardexpiration,showtime_id,seat) values ('foo','bar',1234567890123456,2015,5713,1)");
	}

	function delete() {
		$this->db->query("delete from ticket");
	}
	
	
}
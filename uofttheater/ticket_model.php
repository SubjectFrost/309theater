<?php
class Ticket_model extends CI_Model {

	function get_tickets()
	{
	//return all ticket information
		$query = $this->db->query("select * from ticket");
		return $query;	
	}  

	function add_ticket(first,last,creditcardnumber,creditcardexpiration,showtime_id,seat) {
		//make sure there is an available seat
		$available = $this->db->query("select available from showtime where id="+ showtime_id);
		if ($available > 0){
		      //insert ticket into the ticket table
		      $this->db->query("insert into ticket (first,last,creditcardnumber,creditcardexpiration,showtime_id,seat) values ("first","last","creditcardnumber","creditcardexpiration","seat")");
		      $available = $available - 1;
		      $this->db->query("update showtime set available="+ $available +" where id="+ showtime_id);
		}
		
	}

	function delete() {
	//delete all tickets
		$this->db->query("delete from ticket");
	}
	
	
}
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
		$sqel = "select available from showtime where id=?";
		$available = $this->db->query($sqel,array(showtime_id));
		foreach ($available->result() as $row){
			$ava = $row->available;
		}
		if ($ava > 0){
		      //insert ticket into the ticket table
		      $sql = "insert into ticket (first,last,creditcardnumber,creditcardexpiration,showtime_id,seat) values (?,?,?,?,?,?)";
		      $this->db->query($sql,array(first,last,creditcardnumber,creditcardexpiration,showtime_id,seat));
		      
		      $av = $ava - 1;
		      
		      $sqll = "update showtime set available= ? where id= ?";
		      $this->db->query($sqll,array($av,showtime_id));
		}
		
	}

	function delete() {
	//delete all tickets
		$this->db->query("delete from ticket");
	}
	
	
}
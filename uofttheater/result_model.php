<?php
class result_model extends CI_Model {

	function get_results($movieID, $theaterID, $date)
	{
		$query = $this->db->query("select m.title, t.name, t.address, s.date, s.time, s.available
								from movie m, theater t, showtime s
								where m.id = $movieID , t.id=$theaterID , s.date = $date");
		return $query;	
	}  


	
	
}
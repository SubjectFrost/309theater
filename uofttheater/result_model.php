<?php
class result_model extends CI_Model {

	function get_results()
	{
		$query = $this->db->query("select m.title, t.name, t.address, s.date, s.time, s.available
								from movie m, theater t, showtime s
								where m.id = s.movie_id and t.id=s.theater_id");
		return $query;	
	}  


	
	
}
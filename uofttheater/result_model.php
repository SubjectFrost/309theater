<?php
class result_model extends CI_Model {

	function get_results(s_date,m_id,t_id)
	{
		$query = $this->db->query("select m.title, t.name, t.address, s_date, s.time, s.available
								from movie m, theater t, showtime s
								where m.id = m_id and t.id=t_id");
		return $query;	
	}  


	
	
}
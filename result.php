<html>
<body>

<?php
$this->load->library('table');
		$this->load->model('showtime_model');
		
		
		$showtimes = $this->showtime_model->get_showtimes();

		
		if ($showtimes->num_rows() > 0){
		
			
			$table = array();	
	
			$table[] = array('Movie','Theater','Address','Date','Time','Available');
		
		   foreach ($showtimes->result() as $row){
				$table[] = array($row->title,$row->name,$row->address,$row->date,$row->time,$row->available);
		   }
			
			$data['showtimes'] = $table; 		   
		}
		
		
		$data['main']='main/showtimes';
		$this->load->view('template', $data);

?>


</body>
</html>
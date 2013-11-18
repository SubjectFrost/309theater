<?php



class Main extends CI_Controller {

    
    function __construct() {
    	// Call the Controller constructor
    	parent::__construct();
    }
        
    function index() {
	    	$data['main']='main/index';
	    	$this->load->view('template', $data);
    }
    
	function showShowtimes()
    {

		//First we load the library and the model
		$this->load->library('table');
		$this->load->model('showtime_model');
		
		//Then we call our model's get_showtimes function
		$showtimes = $this->showtime_model->get_showtimes();

		//If it returns some results we continue
		if ($showtimes->num_rows() > 0){
		
			//Prepare the array that will contain the data
			$table = array();	
	
			$table[] = array('Movie','Theater','Address','Date','Time','Available');
		
		   foreach ($showtimes->result() as $row){
				$table[] = array($row->title,$row->name,$row->address,$row->date,$row->time,$row->available);
		   }
			//Next step is to place our created array into a new array variable, one that we are sending to the view.
			$data['showtimes'] = $table; 		   
		}
		
		//Now we are prepared to call the view, passing all the necessary variables inside the $data array
		$data['main']='main/showtimes';
		$this->load->view('template', $data);
    }
    
	
	function showResults()
    {
		//echo $_POST["movieID"];
		//First we load the library and the model
		$this->load->library('table');
		$this->load->model('result_model');
		
		//Then we call our model's get_showtimes function
		$results = $this->result_model->get_results(&_POST["movieID"], $_POST["theaterID"], $_POST["date"]);
		//$results = null;
		
		//$this->db->select('*');
		//$this->db->from('movie m , theater t, showtime s');
		//&this->db->where('m.id =  , t.id=');
		
		//if ($_POST["$movieID"] != '0') $this->db->where('m.id', $_POST["$movieID"]);
		//if ($_POST["$theaterID"] != '0') $this->db->where('t.id',$_POST["$theaterID"]);
		//if ($_POST["$date"] != '0') $this->db->where('s.time', $_POST["$date"]);
		//$results = $this->db->get();
		
		//If it returns some results we continue
		if ($results->num_rows() > 0){
		
			//Prepare the array that will contain the data
			$table = array();	
	
			$table[] = array('Movie','Theater','Address','Date','Time','Available');
		
		   foreach ($results->result() as $row){
				$table[] = array($row->title,$row->name,$row->address,$row->date,$row->time,$row->available);
		   }
			//Next step is to place our created array into a new array variable, one that we are sending to the view.
			$data['results'] = $table; 		   
		}
		
		//Now we are prepared to call the view, passing all the necessary variables inside the $data array
		$data['main']='main/results';
		$this->load->view('template', $data);
    }
	function showTickets()
    {

		//First we load the library and the model
		$this->load->library('table');
		$this->load->model('ticket_model');
		
		//Then we call our model's get_showtimes function
		$tickets = $this->ticket_model->get_tickets();

		//If it returns some results we continue
		if ($tickets->num_rows() > 0){
		
			//Prepare the array that will contain the data
			$table = array();	
	
			$table[] = array('Ticket Id','First','Last','Creditcardnumber','Creditcardexpiration','Showtime Id','Seat');
		
		   foreach ($tickets->result() as $row){
				$table[] = array($row->ticket,$row->first,$row->last,$row->creditcardnumber,$row->creditcardexpiration,$row->showtime_id,$row->seat);
		   }
			//Next step is to place our created array into a new array variable, one that we are sending to the view.
			$data['tickets'] = $table; 		   
		}
		
		//Now we are prepared to call the view, passing all the necessary variables inside the $data array
		$data['main']='main/tickets';
		$this->load->view('template', $data);
    }

	function showMovies()
    {
		//First we load the library and the model
		$this->load->library('table');
		$this->load->model('movie_model');
		
		//Then we call our model's get_showtimes function
		$movies = $this->movie_model->get_movies();

		//If it returns some results we continue
		if ($movies->num_rows() > 0){
		
			//Prepare the array that will contain the data
			$table = array();	
	
			$table[] = array('Movie id', 'Title');
		
		   foreach ($movies->result() as $row){
				$table[] = array($row->id,$row->title);
		   }
			//Next step is to place our created array into a new array variable, one that we are sending to the view.
			$data['movies'] = $table; 		   
		}
		
		//Now we are prepared to call the view, passing all the necessary variables inside the $data array
		$data['main']='main/movies';
		$this->load->view('template', $data);
    }
    
	function showTheaters()
    {
		//First we load the library and the model
		$this->load->library('table');
		$this->load->model('theater_model');
		
		//Then we call our model's get_showtimes function
		$theater = $this->theater_model->get_theaters();

		//If it returns some results we continue
		if ($theater->num_rows() > 0){
		
			//Prepare the array that will contain the data
			$table = array();	
	
			$table[] = array('Theater id', 'Name', 'Address');
		
		   foreach ($theater->result() as $row){
				$table[] = array($row->id,$row->name,$row->address);
		   }
			//Next step is to place our created array into a new array variable, one that we are sending to the view.
			$data['theaters'] = $table; 		   
		}
		
		//Now we are prepared to call the view, passing all the necessary variables inside the $data array
		$data['main']='main/theaters';
		$this->load->view('template', $data);
    }
    
    function populate()
    {
	    $this->load->model('movie_model');
	    $this->load->model('theater_model');
	    $this->load->model('showtime_model');
	     
	    $this->movie_model->populate();
	    $this->theater_model->populate();
	    $this->showtime_model->populate();
	     
	    //Then we redirect to the admin page again
	    redirect('../../../admin.php', 'refresh');
	     
    }
    
    function delete()
    {
	    $this->load->model('movie_model');
	    $this->load->model('theater_model');
	    $this->load->model('showtime_model');
    	
	    $this->movie_model->delete();
	    $this->theater_model->delete();
	    $this->showtime_model->delete();
	     
    	//Then we redirect to the admin page again
    	redirect('../../../admin.php', 'refresh');
    
    }
    
    function delete_tickets()
    {
	    $this->load->model('ticket_model');
	    
	    $this->ticket_model->delete();
	//Then we redirect to the index page again
    	redirect('../../../admin.php', 'refresh');
    }
    
    function createTicket()
    {
	  //ccn is creditcardnumber (should be 16 digits), ccex is creditcardexpiration (should be 4 digits)
	  
	  $ccn_digits = strlen((string)$_POST["ccn"]);
	  $ccex_digits = strlen((string)$_POST["ccex"]);
	  
	  if (($ccn_digits == 16) && ($ccex_digits == 4)) {
		  $this->load->model('ticket_model');
		  return $this->ticket_model->add_ticket($_POST["fname"],$_POST["lname"],$_POST["ccn"],$_POST["ccex"],11729,1);
	  }
	  return -1;
	  
    }
    
    function isSeatTaken($showtime_id, $seat)
    {
	  echo 1;
	  $this->load->model('ticket_model');
	  return $this->ticket_model->check_seat($showtime_id, $seat);
    }
    
}


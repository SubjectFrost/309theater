<html>
<script type="text/javascript" src="livevalidation.js"></script>

 
 <head>
  <title>Index</title>
 </head>
 <body>
 <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css" />
<script>
$(function() {
$( "#date" ).datepicker({
showOn: "button",
buttonImage: "uofttheater/images/calendar.gif",
buttonImageOnly: true
 , minDate: +1, maxDate: "+14D"});
});

</script>
 <form action="uofttheater/action.php"  onsubmit="uofttheater/action.php" method="post" id="datepicker">
 <p>Date: <input type="text" id="date" /></p>
 
 <p><input type="submit" value="submit" id="submit"></p>
 <input type="hidden" name = "redirect" VALUE="action.php">
 
 
 </form>
 
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
    
 //First we load the library and the model
		$this->load->library('table');
		$this->load->model('uofttheater/movie_model');
		
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
 ?>
 </body>
 </html>

 
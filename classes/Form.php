<?php
/** ------------------------------------------------------
  * Simple class to organize code into objects           *
  * // Connects to Database // Handels Form //           *
    // Stores Data // Retrieves Data                     *
**/

require_once 'vendor/autoload.php';
Twig_Autoloader::register();

class Form {
	public $db; //db variable (probably don't even need)
	public $id;
	public $jobtitle;
	public $company;
	public $type;
	public $startDate;
	public $qualifications;
	public $description;
	public $email;

	/**
	  * Constructor
	  * Connects to database
	  * @param string $_conn connection to database.
<<<<<<< HEAD
	  * $_conn will be removed if using MySQL
	*/
	public function __construct() {
      //$data = $this->db; //tried to shorten the object 
          //$this->_conn = $_conn;
	
	// $config array handles config settings for mysql.
	$config = array(
	  'host'     => 'internal-db.s42451.gridserver.com',
	  'dbname'   => 'db42451_beaconu',
	  'user'     => 'db42451_insource',
	  'pass'     => 'd3ciPH3r*1' 
	);


    $local = "localhost:9000"; // start local php server at port 9000

    if ($_SERVER['HTTP_HOST'] == $local) {
	     $config = array(
		  'host'     => 'localhost',
		  'dbname'   => 'listings',
		  'user'     => 'root',
		  'pass'     => 'ty12rays' 
		);
    }

	  
     try {
 				
 	    $this->db = new PDO('mysql:host=' . $config['host'] . ';dbname='. $config['dbname'] . ';', $config['user'], $config['pass']) or die('cannot connect to database');
 	 		
 	  } catch(PDOException $e) {
 	    die($e->getMessage());
 	  } 

=======
	*/
	public function __construct($_conn) {
      //$data = $this->db; //tried to shorten the object 
		$this->_conn = $_conn;
    	try {
 				
 				$this->db = new PDO($this->_conn) or die('cannot connect to database');
 	 		
 	 		} catch(PDOException $e) {
 				die($e->getMessage());
 	 		} 
>>>>>>> 25c093bcdad6385d73dcb8a44b94065d42a4b324
	}


	/**
	  * @todo: use singleton pattern for Database?
	  * Above @todo might be unnecessary.
     **/

	/**
	  * Retrieves All Listings from database
	  * @todo: Output data in HTML
	  * echo-ing ins for losers
	**/
	public function getAllData() {


	 $query = $this->db->prepare('SELECT * FROM listings ORDER BY ID DESC');
	 $query->execute();
	 $rows = array();
	 $loader = new Twig_Loader_Filesystem('./templates');
     $twig = new Twig_Environment($loader);

	 if ($query) {
	 	// get all rows
	 	while($row = $query->fetch(PDO::FETCH_ASSOC)) {
	 		 $rows[] = $row;
	 	}

	 	if ($rows) {
	 	  //foreach($rows as $list) {}
		  $template = $twig->loadTemplate('list.phtml');
         echo $template->render(array (
          	'rows' => $rows
          ));


	 	} else {
	 	  // display template if no results.
	 	  $nores = $twig->loadTemplate('nolist.phtml');
	 	  echo $nores->render(array(
	 	  	'rows' => $rows 
	 	  )); 	
	 	}
	 }
	}


 public function retrieveApply() {


	 $query = $this->db->prepare('SELECT * FROM listings ORDER BY ID DESC');
	 $query->execute();
	 $rows = array();
	 $loader = new Twig_Loader_Filesystem('./templates');
     $twig = new Twig_Environment($loader);

	 if ($query) {
	 	// get all rows
	 	while($row = $query->fetch(PDO::FETCH_ASSOC)) {
	 		 $rows[] = $row;

	 		
	 	}

	 	/*if ($rows) {
	 
		  $template = $twig->loadTemplate('apply.phtml');
         echo $template->render(array (
          	'rows'           => $rows
           ));



	 	} else {
	 	  
	 	  $nores = $twig->loadTemplate('nolist.phtml');
	 	  echo $nores->render(array(
	 	  	'rows' => $rows 
	 	  )); 	
	 	}*/
	 }
	}

  /***
    * Retrives ID from DB
    * Purpose -- To get id value to relate apply page to post
  ***/
	public function getId() {
	  $query = $this->db->prepare('SELECT `id ` FROM listings');
	  //$query->execute();
	  $rows = array();

	   $loader = new Twig_Loader_Filesystem('./templates');
     $twig = new Twig_Environment($loader);



     if ($query) {


       if ($rows) {
       	$template = $twig->loadTemplate('apply.phtml');
         echo $template->render(array (
         		'rows' => $rows
         ));
       } else {
       	 $err = $twig->loadTemplate('404.phtml');
       	 echo $err->render();
       }



     }

}	

  /**
  	* Get's only description
  	* Fixes textarea linebreak issue
  	*  
  **/
	public function getDesscription() {
		 $desc = $this->db->prepare('SELECT `description` FROM listings');
	}

	/** 
	  * Stores data in database 
	  * From listings table
	  * 
	**/
	public function storeData() {

<<<<<<< HEAD
      $data = $this->db->prepare('INSERT INTO listings (job_title, company, type, start_date, qualifications, description, email, salaryrange, apply) 
      	                         VALUES (:jobtitle, :company, :type, :start_date, :qualifications, :description, :email, :salaryrange, :apply)');
=======
      $data = $this->db->prepare('INSERT INTO listings (job_title, company, type, start_date, qualifications, description, email, salaryrange) 
      	                         VALUES (:jobtitle, :company, :type, :start_date, :qualifications, :description, :email, :salaryrange)');
>>>>>>> 25c093bcdad6385d73dcb8a44b94065d42a4b324

      $data->bindParam(':jobtitle', $_POST['job-title'], PDO::PARAM_STR);
      $data->bindParam(':company', $_POST['company'], PDO::PARAM_STR);
      $data->bindParam(':type', $_POST['type'], PDO::PARAM_STR);
      $data->bindParam(':start_date', $_POST['date'], PDO::PARAM_STR);
      $data->bindParam(':qualifications', $_POST['qualifications'], PDO::PARAM_STR);
      $data->bindParam(':description', $_POST['description'], PDO::PARAM_STR);
      $data->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
      $data->bindParam(':salaryrange', $_POST['salary'], PDO::PARAM_STR);
<<<<<<< HEAD
      $data->bindParam(':apply', $_POST['apply'], PDO::PARAM_STR); 

      $data->execute() or die($data->errorInfo()); 
	
	}


	public static function email() {
		$to = "tyler@decipherinc.com";
	    $subject = "Job Application";
	    $email = $_POST['apply-email'];
	    $cover = $_POST['cover-letter'];
	    $from = "From: Job Application From Job Board";

	    $body = "From: $email\nSubject: $subject\nMessage: $cover";

                
     if (mail($to, $subject, $body, $from)) { 
      	echo '<p>Message sent successfully!</p>';
      } else {
         echo '<p>Something went wrong</p>';
    	}
	}

=======



      $data->execute();
	
	}

	/**
	  * Removes the data
	**/
	public function removeData() {
		
	}


>>>>>>> 25c093bcdad6385d73dcb8a44b94065d42a4b324
}


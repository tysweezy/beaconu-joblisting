<?php
/** ------------------------------------------------------
  * Simple class to organize code into objects           *
  * // Connects to Database // Handels Form //           *
    // Stores Data // Retrieves Data                     *
**/

class Form {
	protected $db; //db variable (probably don't even need)
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
	*/
	public function __construct($_conn) {
      //$data = $this->db; //tried to shorten the object 
	  $this->_conn = $_conn;
    try {
 		$this->db = new PDO($this->_conn) or die('cannot connect to database');
 	 } catch(PDOException $e) {
 		die($e->getMessage());
 	 } 
	}


	/**
	  * @todo: use singleton pattern for Database?
	  * Above @todo might be unnecessary.
     **/

	/**
	  * Retrieves All Listings from database
	  * @todo: Output data in HTML
	**/
	public function getAllData() {
	 $query = $this->db->prepare('SELECT * FROM listings');
	 $query->execute();
	 $rows = array();

	 if ($query) {
	 	// get all rows
	 	while($row = $query->fetch(PDO::FETCH_ASSOC)) {
	 		$rows[] = $row;
	 	}

	 	if ($rows) {
	 	  foreach($rows as $list) {
	 	  	/*echo '<pre>';
	 	  	print_r($list['company']);
	 	  	echo '</pre>';*/ 

	 	    //output data.
	 	    /**
	 	      * @todo: instead of "echo-ing" the data...use a templating engine.
	 	     **/

 	 	  }
	 	} else {
	 		echo 'No listings avaliable';
	 	}
	 }
	}

	/** 
	  * Stores data in database 
	  * From listings table
	  * 
	**/
	public function storeData() {

      $data = $this->db->prepare('INSERT INTO listings (job_title, company, type, start_date, qualifications, description, email) 
      	                         VALUES (:jobtitle, :company, :type, :start_date, :qualifications, :description, :email)');

      $data->bindParam(':jobtitle', $_POST['job-title'], PDO::PARAM_STR);
      $data->bindParam(':company', $_POST['company'], PDO::PARAM_STR);
      $data->bindParam(':type', $_POST['type'], PDO::PARAM_STR);
      $data->bindParam(':start_date', $_POST['date'], PDO::PARAM_STR);
      $data->bindParam(':qualifications', $_POST['qualifications'], PDO::PARAM_STR);
      $data->bindParam(':description', $_POST['description'], PDO::PARAM_STR);
      $data->bindParam(':email', $_POST['email'], PDO::PARAM_STR);



      $data->execute();
	
	}

	/**
	  * Removes the data
	**/
	public function removeData() {

	}
}

<?php

require_once 'classes/Form.php';

require 'vendor/autoload.php';

$job = new \Slim\Slim();

$job->config(array(
	'templates.path' => __DIR__
));

$job->get('/', function() use ($job) {
	$job->render('listings.php');
});

$job->get('/postjob', function() use ($job)  {
	$job->render('postjob.php');
});

$job->get('/apply/:id', function($id) use($job) {
	//echo "Apply"; 
	$form = new Form('sqlite:data/listings.db');
	$job->render('apply.php');
 

	 $query = $form->db->prepare('SELECT * FROM listings ORDER BY ID DESC');
	 $query->execute();
	 $rows = array();

	    while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
       	 $rows[] = $row;
       }


    if($rows) {
    	foreach ($rows as $row) {
    		if ($id == $row['id']) {
    			
    			echo '<div class="container">';
    			echo $row['company'];
    			echo '</div>';

    			// Load a template??
    		}
    	}
    }

});


$job->config('debug', true);

$job->run();

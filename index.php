<?php

<<<<<<< HEAD
error_reporting(0);


=======
>>>>>>> 25c093bcdad6385d73dcb8a44b94065d42a4b324
require_once 'classes/Form.php';

require 'vendor/autoload.php';

<<<<<<< HEAD
use Slim\Slim;

$form = new Form();

=======
>>>>>>> 25c093bcdad6385d73dcb8a44b94065d42a4b324
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
<<<<<<< HEAD

	$job->render('apply.php');

});

$job->post('/apply/:id', function($id) use ($job) {
        $job->render('apply.php');
});

$job->delete('/apply/:id', function($id) use ($form, $job){
 	$sth = $form->db->prepare('DELETE FROM listings WHERE id = ?;');
 	$sth->execute(intval($id));
});

$job->put('/apply/:id', function($id) use ($form) {

	$request = Slim::getInstance()->request();
	$body = $request->getBody();
	$list = json_decode($body);

	echo $list;

	$sql = "UPDATE listings SET job_title=:title, company=:company, type=:type, start_date=:start_date, qualifications=:qualifications, description=:description, 
								email=:email, salaryrange=:salaryrange, apply=:apply WHERE id = ?;";

	$stmt = $form->db->prepare($sql);
	$stmt->bindParam('title', $list->job_title);
	$stmt->bindParam(':company', $list->company);
	$stmt->bindParam('type', $list->type);
	$stmt->bindParam('start_date', $list->start_date);
	$stmt->bindParam('qualifications', $list->qualifications);
	$stmt->bindParam('description', $list->description);
	$stmt->bindParam('email', $list->email);
	$stmt->bindParam('salaryrange', $list->salaryrange);
	$stmt->bindParam('apply', $list->apply);

	$stmt->execute();
});

$job->get('/update/:id', function($id) use ($job) {
  echo $id;
  $job->render('update.php');
});


$job->config('debug', false);
=======
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

>>>>>>> 25c093bcdad6385d73dcb8a44b94065d42a4b324
$job->run();

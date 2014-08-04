<?php

error_reporting(0);


require_once 'classes/Form.php';

require 'vendor/autoload.php';

use Slim\Slim;

$form = new Form();

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
$job->run();

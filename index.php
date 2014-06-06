<?php

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

/*$job->get('/apply', function() use($job) {
	echo "apply";
});*/


$job->config('debug', true);

$job->run();

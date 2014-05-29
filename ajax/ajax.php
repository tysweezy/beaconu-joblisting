<?php
require_once '../classes/Form.php';

$errors = array();
$data = array();


if (empty($_POST['job-title'])) {
	$errors['job_title'] = "Job title required";
	$errors['time'] = time();
}

if (empty($_POST['company'])) {
	$errors['company'] = "Company required";
}

if (empty($_POST['email'])) {
	$errors['email'] = "Email required";
}

if (!empty($errors)) {
	$data['success'] = false;
	$data['errors'] = $errors;
} else {

  	$form = new Form('sqlite:../data/listings.db'); 
	$post = $form->storeData();
	return $post;

	$data['success'] = true;
	$data['message'] = 'Success';

  
}


echo json_encode($data);

?>
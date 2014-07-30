<?php

require_once 'classes/Form.php';

$form = new Form();

/*if (isset($_POST['del_post']) && strlen($_POST['del_post'])>0 &&  is_numeric($_POST['del_post'])) {
	$idToDelete = filter_var($_POST['del_post'], FILTER_SANITIZE_NUMBER_INT);

	$del_row = $form->db->prepare("DELETE FROM listings WHERE id=".$idToDelete) or die("error");
	$del_row->execute();
}*/


$del_row = $form->db->prepare("DELETE FROM listings WHERE id = 2");
$del_row->execute();  
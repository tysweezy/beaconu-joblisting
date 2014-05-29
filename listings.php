<?php
/**
  * Will possible load template here
 **/

require_once 'classes/Form.php';
//loading twig and composer dependencies
require_once 'vendor/autoload.php';

$form = new Form('sqlite:data/listings.db');
$form->getAllData();


?>



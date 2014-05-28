<?php




$db = new PDO('sqlite:listings.db') or die('cannot connect to db');
$query = $db->prepare("SELECT * FROM listings");
$query->execute();






/*if ($query->fetch()) {

} else {
	echo 'no listings avaliable';
}*/

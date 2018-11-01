<?php
 

function check_username ($username)
{
	global $pdo;

	$stmt = $pdo->query("SELECT count(id) FROM users where username = '".$_POST['username']."'")->fetch();
	if($stmt['count(id)'] != 0 )
		return true;
	else return false;
}

?>

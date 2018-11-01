<?php 
include 'header.php';

if(!isset($_SESSION['username']))
	header('Location: login.php');


echo "HI ".$_SESSION['id'];
include 'footer.php';

 ?>
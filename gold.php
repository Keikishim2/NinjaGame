<?php
session_start();
date_default_timezone_set('Asia/Manila');

if(isset($_POST['building']) && $_POST['building'] == 'farm')
{
	$gold = rand(10,20);
	$_SESSION['gold'] += $gold;
	$_SESSION['activities'][] = array(
		'gold' => $gold,
		'location' => 'farm',
		'time'=> date("F jS Y g:i a")
		);
}

if(isset($_POST['building']) && $_POST['building'] == 'cave')
{
	$gold = rand(5,10);
	$_SESSION['gold'] += $gold;
	$_SESSION['activities'][] = array(
		'gold' => $gold,
		'location' => 'cave',
		'time'=> date("F jS Y g:i a")
		);
}
if(isset($_POST['building']) && $_POST['building'] == 'house')
{
	$gold = rand(2,5);
	$_SESSION['gold'] += $gold;
	$_SESSION['activities'][] = array(
		'gold' => $gold,
		'location' => 'house',
		'time'=> date("F jS Y g:i a")
		);
}
if(isset($_POST['building']) && $_POST['building'] == 'casino')
{
	$gold = rand(-50,50);
	$_SESSION['gold'] += $gold;
	$_SESSION['activities'][] = array(
		'gold' => $gold,
		'location' => 'casino',
		'time'=> date("F jS Y g:i a")
		);
}

if(isset($_POST['reset']) && $_POST['reset'] == 'clear')
{
	session_destroy();
}
header('Location: ninja.php');
?>
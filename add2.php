<?php
session_start();
	if(!isset($_SESSION['user']['ID'])){
		header("Location: index.html");
		exit();
	}

// Gets data from URL parameters
$name = $_GET['name'];
$web = $_GET['web'];
$num = $_GET['num'];
$mem = $_GET['mem'];
$in = $_GET['in'];
$out = $_GET['out'];
$room = $_GET['room'];
$id=$_SESSION['user']['ID'];
$mname=$_SESSION['user']['Name'];

// Opens a connection to a MySQL server
$connection=mysql_connect ("localhost", "root", "");
if (!$connection) {
  die('Not connected : ' . mysql_error());
}

// Set the active MySQL database
$db_selected = mysql_select_db("locate", $connection);
if (!$db_selected) {
  die ('Can\'t use db : ' . mysql_error());
}

// Insert new row with user data
$query = $strQuery="insert into hotel set name='$name',
										mname='$mname',
										web='$web',
										checkIn='$in',
										checkOut='$out',
										member='$id',
										room='$room',
										num='$num'";

$result = mysql_query($query);


if (!$result) {
  die('Invalid query: ' . mysql_error());
}


?>
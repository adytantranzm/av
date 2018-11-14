<?php

include 'php/config.php';
$conn = pg_connect($conn_string);
if(!$conn)
{
	echo "ERROR : Unable to open database";
	exit;
}

if($_SESSION['user']!='')
{	
	$sess_qry = "SELECT * FROM admininfo WHERE emailid='" . $_SESSION["emailid"] . "'";
	$sess_res = pg_query($conn, $sess_qry);
	$sess_row = pg_fetch_array($sess_res);

	if ($sess_row['sessionid'] != session_id())
	{
		$_SESSION['errormessage'] = "You have logged in from some other location.";
		header('Location: logoutsession.php');
		exit;
	}
}
?>

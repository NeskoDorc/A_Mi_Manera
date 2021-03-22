<?php
	session_start();

	if (!isset($_SESSION['lang']))
	$_SESSION['lang'] = "rs";
else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])) {
	if ($_GET['lang'] == "rs")
		$_SESSION['lang'] = "rs";
	else if ($_GET['lang'] == "en")
		$_SESSION['lang'] = "en";
}
	require_once "languages/" . $_SESSION['lang'] . ".php";
?>


<!-- 
if (!isset($_SESSION['lang']))
		$_SESSION['lang'] = "rs";
	else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])) {
		if ($_GET['lang'] == "rs")
			$_SESSION['lang'] = "rs";
		else if ($_GET['lang'] == "de")
			$_SESSION['lang'] = "de";
	} -->
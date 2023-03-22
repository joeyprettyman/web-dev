<?php
/**
 * @brief		Public bootstrap
 * @author		<a href='https://www.invisioncommunity.com'>Invision Power Services, Inc.</a>
 * @copyright	(c) Invision Power Services, Inc.
 * @license		https://www.invisioncommunity.com/legal/standards/
 * @package		Invision Community
 * @since		18 Feb 2013
 */ 

error_reporting(-1);
#\define('REPORT_EXCEPTIONS', TRUE);
#$_SERVER['SCRIPT_FILENAME']	= __FILE__;
#require_once 'initialize.php';
#\JoeyPrettyman\Dispatcher\Front::i()->run();

?>


<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="utf-8">
	<title>JoeyPrettyman.com</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="./styles/stylesheet.css">
</head>

<body>
	<span id='blue'>Font-Family: </span>
	<span id='orange'>Times New Roman</span><span id='white'>;</span><br>

	<span id='blue'>color: </span>
	<span id='orange'>#ff0000</span><span id='white'>;</span><br>
</body>

</html>
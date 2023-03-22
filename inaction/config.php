<?php

	// Login Details
	$username	= 'username';
	$password	= 'password';
	$hostname	= 'hostname';
	$database	= 'database';
	
	$mysqli = new mysqli( $hostname, $username, $password, $database );

	$volume = '180';


	function getCurrentVolume() {
		global $volume;
		global $mysqli;
		
		$query = "SELECT `volume-number` FROM `volumes` WHERE `volume-number` = " . $volume;

		$result = $mysqli->query( $query );

		/* fetch object array */
		while ( $row = $result->fetch_row() ) {
			printf( $row[0] );
		}
	}

	function getCurrentMonth() {
		global $volume;
		global $mysqli;

		$query = "SELECT `month` FROM `volumes` WHERE `volume-number` = " . $volume;

		$result = $mysqli->query( $query );

		/* fetch object array */
		while ( $row = $result->fetch_row() ) {
			printf( $row[0] );
		}
	}

	function getCurrentYear() {
		global $volume;
		global $mysqli;

		$query = "SELECT `year` FROM `volumes` WHERE `volume-number` = " . $volume;

		$result = $mysqli->query( $query );

		/* fetch object array */
		while ( $row = $result->fetch_row() ) {
			printf( $row[0] );
		}
	}

	function getArticles() {
		global $volume;
		global $mysqli;

		$query = "SELECT * FROM `articles` WHERE `volume-number` = " . $volume . " ORDER BY `article-id` DESC LIMIT 4";

		$result = $mysqli->query( $query );

		/* fetch object array */
		while ( $row = $result->fetch_row() ) {
			printf( "<div class='position-left text-left' id='main-article-header'>" );
			printf( $row[3] );
			printf( "</div>" );
			printf( "<div class='position-left text-left' id='main-article-content'>" );
			printf( "<img src='" . $row[9] . "'>" );
			printf( $row[5] );
			printf( "<p><a href='#' class='' id='' title=''>" . $row[8] . "</a></p>" );
			printf( "</div>" );
		}
	}

	function getSideLinks() {
		global $volume;
		global $mysqli;

		$query = "SELECT * FROM `articles` WHERE `volume-number` = " . $volume . " ORDER BY `article-id` DESC LIMIT 4";

		$result = $mysqli->query( $query );
		printf( "<div class='position-left text-left' id='side-menu-links'>" );
		/* fetch object array */
		while ( $row = $result->fetch_row() ) {
			printf( "<a href='#' class='' id='' title=''>" );
			printf( $row[4] );
			printf( "</a>" );
		}
		printf( "</div>" );
	}

?>
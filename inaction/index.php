<?php
    error_reporting( -1 );
	mysqli_report( MYSQLI_REPORT_OFF );
    require_once 'config.php';
    require_once './classes/text.php';
?>

<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Page Information -->
    <title>Website - Title</title>

    <!-- Meta Information -->
	<meta name="description" content="Welcome to the <site name here> homepage!">
	<meta name="keywords" content="Website, Web Design, Web Programming">
	
    <!-- Additional Meta Information -->
	<meta property="og:site_name" content="Website - Title">
	<meta property="og:title" content="Abstract's Mineacraft Server" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://www.google.com" />
	<meta property="og:image" content="https://www.google.com/page/thumbnail/screenshot.png" />
	<meta property="og:description" content="Welcome to the <site name here> homepage!" />

    <!-- Twitter Settings -->
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:domain" content="Google.com"/>
    <meta name="twitter:title" property="og:title" itemprop="name" content="Site Name - Some catchy tag line here about the site." />
    <meta name="twitter:description" property="og:description" itemprop="description" content="Welcome to the <site name here> homepage!" />

	<!-- Include this to make the og:image larger -->
	<meta name="twitter:card" content="summary_large_image">

    <!-- Search Engine Settings -->
    <link rel="search" type="application/opensearchdescription+xml" title="Stack Overflow" href="/opensearch.xml">

    <!-- Feeds -->
    <link rel="alternate" type="application/atom+xml" title="Feed of recent questions" href="/feeds">

    <!-- Favicon Settings -->
    <link rel="shortcut icon" href="./icons/favicon.ico">
    <link rel="apple-touch-icon" href="./icons/apple-touch-icon.png">
    <link rel="image_src" href="./icons/apple-touch-icon.png">

    <!-- Stylesheets -->
    <link rel='stylesheet' href='./themes/default/reset.css' media='all'>
    <link rel='stylesheet' href='./themes/default/styles.css' media='all'>
    <link rel='stylesheet' href='./themes/default/grid.css' media='all'>

    <!-- Theme Color -->
	<meta name="theme-color" content="#FFFFFF">

    <!-- Pre Connections -->
    <link rel="preconnect" href="https://example.com">

    <!-- Pre Loads -->
    <link rel="preload" href="./style.css" as="style">
    <link rel="preload" href="./main.js" as="script">

    <!-- Page Scripts -->
    <script id="webpack-public-path" type="text/uri-list">https://cdn.sstatic.net/</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>

<body>
    <div class='position-center' id='page'>
	
		<div class='position-left text-left' id='header'>
			<!-- Logo -->
			<div class='position-left text-left' id='logo'>
				<img src='./themes/default/imgs/rn-logo.png'>
			</div>
			
			<div class='position-right right-text' id='right-content'>
			
				<!-- Archives Link -->
				<div class='position-right text-right' id='archives'>
					
					<!-- Image -->
					<img src='https://roughnotes.com/in_action/images/login.png'>
					
					<!-- Link -->
					<a href='' class='' id='' title=''>
						IN-Action Archived Past Issues
					</a>
					
				</div>
				
				<!-- Volume -->
				<div class='position-right text-right' id='volume'>
					Volume <?php getCurrentVolume(); ?>
				</div>
				
				<!-- Date -->
				<div class='position-right text-right' id='date'>
					<?php getCurrentMonth(); ?> <?php getCurrentYear(); ?>
				</div>
				
			</div>
				
			<!-- Something -->
			<div class='position-left text-left' id='side-menu'>
				<!-- Side Menu Header -->
				<div class='position-left text-left' id='side-menu-header'>
					<img src='https://roughnotes.com/in_action/images/mail-envelope.jpg'>
					<div class='position-left text-left' id='side-menu-title'>In This Issue</div>
				</div>
				
				<!-- Side Menu Links -->
				<?php getSideLinks(); ?>
				
				
				<!-- Side Menu Header -->
				<div class='position-left text-left' id='side-menu-header'>
					<img src='https://roughnotes.com/in_action/images/news.png'>
					<div class='position-left text-left' id='side-menu-title'>Recent Rough Notes Updates</div>
				</div>
				
				<!-- Side Menu Links -->
				<div class='position-left text-left' id='side-menu-links'>
					We regularly add to and/or update our products. Regardless of any added information, it's always worthwhile to examine what is available via PF&M, Insurance Words, and E-marketing for Agencies. Have you taken a good look at Gordis on Insurance? The latest edition includes a new section that discusses newer risks faced by commercial and personal customers.
				</div>
				
				
				<!-- Side Menu Header -->
				<div class='position-left text-left' id='side-menu-header'>
					<img src='https://roughnotes.com/in_action/images/forward-email.png'>
					<div class='position-left text-left' id='side-menu-title'>Feedback?</div>
				</div>
				
				<!-- Side Menu Links -->
				<div class='position-left text-left' id='side-menu-links'>
					Have you found what you need in RoughNotes-Pro or RoughNotes Advantage? Is there a classification to add to the Producer's Commercial Lines Risk Evaluation System or a subject you would like to see covered in PF&M? <br>
					<a href='#' class='' id='' title=''>Contact us now.</a>
				</div>
				
				
				<!-- Side Menu Header -->
				<div class='position-left text-left' id='side-menu-header'>
					<img src='https://roughnotes.com/in_action/images/forward-email.png'>
					<div class='position-left text-left' id='side-menu-title'>Forward</div>
				</div>
				
				<!-- Side Menu Links -->
				<div class='position-left text-left' id='side-menu-links'>
					<a href='#' class='' id='' title=''>Forward this In Action to a colleague or friend.</a>
				</div>
				
				
				<!-- Side Menu Header -->
				<div class='position-left text-left' id='side-menu-header'>
					<img src='https://roughnotes.com/in_action/images/forward-email.png'>
					<div class='position-left text-left' id='side-menu-title'>Subscribe</div>
				</div>
				
				<!-- Side Menu Links -->
				<div class='position-left text-left' id='side-menu-links'>
					<a href='#' class='' id='' title=''>Subscribe now for In Action updates - FREE!</a>
				</div>
			</div>
			
			<!-- Something -->
			<div class='position-left text-left' id='main-article'>
				<?php getArticles(); ?>
			</div>
			
			
			
			<div class='position-center text-center' id='footer'>
				<p>
					The Rough Notes Company, Inc. - 11690 Technology Dr., Carmel, IN 46032-5600. Ph (800) 428-4384
				</p>

				<p>
					Don’t want to receive these emails anymore? You can <a href='#' class='' id='' title=''>unsubscribe</a>
				</p>
					
				<p>
					© Copyright 2021
				</p>
			</div>
		</div>
	</div>
</body>
</html>
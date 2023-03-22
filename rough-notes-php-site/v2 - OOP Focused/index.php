<?php
    // No Errors
    // error_reporting( 0 );

    // All Errors
    session_start();
    error_reporting( -1 );
    require_once 'config.php';
    require_once 'initialize.php';
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
    <!-- MAIN AREA -->
    <main class='' id=''>

        <!-- HEADER -->
        <header class='' id=''>
            Header
        </header>

        <!-- NAVIGATION -->
        <nav class='' id=''>
            Navigation
        </nav>

        <!-- ARTICLE -->
        <article class='' id=''>
            <p>
                Paragraph.
            </p>
        </article>

        <!-- ASIDE -->
        <aside class='' id=''>
            Aside
        </aside>

        <div class='left text-left'>Left</div>
        <div class='left text-center'>Center</div>
        <div class='left text-right'>Right</div>

        <div class='center text-left'>Left</div>
        <div class='center text-center'>Center</div>
        <div class='center text-right'>Right</div>

        <div class='right text-left'>Left</div>
        <div class='right text-center'>Center</div>
        <div class='right text-right'>Right</div>

        <?php
            print_r( $_SESSION );
        ?>


        <!-- FOOTER -->
        <footer class='' id=''>
            Footer
        </footer>

    </main>
</body>
</html>
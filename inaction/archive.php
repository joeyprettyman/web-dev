<?php
    error_reporting( -1 );
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
			
				&nbsp;
				
			</div>
				
			<!-- Something -->
			<div class='position-left text-left' id='side-menu'>
				<!-- Side Menu Header -->
				<div class='position-left text-left' id='side-menu-header'>
					<div class='' id=''>In-Action Archives</div>
				</div>
				
				<!-- Side Menu Links -->
				<div class='position-left text-left' id='side-menu-links'>
					<a href='' class='' id='' title=''>2007 Archives</a>
					<a href='' class='' id='' title=''>2008 Archives</a>
					<a href='' class='' id='' title=''>2009 Archives</a>
					<a href='' class='' id='' title=''>2010 Archives</a>
					<a href='' class='' id='' title=''>2011 Archives</a>
					<a href='' class='' id='' title=''>2012 Archives</a>
					<a href='' class='' id='' title=''>2013 Archives</a>
					<a href='' class='' id='' title=''>2014 Archives</a>
					<a href='' class='' id='' title=''>2015 Archives</a>
					<a href='' class='' id='' title=''>2016 Archives</a>
					<a href='' class='' id='' title=''>2017 Archives</a>
					<a href='' class='' id='' title=''>2018 Archives</a>
					<a href='' class='' id='' title=''>2019 Archives</a>
					<a href='' class='' id='' title=''>2020 Archives</a>
				</div>
			</div>
			
			<!-- Something -->
			<div class='position-left text-left' id='main-article'>
				<div class='position-left text-left' id='main-article-header'>
					November 2021, Volume 179
				</div>
				
				<div class='position-left text-left' id='main-article-content'>
					<ul>
						<li>Permission? It's Important!</li>
						<li>Look To The Policy!</li>
						<li>There's A Way To Know More About Drivers</li>
						<li>Manage That Youthful Exposure</li>
					</ul>
				</div>
				
				
				
				<div class='position-left text-left' id='main-article-header'>
					October 2021, Volume 178
				</div>
				
				<div class='position-left text-left' id='main-article-content'>
					<ul>
						<li>Agreements Often Mean Obligations</li>
						<li>Only Some Are Covered</li>
						<li>Additional Risks May be Assumed</li>
						<li>There Are Reasons For Limiting Coverage</li>
					</ul>
				</div>
				
				
				
				<div class='position-left text-left' id='main-article-header'>
					September 2021, Volume 177
				</div>
				
				<div class='position-left text-left' id='main-article-content'>
					<ul>
						<li>Those Who Cause Losses Must Be Accountable</li>
						<li>Coverage Decisions Must Rest On Relevant Points</li>
						<li>Insurable Interest Is More Important Than Purchase Details</li>
						<li>Sometimes Insurers Forget What's Important</li>
					</ul>
				</div>
				
				
				
				<div class='position-left text-left' id='main-article-header'>
					August 2021, Volume 176
				</div>
				
				<div class='position-left text-left' id='main-article-content'>
					<ul>
						<li>An Unenviable Driving Situation</li>
						<li>Personally, We Cover These Cars</li>
						<li>That's Not The Commercial Approach</li>
						<li>Seeking Operational Information Is Rewarding</li>
					</ul>
				</div>
				
				
				
				<div class='position-left text-left' id='main-article-header'>
					July 2021, Volume 175
				</div>
				
				<div class='position-left text-left' id='main-article-content'>
					<ul>
						<li>This Isn't Favorite Client Behavior</li>
						<li>We All Need To Be Clear About Our Stuff!</li>
						<li>With Greater Coverage Comes Greater Responsibility</li>
						<li>Assessment Is Critically Important</li>
					</ul>
				</div>
				
				
				
				<div class='position-left text-left' id='main-article-header'>
					June 2021, Volume 174
				</div>
				
				<div class='position-left text-left' id='main-article-content'>
					<ul>
						<li>No One Wants A Repugnant Situation</li>
						<li>Guarding Against Insurance Overpayments</li>
						<li>How "Other Insurance" Provisions May Be Applied</li>
						<li>It's Best To Manage Client Expectations</li>
					</ul>
				</div>
				
				
				
				<div class='position-left text-left' id='main-article-header'>
					May 2021, Volume 173
				</div>
				
				<div class='position-left text-left' id='main-article-content'>
					<ul>
						<li>Get On the Same Page for Settling Losses</li>
						<li>Don't Keep Anyone Guessing</li>
						<li>Educate Your Clients</li>
						<li>Understanding Insurance Makes Us All Winners</li>
					</ul>
				</div>
				
				
				
				<div class='position-left text-left' id='main-article-header'>
					April 2021, Volume 172
				</div>
				
				<div class='position-left text-left' id='main-article-content'>
					<ul>
						<li>Don't Assume That Exposures Are Simple</li>
						<li>Align The "Who" With the "How"</li>
						<li>Named Insured Description, Please</li>
						<li>What Is Your Narrative?</li>
					</ul>
				</div>
				
				
				
				<div class='position-left text-left' id='main-article-header'>
					March 2021, Volume 171
				</div>
				
				<div class='position-left text-left' id='main-article-content'>
					<ul>
						<li>That Lack of Coverage is Criminal</li>
						<li>Losing With Certain Losses</li>
						<li>An Increasingly Troublesome Exposure</li>
						<li>Vigilance in Risk Mitigation</li>
					</ul>
				</div>
				
				
				
				<div class='position-left text-left' id='main-article-header'>
					February 2021, Volume 170
				</div>
				
				<div class='position-left text-left' id='main-article-content'>
					<ul>
						<li>There Must Be Tangible Damage</li>
						<li>Not All Interruptions Are Eligible</li>
						<li>Protection Has Its Limits</li>
						<li>Reinforcing Exposures Faced By A Business</li>
					</ul>
				</div>
				
				
				
				<div class='position-left text-left' id='main-article-header'>
					January 2021, Volume 169
				</div>
				
				<div class='position-left text-left' id='main-article-content'>
					<ul>
						<li>Unknown May Not Mean Uncovered</li>
						<li>Can We Get Some Agreement?</li>
						<li>Trust Is Essential</li>
						<li>This Is Taking Time</li>
					</ul>
				</div>
				
				
				
				
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
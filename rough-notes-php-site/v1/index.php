<?php
    error_reporting( 0 );
    require_once 'config.php';
?>

<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<head>
    <!-- Main Settings -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0">
    <title>Sign In</title>

    <!-- Stylesheets -->
    <link rel='stylesheet' href='https://www.joeyprettyman.com/rn/themes/default/styles.css' media='all'>
    <link rel='stylesheet' href='https://www.joeyprettyman.com/rn/themes/default/grid.css' media='all'>
    <link rel='stylesheet' href='https://www.joeyprettyman.com/rn/themes/default/fa/css/all.css' media='all'>

    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <!-- Favicon Settings -->
    <link rel="shortcut icon" href="https://cdn.sstatic.net/Sites/stackoverflow/Img/favicon.ico?v=ec617d715196">
    <link rel="apple-touch-icon" href="https://cdn.sstatic.net/Sites/stackoverflow/Img/apple-touch-icon.png?v=c78bd457575a">
    <link rel="image_src" href="https://cdn.sstatic.net/Sites/stackoverflow/Img/apple-touch-icon.png?v=c78bd457575a"> 

    <!-- Search Engine Settings -->
    <link rel="search" type="application/opensearchdescription+xml" title="Stack Overflow" href="/opensearch.xml">

    <!-- Meta Description -->
    <meta name="description" content="Stack Overflow is the largest, most trusted online community for developers to learn, share&#x200B; &#x200B;their programming &#x200B;knowledge, and build their careers."/>

    <!-- Share Settings -->
    <meta property="og:type" content= "website" />
    <meta property="og:url" content="https://stackoverflow.com/"/>
    <meta property="og:site_name" content="Stack Overflow" />
    <meta property="og:image" itemprop="image primaryImageOfPage" content="https://cdn.sstatic.net/Sites/stackoverflow/Img/apple-touch-icon@2.png?v=73d79a89bded" />

    <!-- Twitter Settings -->
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:domain" content="stackoverflow.com"/>
    <meta name="twitter:title" property="og:title" itemprop="name" content="Stack Overflow - Where Developers Learn, Share, &amp; Build Careers" />
    <meta name="twitter:description" property="og:description" itemprop="description" content="Stack Overflow | The World&#x2019;s Largest Online Community for Developers" />

    <!-- Page Scripts -->
    <script id="webpack-public-path" type="text/uri-list">https://cdn.sstatic.net/</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <link rel="alternate" type="application/atom+xml" title="Feed of recent questions" href="/feeds">
</head>
<body>

    <?php
        require_once 'initiate.php';
        /* ROUGHNOTES\CORE::init(); */
    ?>

    <div id="grid"></div>

    <!-- Page Ending Scripts -->
    <script src="https://www.joeyprettyman.com/rn/scripts/grid.js"></script>
</body>

<script type='text/javascript'>
    // Close Login Hero
    var loginButton = document.getElementsByClassName( 'exit-hidden' )[0];
    loginButton.addEventListener( 'click', function() {

        document.getElementsByClassName( 'hero' )[0].style.display = 'none';

    });

    // Expand / Collapse Links
    var linksExpandCollapse = document.getElementsByClassName( 'exit-hidden' )[1];
    linksExpandCollapse.addEventListener( 'click', function() {

        var linksMenu = document.getElementsByClassName( 'hidden-sub-menu-wrapper-links' )[0];
        var h1s = document.getElementsByClassName( 'right-content' )[0].children[3];

        // if unused display collapse icon...
        if( linksMenu.style.display == '' ) {
            document.getElementsByClassName( 'exit-hidden' )[1].innerHTML ='Menu <i class="fas fa-plus-square"></i>';

            h1s.style.paddingTop = '50px';
            linksMenu.style.display = 'none';
        }

        // if unused display collapse icon...
        else if( linksMenu.style.display == 'none' ) {
            
            document.getElementsByClassName( 'exit-hidden' )[1].innerHTML ='Menu <i class="fas fa-minus-square"></i>';

            h1s.style.paddingTop = '0px';
            linksMenu.style.display = 'flex';
        }

        else {
            document.getElementsByClassName( 'exit-hidden' )[1].innerHTML ='Menu <i class="fas fa-plus-square"></i>';

            h1s.style.paddingTop = '50px';
            linksMenu.style.display = 'none';
        }

    });

    // Miami Vice
    var miamiVice = document.getElementById( 'title' );
    var title = miamiVice.innerText.replace(/\s/g, '');

    miamiVice.addEventListener( 'click', function() {



        var customAttribute = document.body.getElementsByClassName( 'main-menu' )[0];
        var viceStatus = customAttribute.getAttribute( 'miamiVice' );

        console.log( 'VICE STATUS: ' + viceStatus );

        if( viceStatus == null ) {
            customAttribute.setAttribute( 'miamiVice', 'activated' );
            document.body.getElementsByClassName( 'main-menu' )[0].style.background = 'linear-gradient(180deg, rgba(47,49,144,1) 0%, rgba(93,60,151,1) 25%, rgba(226,51,146,1) 50%, rgba(241,81,87,1) 75%, rgba(252,193,122,1) 100%)';
        }

        else if( viceStatus != 'activated' ) {
            customAttribute.setAttribute( 'miamiVice', 'activated' );
            document.body.getElementsByClassName( 'main-menu' )[0].style.background = 'linear-gradient(180deg, rgba(47,49,144,1) 0%, rgba(93,60,151,1) 25%, rgba(226,51,146,1) 50%, rgba(241,81,87,1) 75%, rgba(252,193,122,1) 100%)';
        }

        else {
            customAttribute.setAttribute( 'miamiVice', '' );
            document.body.getElementsByClassName( 'main-menu' )[0].style.background = 'linear-gradient(180deg, rgba(144,0,40,1) 0%, rgba(187,0,105,1) 100%)';
        }
    });
</script>
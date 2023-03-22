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
    <link rel='stylesheet' href='./themes/default/styles.css' media='all'>
    <link rel='stylesheet' href='./themes/default/grid.css' media='all'>
    <link rel='stylesheet' href='./themes/default/fa/css/all.css' media='all'>

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
    <script src="./scripts/grid.js"></script>
</body>
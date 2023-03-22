<?php

include 'config.php'

?>
<!DOCTYPE html>
<head>
    <title> <?php echo $website_name; ?> </title>
    <link rel="stylesheet" href="./styles/stylesheet.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
</head>
<body> <?php echo $header; ?> <?php echo $carousel; ?> <div class="content">
        <div class="wrapper">
            <div id="col0">
                <div id="article">
                    <div id="title"> Contact Me </div>
                    <div id="description"> Here is a way to get in contact with me. </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
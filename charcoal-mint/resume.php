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
                    <div id="title"> Resum&eacute; </div>
                    <div id="description"> This is my resum&eacute; page. </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
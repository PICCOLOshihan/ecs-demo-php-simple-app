<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>ECS DEMO</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <style>body {margin-top: 40px; background-color: #333;}</style>
        <link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet">
        <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    </head>

    <body>
        <div class="container">
            <div class="hero-unit">
                <h1>Hello Patrick</h1>
                <h2>This is a simple PHP App running on ECS with continuous integration/delivery</h2>
                <p>The container is running PHP version <?php echo phpversion(); ?>.</p>
                <?php
                        $myfile = fopen("/var/www/my-vol/date", "r") or die("");
                        echo fread($myfile,filesize("/var/www/my-vol/date"));
                        fclose($myfile);
                ?>
            </div>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <video width="600" height="400" controls>
            <source src=" https://afc5b178d82c2f868c0a8cd8f6891c10.egress.mediapackage-vod.us-east-1.amazonaws.com/out/v1/c4c735c1682c40ae9b2623a5f1d8731d/7d88e9be0d58477e9b8a835a2c6bea40/7f6fba9fad5b4bf680fdab90f76202cb/index.m3u8" type="application/x-mpegURL">
        </video>
    </body>

</html>

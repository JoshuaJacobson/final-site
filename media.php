<?php
$mobile = $_GET["mobile"];
$w = $_GET["w"];
$h = $_GET["h"];
require 'resources.php';
?>
<html lang="en-US">
<head>
    <title>Social Media Panels</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="stylesheet" type="text/css" href="global.css">
    <link rel="stylesheet" type="text/css" href="media.css">
    <script type="text/javascript" src="scripts.js"></script>
    <!--<script type="text/javascript" src="navigation.js"></script>-->
</head>

<body onload="onLoad()">
<h1 id="Logo_wrapper">
    <img src="resources/connectors_lightgreen.png" id="Logo">
    Social Media Panels</h1>
<p>
    <a href="index.php">Return to homepage</a>
</p>
<hr>
<iframe width="<?php echo $w / 4;?>" height="<?php echo $h;?>" src="https://www.youtube.com/embed/videoseries?list=PLsbcL77523Irz3_URPufmC9hRFFnm6Rcc" frameborder="0" allowfullscreen></iframe>
<div class="inlineBlock">
    <a class="twitter-timeline" data-width="<?php echo $w / 4;?>" data-height="<?php echo $h;?>" data-dnt="true" href="https://twitter.com/Team5086">Tweets by Team5086</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
</div>
<div class="inlineBlock">
    <a data-pin-do="embedBoard" data-pin-board-width="<?php echo $w / 2;?>" data-pin-scale-height="<?php echo ($h / 16) * 14.125;?>" data-pin-scale-width="<?php echo $w / 4;?>" href="https://www.pinterest.com/team5086/Site-Showcase"></a>
</div>
<iframe src="//users.instush.com/side-bar/?rows=6&round=true&circle=true&pin=true&user_id=4221317759&username=team5086&sid=-1&susername=-1&tag=-1&stype=mine&t=999999NiPfGDV8LkTVQ_2nLNuxmBeS27zyUrv15Iih-8lYThmn5Sl2b-yaitK-k-_5YVclouFDHhAdcHE" allowtransparency="true" frameborder="0" scrolling="no"  style="display:inline-block;width: auto;height:<?php echo $h;?>px;border:none;overflow:visible;" ></iframe>

<script async defer src="//assets.pinterest.com/js/pinit.js"></script>
<?php
resources::footer();
?>
</body>

</html>
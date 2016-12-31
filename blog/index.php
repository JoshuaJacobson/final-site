<?php
$blog_writers = "Deion Vo, McKinsey Crozier, and Tucker Bachman";
$blog_editor = "Joshua Jacobson";
require '../resources.php';
?>

<html lang="en-US">
<head>
    <title>Blog and Newsletter</title>
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../global.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <script type="text/javascript" src="../scripts.js"></script>
    <script type="text/javascript" src="index.js"></script>
</head>
<body>
<h1 id="Logo_wrapper">
    <img src="/resources/connectors_lightgreen.png" id="Logo">
    Blog and Newsletter
</h1>
<p>
    <a href="/index.php">Return to homepage</a>
</p>
<hr>
<div id="Container">
    <div id="blog">
        <h2>Our Blog</h2>
        <p>
            The Cadillac Connectors blog is a series of small updates and accompanying images that show our progress on all of our projects.
            The blog is written by <?php echo $blog_writers ?> and edited by <?php echo $blog_editor ?>. During build season, expect nearly constant posts,
            and in the off-season there may be as few as one per month.
        </p>
        <iframe src="articles/index.php?embed=true&article=latest" id="embed" onclick="embed()"></iframe>
        <br>
        <button onclick="embed()">Read more...</button>
    </div>
    <div id="newsletter">
        <h2><i>Connections</i></h2>
        <p>
            <i>Connections</i> is Cadillac Connectors newsletter. During January, February, March, and April, an issue is released every two weeks.
            During the rest of the year, an issue is released every month. To sign up for our newsletter, please <a href="articles/newsletter.php#signup">click here</a>.
        </p>
    </div>
</div>
<?php
    resources::footer();
?>
</body>
</html>
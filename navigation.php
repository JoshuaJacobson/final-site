<?php
require 'resources.php';
?>
<html lang="en-US">
<head>
    <title>Site Navigation</title>
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="global.css">
    <link rel="stylesheet" type="text/css" href="navigation.css">
    <script type="text/javascript" src="scripts.js"></script>
    <!--<script type="text/javascript" src="navigation.js"></script>-->
</head>
<body>
<div id="container">
    <h1>Site Navigation</h1>
    <p>
        <ul>
            <li><a href="index.php">Homepage</a></li>
            <li><a href="media.php">Social Media</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="blog/index.php">Web Blog</a></li>
            <li><a href="community/index.php">Community Homepage</a></li>
            <ul>
                <li><a href="community/sponsor/index.php">Sponsor Homepage</a></li>
                <li><a href="community/sponsor/apply.php">Sponsor Application</a></li>
            </ul>
            <li><a href="outreach/index.php">Outreach Homepage</a></li>
            <ul>
                <li><a href="outreach/cadillacftc.php">FTC Team Homepage</a></li>
                <li><a href="outreach/first.php">FIRST Robotics</a></li>
                <li><a href="outreach/programming.php">Programming Central</a></li>
                <li><a href="outreach/safety.php">Safety Station</a></li>
            </ul>
            <li><a href="parents/index.php">Parent Homepage</a></li>
            <ul>
                <li><a href="parents/portal/index.php">Parent Sign-in</a></li>
            </ul>
            <li><a href="students/index.php">Student Homepage</a></li>
            <ul>
                <li><a href="students/resources.php">Student Resources</a></li>
                <li><a href="students/calendar.php">Student Calendar</a></li>
            </ul>
        </ul>
    </p>
</div>
<?php
resources::footer();
?>
</body>
</html>
<?php
$captain = "Joshua Jacobson";
require "../resources.php";
?>
<html>
<head>
    <title>Programming Central</title>
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="/global.css">
    <!--<link rel="stylesheet" type="text/css" href="index.css">-->
    <script type="text/javascript" src="/scripts.js"></script>
    <!--<script type="text/javascript" src="index.js"></script>-->
</head>
<body>
<header>
    <h1 id="Logo_wrapper">
        <img src="/resources/connectors_lightgreen.png" id="Logo">
        Programming Central
    </h1>
    <p>
        Ran by Programming Captain <?php echo $captain?>.
        <a href="/index.php">Return to homepage</a>
    </p>
    <hr>
</header>

<section id="content">
    <h2>Intro to FRC JAVA</h2>
    <p>
        At the Petoskey Robotics Conference, team member Joshua Jacobson gave a presentation on Java and how it can be used for FRC programs.
        A youtube compilation of the lecture can be found on <a href="https://www.youtube.com/playlist?list=PLoqZazceEnGF52kvVG9YI_iiL2eak1kZ-">his youtube channel</a>.
    </p>
    <h2>Github</h2>
    <p>
        Our team has a <a href="https://github.com/CadillacConnectors/">github organization</a> with various repositories for our code.
    </p>
</section>
<?php
resources::footer();
?>
</body>
</html>
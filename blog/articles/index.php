<?php
$embed = $_GET["embed"];
$article = $_GET["article"];
require '../../resources.php';
require 'articles.php';
if ($embed == "true") {
    $embellish = false;
}
?>
<html lang="en-US">
<head>
    <title>Blog</title>
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="/global.css">
    <!--<link rel="stylesheet" type="text/css" href="index.css">-->
    <script type="text/javascript" src="/scripts.js"></script>
    <script type="text/javascript" src="index.js"></script>
</head>
<body>


<?php
if($embellish == true) {
    echo '<h1 id="Logo_wrapper"><img src="/resources/connectors_lightgreen.png" id="Logo">Blog</h1><p><a href="/index.php">Return to homepage</a></p><hr>';
}

articles::getArticle($article);
if ($article == "latest") {
    $article = articles::$articles;
}

if($embellish == true) {
    echo "<br>";
    echo '<button id="latest" onclick="latest()">Latest</button>';
    echo '<button id="next" onclick="next(' . $article . ')">Next</button>';
    echo '<button id="previous" onclick="previous(' . $article . ')">Previous</button>';
    echo '<button id="first" onclick="first()">First</button>';
}
?>

</body>
</html>

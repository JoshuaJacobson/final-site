<?php
$embed = $_GET["embed"];
$article = $_GET["article"];
require '../../resources.php';
require 'articles.php';
articles::getArticle("0");
?>
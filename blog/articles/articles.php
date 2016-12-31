<?php

/**
 * Created by PhpStorm.
 * User: joshua
 * Date: 12/31/16
 * Time: 11:59 AM
 */
class articles
{
    static function getArticle($id) {
        //Add one to this number everytime a new article is created
        $articles = 0;
        echo self::dateFormatter("05/16/2016", "humandate");
        echo self::dateFormatter("05/16/2016", "date");
        echo "05/16/2016";

        //Do not change this
        if($id == "latest") {
            $id = $articles;
        }

        //Add cases to this for every new article
        switch ($id) {

            //Article Number 0
            case 0:
                echo "";
                break;

            //Article Number 1
            case 1:
                break;
        }
    }

    static function printArticle($author, $date, $longdate, $humandate, $title, $paragraphs) {
        echo "<article>";
        echo "<h1>$title</h1>";
        echo "<address class=\"author\">$author on <time datetime='$date' title='$longdate'>$humandate</time>";
    }

    static function dateFormatter($date, $type) {
        if($type=="date") {
            return date('YYYY-mm-dd', strtotime($date));
        }
        if($type=="humandate") {
            return date('mmm dd, yyyy', strtotime($date));
        }
        return null;
    }
}
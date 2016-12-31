<?php

/**
 * Created by PhpStorm.
 * User: joshua
 * Date: 12/31/16
 * Time: 11:59 AM
 */
class articles
{
    //Increment this number everytime a new article is created
    public static $articles = 0;

    static function parseId($id) {
        $articles = self::$articles;
        if($id == "latest" || $id > $articles) {
            $id = $articles;
        }
        if ($id < 0) {
            $id = 0;
        }
        if (gettype($id) != "int") {
            echo gettype($id);
            $id = "bread";
        }
        return $id;
    }

    static function getArticle($id) {


        //Do not change this
        $id = self::parseId($id);
        $author = "";
        $date = "";
        $title = "";
        $paragraphs = new ArrayObject();

        //Add cases to this for every new article
        switch ($id) {

            //Article Number 0
            case 0:
                //Author's name
                $author = "Joshua Jacobson";

                //Date that article was published
                $date = "12/31/2016";

                //Title of article (should be less than 50 characters, doesn't have to be)
                $title = "Old articles are going to be archived";

                //Add paragraphs like this
                $paragraphs->append("The old articles from the 2016 season are set to be archieved in  location to be determined.");
                $paragraphs->append("They will be available shortly, please wait.");

                break;

            //Article Number 1
            case 1:
                break;
        }

        //Do not change this
        self::printArticle($author, self::dateFormatter($date, "date"), self::dateFormatter($date, "humandate"), $date, $title, $paragraphs);
    }

    static function printArticle($author, $date, $longdate, $humandate, $title, $paragraphs) {
        echo "<article>";
        echo "<h1>$title</h1>";
        echo "<address class=\"author\">$author on <time datetime='$date' title='$longdate'>$humandate</time>";
        foreach ($paragraphs as $p) {
            echo "<p>$p</p>";
        }
        echo "</article>";
    }

    static function dateFormatter($date, $type) {
        if($type=="date") {
            return date('Y-m-d', strtotime($date));
        }
        if($type=="humandate") {
            return date('M jS, Y', strtotime($date));
        }
        return null;
    }
}
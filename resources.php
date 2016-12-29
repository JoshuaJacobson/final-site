<?php

/**
 * Created by PhpStorm.
 * User: joshua
 * Date: 12/28/16
 * Time: 8:48 AM
 */
class resources
{
    public static function footer() {
        echo "<footer>";
        echo "<hr>";
        echo "<h2><i>Connect</i> with us</h2>";
        echo "<p>";
        echo "    <img src=\"/resources/media/twitter.png\" onclick=\"twitter()\" alt=\"Twitter\" title=\"Cadillac Connectors Twitter\" class=\"mediaButton\">";
        echo "    <img src=\"/resources/media/facebook.png\" onclick=\"facebook()\" alt=\"Facebook\" title=\"Cadillac Connectors Facebook\" class=\"mediaButton\">";
        echo "    <img src=\"/resources/media/instagram.png\" onclick=\"instagram()\" alt=\"Instagram\" title=\"Cadillac Connectors Instagram\" class=\"mediaButton\">";
        echo "    <img src=\"/resources/media/pintrest.png\" onclick=\"pinterest()\" alt=\"Pinterest\" title=\"Cadillac Connectors Pinterest\" class=\"mediaButton\">";
        echo "    <img src=\"/resources/media/reddit.png\" onclick=\"reddit()\" alt=\"Reddit\" title=\"Cadillac Connectors Subreddit\" class=\"mediaButton\">";
        echo "    <img src=\"/resources/media/youtube.png\" onclick=\"youtube()\" alt=\"Youtube\" title=\"Cadillac Connectors Youtube Channel\" class=\"mediaButton\">";
        echo "</p>";
        echo "<hr class=\"smallHr\">";
        echo "<p class=\"normalSized\">";
        echo "    &copy;Joshua Jacobson, December 2016. For technical details and code, please visit the <a href=\"../outreach/programming.php\">Programming Central</a>.<br>";
        echo "    <i>This site <b>does not</b> use cookies in any form.</i><br>";
        echo "    Site navigation can be found <a href=\"/navigation.php\">here</a>.<br>";
        echo "</p>";
        echo "</footer>";
    }
}
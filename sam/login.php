<?php
/**
 * Created by PhpStorm.
 * User: joshua
 * Date: 12/10/16
 * Time: 10:06 PM
 */

$username = $_GET["username"];
$password = $_GET["password"];
$hash = password_hash($password, PASSWORD_BCRYPT);

$mservername = "localhost";
$musername = "root";
$mpassword = "linuxUBUNTU";
$mdbname = "sam";

try {
    $conn = new PDO("mysql:host=$mservername;dbname=$mdbname", $musername, $mpassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT username, password_hash FROM users;");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->fetchAll();
    //$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $found = false;
    foreach ($result as $item) {
        if($username == $item['username']) {
            if(password_verify($password, $item['password_hash'])) {
                $found = true;
            } else {
                break;
            }
        }
    }
    if($found == false) {
        echo "NOT FOUND";
    }
    echo $hash;
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
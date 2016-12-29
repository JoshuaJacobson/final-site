<?php
/**
 * Created by PhpStorm.
 * User: joshua
 * Date: 12/10/16
 * Time: 9:24 PM
 */
?>
<html>
<head>
    <title>SAM Login</title>
</head>
<body style="text-align: center;">
    <div id="title">

    </div>
    <div class="container">
        <form id="login" action="login.php">
            <label><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>

            <br><br>

            <label><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <br><br>

            <button type="submit">Login</button>
        </form>
    </div>

    <div class="container" style="background-color:#f1f1f1">
        <span class="psw">Forgot <a href="#">username or password?</a></span>
    </div>
</body>
</html>

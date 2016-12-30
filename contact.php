<html lang="en-US">
<head>
    <title>Contact Us!</title>
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="global.css">
    <link rel="stylesheet" type="text/css" href="contact.css">
    <script type="text/javascript" src="scripts.js"></script>
    <script type="text/javascript" src="contact.js"></script>
</head>
<body>
<h1 id="Logo_wrapper">
    <img src="resources/connectors_lightgreen.png" id="Logo">
    Contact Us!
</h1>
<p>
    <a href="index.php">Return to homepage</a>
</p>
<hr>
<h2><span id="red"><b>NOTE:</b></span> this form is not for sponsors. If you are interested in sponsoring us, please <a href="community/sponsor/apply.php">click here</a>.</h2>
<p id="description">
    If you are a prospective student, parent, mentor or other community member who would like to become involved with the cadillac connectors, you've come to the right place.
    Our team needs people that can help with anything - even if the closest you've ever come to a robot is watching a Rogue One.
    Our team has events going on at all times throughout the year, so don't hesitate to reach out even if you can't be a part of our January - April standard season.
    If you would like a quick response, please fill out the form below, otherwise you can email us at <a href="mailto:frcteam5086@gmail.com">frcteam5086@gmail.com</a>
</p>
<form id="contactus" onsubmit="submitContactForm(); return false;">
    <fieldset>
        <legend>Your contact info:</legend>
        <label>
            Name:
            <input id="name" type="text" name="name" maxlength="64" required>
        </label>
        <br>
        <label>
            Email:
            <input id="email" type="text" name="email" maxlength="64" required>
        </label>
        <br>
        <label>
            Current Employment / Education Status
            <select name="employment" id="status">
                <option value="young">In Junior High</option>
                <option value="highschool">In high school</option>
                <option value="college">In college</option>
                <option value="unemployed">Unemployed</option>
                <option value="nontech">Employed in a non STEM Field</option>
                <option value="stem">Employed in a STEM Field</option>
                <option value="other">Other</option>
            </select>
        </label>
    </fieldset>
    <fieldset>
        <legend>Reason(s) for contact:</legend>
        <label>
            <input type="checkbox" name="contactReasons" value="mentor">
            Interested in mentoring
        </label>
        <br>
        <label>
            <input type="checkbox" name="contactReasons" value="student">
            Interested in becoming a part of the team
        </label>
        <br>
        <label>
            <input type="checkbox" name="contactReasons" value="inquiry">
            Wanting to find out more about more
        </label>
        <br>
        <label>
            <input type="checkbox" name="contactReasons" value="helper">
            Interested in volunteering
        </label>
        <br>
        <label>
            <input type="checkbox" name="contactReasons" value="helicopter">
            Interested in having my child be a part of the team
        </label>
        <br>
        <label>
            <input type="checkbox" name="contactReasons" value="other">
            Other
        </label>
    </fieldset>
    <fieldset>
        <legend>Comments / Notes:</legend>
        <textarea rows="5" cols="45" id="comments"></textarea>
    </fieldset>
    <button id="submit_button" onclick="submitContactForm()">Submit!</button>
</form>
</body>
</html>
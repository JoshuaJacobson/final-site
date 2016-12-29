/**
 * Created by joshua on 12/28/16.
 */
function submitContactForm() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var ee_status = document.getElementById("status").value;
    var checkboxes = document.getElementsByName("contactReasons");
    var comments = document.getElementById("comments").value;

    var request = "?name=";
    request += name + "&email=" + email + "&ee_status=" + ee_status + "&comments=" + comments + "&checkboxes=";

    // loop over them all
    for (var i=0; i<checkboxes.length; i++) {
        // And stick the checked ones onto an array...
        if (checkboxes[i].checked) {
            request += i + "s";
        }
    }

    var url = window.location.href;
    if(url.indexOf("?") != -1) {
        url = url.substring(0, url.indexOf("?"));
    }

    window.location.href = url + request;

}
/**
 * Created by joshua on 12/31/16.
 */
function next(current) {
    var url = window.location.href;
    if(url.indexOf("/articles/") != -1) {
        url = url.substring(0, url.indexOf("/articles/"));
    }
    console.log(url);
    window.location.href = url + "/articles/index.php?article=" + (current + 1);
}

function previous(current) {
    var url = window.location.href;
    if(url.indexOf("/articles/") != -1) {
        url = url.substring(0, url.indexOf("/articles/"));
    }
    console.log(url);
    window.location.href = url + "/articles/index.php?article=" + (current - 1);
}

function latest() {
    var url = window.location.href;
    if(url.indexOf("/articles/") != -1) {
        url = url.substring(0, url.indexOf("/articles/"));
    }
    console.log(url);
    window.location.href = url + "/articles/index.php?article=latest";
}

function first() {
    var url = window.location.href;
    if(url.indexOf("/articles/") != -1) {
        url = url.substring(0, url.indexOf("/articles/"));
    }
    console.log(url);
    window.location.href = url + "/articles/index.php?article=0";
}

function expandImage(e) {
    var a = document.getElementsByClassName("image");
    a.style.width = "25%";
    e.style.width = "100%";
}
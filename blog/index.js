/**
 * Created by joshua on 12/30/16.
 */
function embed() {
    var url = window.location.href;
    if(url.indexOf("/blog/") != -1) {
        url = url.substring(0, url.indexOf("/blog/"));
    }
    console.log(url);
    window.location.href = url + "/blog/articles/index.php?article=latest";
}
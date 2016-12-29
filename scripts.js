/**
 * Created by josh on 11/24/16.
 */
function onLoad() {
    var href = window.location.href;
    if(!href.includes("mobile")) {
        var w = window.innerWidth;
        var h = window.innerHeight;
        if(href.includes("?")) {
            const regex = /\?.+/g;
            href = href.replace(regex, '');
            var mobile;
            if(w < h) {
                mobile = true;
            } else {
                mobile = false;
            }
            href = href + "?mobile=" + mobile + "&w=" + w + "&h=" + h;
            window.location.href = href;
        } else {
            var mobile;
            if(w < h) {
                mobile = true;
            } else {
                mobile = false;
            }
            href = href + "?mobile=" + mobile + "&w=" + w + "&h=" + h;
            window.location.href = href;
        }
    }
}

function twitter() {
    window.location.href = "https://twitter.com/team5086"
}

function facebook() {
    //TODO: Add facebook link
}

function instagram() {
    window.location.href = "https://instagram.com/team5086"
}

function pinterest() {
    window.location.href = "https://pinterest.com/team5086"
}

function reddit() {
    window.location.href = "https://reddit.com/r/cadillacconnectors"
}

function youtube() {
    window.location.href = "https://www.youtube.com/channel/UCAPJa_mUyGjpRXvBHV3ULNA"
}
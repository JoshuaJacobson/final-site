/**
 * Created by josh on 11/25/16.
 */
function countdownInit(weeks, days, hours, mins, secs) {
    console.log("Initializing Countdown");
    setInterval(function () {
        secs_text = secs.innerHTML;
        mins_text = mins.innerHTML;
        hours_text = hours.innerHTML;
        days_text = days.innerHTML;
        weeks_text = weeks.innerHTML;

        console.log("Changing Countdown");

        if (secs_text > 0) {
            secs.innerHTML = secs_text - 1;
        } else if (mins_text > 0) {
            mins.innerHTML = mins_text - 1;
            secs.innerHTML = 59;
        } else if (hours_text > 0) {
            hours.innerHTML = hours_text - 1;
            mins.innerHTML = 59;
            secs.innerHTML = 59;
        } else if (days_text > 0) {
            days.innerHTML = days_text - 1;
            hours.innerHTML = 59;
            mins.innerHTML = 59;
            secs.innerHTML = 59;
        } else if (weeks_text > 0) {
            weeks.innerHTML = weeks_text - 1;
            hours.innerHTML = 59;
            hours.innerHTML = 59;
            mins.innerHTML = 59;
            secs.innerHTML = 59;
        }
    }, 1000);
}

function countdownPeriodic(weeks, days, hours, mins, secs) {
    secs_text = secs.innerHTML;
    mins_text = mins.innerHTML;
    hours_text = hours.innerHTML;
    days_text = days.innerHTML;
    weeks_text = weeks.innerHTML;

    if (secs_text > 0) {
        secs.innerHTML = secs_text - 1;
    } else if (mins_text > 0) {
        mins.innerHTML = mins_text - 1;
        secs.innerHTML = 59;
    } else if (hours_text > 0) {
        hours.innerHTML = hours_text - 1;
        mins.innerHTML = 59;
        secs.innerHTML = 59;
    } else if (days_text > 0) {
        days.innerHTML = days_text - 1;
        hours.innerHTML = 59;
        mins.innerHTML = 59;
        secs.innerHTML = 59;
    } else if (weeks_text > 0) {
        weeks.innerHTML = weeks_text - 1;
        hours.innerHTML = 59;
        hours.innerHTML = 59;
        mins.innerHTML = 59;
        secs.innerHTML = 59;
    }
}

function indexLoader() {
    onLoad();
    var weeks = document.getElementById("weeks")
    var days = document.getElementById("days");
    var hours = document.getElementById("hours");
    var mins = document.getElementById("mins");
    var secs = document.getElementById("secs");
    countdownInit(weeks, days, hours, mins, secs);
}
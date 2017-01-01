
function enlargeImage(Image) {
	var elements = document.getElementsByClassName('BigImage');
	for (var i in elements) {
        if (elements.hasOwnProperty(i)) {
        	elements[i].className = 'NewsImage';
			}
		}
		Image.className = 'BigImage';
}

function colorChange(Item,color) {
	Item.style.backgroundColor = color;
}
/*1456185600000*/
var date = new Date();
var currentTime = date.getTime();
var FRCpackup = 1456185600000;
var activate = FRCpackup-currentTime;
setInterval(countdown2016,1000)
if (activate>0) {
	countdown2016();
}
function countdown2016() {
	var date = new Date();
	var currentTime = date.getTime();
	var FRCpackup = 1456185600000;
	var activate = FRCpackup-currentTime;
	var days = Math.floor(activate/86400000);
	activate = activate%86400000
	var hours = Math.floor(activate/3600000);
	activate = activate%3600000
	var minutes = Math.floor(activate/60000);
	activate = Math.floor(activate%60000);
	var seconds = Math.floor(activate/1000);
	var hoursPlusFive = hours+5;
	var SecondsStg = seconds.toString();
	var MinutesStg = minutes.toString();
	var HoursStg = hoursPlusFive.toString();
	var DaysStg = days.toString();
	document.getElementById("Seconds").innerHTML = SecondsStg;
	document.getElementById("Minutes").innerHTML = MinutesStg;
	document.getElementById("Hours").innerHTML = HoursStg;
	document.getElementById("Days").innerHTML = DaysStg;
}

function timer(){
var eventDate = new Date("mar 09, 2020").getTime();
var currentDate = new Date().getTime();
// console.log('currentDate',currentDate);
var remainDate = eventDate-currentDate;
// console.log("main mili seconds time: "+remainDate);
var seconds = remainDate/1000;
// console.log("seconds: "+seconds);
var minutes = seconds/60;
// console.log("minutes: "+minutes);
var hours = minutes/60;
// console.log("hours: "+hours);
var days = Math.floor(hours/24);
// console.log("days: "+days);

var h = Math.floor(hours%24);
// console.log(h);
var m = Math.floor(minutes%60);
// console.log(m);
var s = Math.floor(seconds%60);
// console.log(s);

var days = days<10?"0"+days:days;
var h = h<10?"0"+h:h;
var m = m<10?"0"+m:m;
var s = s<10?"0"+s:s;

document.getElementById("date").innerHTML=days;
document.getElementById("hour").innerHTML=h;
document.getElementById("minute").innerHTML=m;
document.getElementById("second").innerHTML=s;

}
setInterval(timer,1000);

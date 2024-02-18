function cred(event) {
  event.preventDefault();

  var UN = document.getElementById("UN").value;
  var PW = document.getElementById("PW").value;
  var valid = false;
  var index = -1;


var UNarr = ["Gerrard", "Kyle", "Eric"];
var PWarr = ["pendulum", "lifeisroblox","i<3muffin"];  

for (var i=0; i <UNarr.length; i++) {
   if ((UN == UNarr[i]) && (PW == PWarr[i])) {
       valid = true;
     index = i;
       break;
   }
}

if (valid){
switch (UNarr[index]) {
 case "Gerrard":
 window.location.href ="main.html";
 break;
}
}
if (valid){
switch (UNarr[index]) {
  case "Eric":
  window.location.href ="eric.html";
  break;
}
}
if (valid){
switch (UNarr[index]) {
  case "Kyle":
  window.location.href ="kyle.html";
  break;
}
}
}

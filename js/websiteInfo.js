var script = document.createElement("script");
script.src ="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"

let res = navigator.userAgent;

if (res.indexOf("Edg") > -1) document.getElementById("footerText").innerHTML = "Browser: Windows Edge <br>" + res;
else if (res.indexOf("Chrome") > -1) document.getElementById("footerText").innerHTML = "Browser: Google Chrome <br>" + res;
else if (res.indexOf("Firefox") > -1) document.getElementById("footerText").innerHTML = "Browser: Firefox <br>" + res;
else document.write("Browser: Unknown");

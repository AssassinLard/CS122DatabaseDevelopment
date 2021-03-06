<html>
    <head>
        <meta charset="utf-8">
        <link href="reset.css" rel="stylesheet">
        <link href="style_splash.css" rel="stylesheet">
        <title>DigiLog</title> 
    </head>
    <body onload = "startTime()">
        <div id = "SplashScreen">
            <div id = "Time"></div>
            <p id = "Logo">DigiLog</p>
            <div id = "buttons">
                <btn id = "TLog">
                    <a href="teacher_login.php">Teacher Login</a>
                </btn>
                <btn id = "ALog">
                    <a href="admin_login.php">Admin Login</a>
                </btn>
            </div>
        </div>
    </body>
</html>
<script>
function startTime() {
    var today = new Date();
    var stamp;
    var h = today.getHours();
    if (h > 12){
        stamp = "PM"
    }
    else{
        stamp = "AM"
    }
    if (h > 12){
        h -= 12;
    }
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('Time').innerHTML =
    h + ":" + m + ":" + s + " " + stamp;
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}
</script>
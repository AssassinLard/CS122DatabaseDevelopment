<?php
session_start();
$logins = array('7' => '0934','8' => '5937');
$username = isset($_POST['userno']) ? $_POST['userno'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
if (isset($logins[$username]) && $logins[$username] == $password) {
  $_SESSION['userdata']['username']=$logins[$username];
  header("location: admin_index.php");
  exit;
}
else {
  $msg="<span style='color:red;'>Invalid Login Details</span>";
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <link href="reset.css" rel="stylesheet">
        <link href="style_login.css" rel="stylesheet">
        <title>Admin Login</title> 
    </head>
    <body onload = "startTime()">
        <div id = "SplashScreen">
            <div id = "Time"></div>
            <h1 id = "Logo">Admin Login</h1>
            <form action="" method="post">
                <div id = "user">
                    <label for="uno">User Number</label>
                    <input type="text" id="uno" name="userno" placeholder="Please input your user number...">
                </div>
                <div id = "pass">
                    <label for="pword">Password</label>
                    <input type="password" id="pword" name="password" placeholder="Please input your password...">
                </div>
                <div id = "buttons">
                    <btn id = "Back">
                        <a href="index.html">Back</a>
                    </btn>
                   
                        <input type="submit" name="submit" value="Log In">
        <?php if(isset($msg) && isset($_POST['submit'])) {?>
        <div class="error"><?php echo $msg;?></div>
         <?php } ?>
               
                </div>
            </form>
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
        h = h - 12;
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
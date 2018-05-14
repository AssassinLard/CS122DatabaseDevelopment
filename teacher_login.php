<?php
require 'connect.php';

//get the id and pin from txt when button clicked
@$id = $_POST['teacherno'];
@$pin = $_POST['password'];

//query database
$query = "SELECT pincode FROM employee WHERE employeeno='$id'";
$result = mysqli_query($dbc, $query) or die("Bad query");
$row = mysqli_fetch_assoc($result);

//if theres a userid like that (so not empty)
if(!empty($row)){
	//if pin = the pin the guy typed
	if($row['pincode'] == $pin){
		
	//insert into dtr
    // in here we insert the minutes late to the database
    $query = "INSERT INTO dtr (reference_number, employeeno, date,
      timeReg) VALUES (NULL,?,?,?)";
	$stmt = mysqli_prepare($dbc, $query);
	$stmt->bind_param("iss", $id, $dateNow, $timeReg);
	// add it here too...
	date_default_timezone_set("Asia/Manila");
	$dateNow = date("Y-m-d");
	$timeReg = date("h:i:sa");
  //  $minutesLate = 
    // need to add one for 

	$stmt->execute() or die(mysqli_error($dbc));
	}
	
}else{
echo "";
}
?>
<html>
		
    <head>
        <meta charset="utf-8">
        <link href="reset.css" rel="stylesheet">
        <link href="style_login.css" rel="stylesheet">
        <title>Teacher Login</title> 
    </head>
    <body onload = "startTime()">
        <div id = "SplashScreen">
            <div id = "Time"></div>
            <h1 id = "Logo">Teacher Login</h1>
            <form action = "teacher_login.php" method = "post">
                <div id = "user">
                    <label for="tno">Teacher Number</label>
                    <input type="text" id="tno" name="teacherno" placeholder="Please input your teacher number...">
                </div>
                <div id = "pass">
                    <label for="pin">Pin Code</label>
                    <input type="password" id="pin" name="password" placeholder="Please input your pin code...">
                </div>
                <div id = "buttons">
                    <btn id = "Back">
                        <a href="index.php">Back</a>
                    </btn>
                    <a href="index.php">
                        <input type="submit" value="Login"/>
                   </a>
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


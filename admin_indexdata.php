<html>
    <head><meta charset="utf-8">
        <link href="reset.css" rel="stylesheet">
        <link href="style_splash.css" rel="stylesheet">
        <title>DigiLog</title> </head>
<h1>Attendance Form</h1>
<br><br>
<div id = "attendance">
<?php
    $user = 'root';
    $pass = '';
    $db = 'dtrdb';

    $db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
	@$ID = mysqli_real_escape_string($db, $_GET['ID']);
	$sql = "SELECT CONCAT(fname,' ',lname) 'name' FROM employee WHERE employeeno='$ID'";
    $result = mysqli_query($db, $sql) or die("ERROR");
	$row = mysqli_fetch_assoc( $result );
	echo $row['name']."<br><br><br>";
	
    $sql = "SELECT DISTINCT date, timeReg FROM dtr WHERE employeeno='$ID'";
    $result = mysqli_query($db, $sql) or die("ERROR");
    
    $resultCheck = mysqli_num_rows($result);
?>
<table>
  <thead>
    <tr>
        <th>Date</th>
        <th>Time In</th>
        <th>Time Out</th>
    </tr>
  </thead>
  <tbody>
    <?php
	$ctr = 0;
      while( $row = mysqli_fetch_assoc( $result ) ){
		  if($ctr%2==0){
			  echo"<tr>
          <td>{$row['date']}</td>
          <td>{$row['timeReg']}</td>";
		  }else{
			  echo"
             <td>{$row['timeReg']}</td></tr>";
		  }
        
        
		
		$ctr++;
      }
    ?>
  </tbody>
</table>
    
    <?php
    $user = 'root';
    $pass = '';
    $db = 'dtrdb';

    $db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
	@$ID = mysqli_real_escape_string($db, $_GET['ID']);
    $sql = "SELECT DISTINCT dtr.employeeno 'Employee No.', CONCAT(e.fname, ' ', e.lname), timestampdiff(minute, e.startingTime, dtr.timeReg) 'late' FROM employee e, dtr WHERE e.employeeno = dtr.employeeno AND e.employeeno = '$ID'";
    $result = mysqli_query($db, $sql) or die("ERROR");
	$row = mysqli_fetch_assoc( $result );
	if($row['late'] <= 0){
        echo "<br><br><br>Minutes late: 0";
    }else{
        echo "<br><br>Minutes Late: ".$row['late'];
    }
    ?>
</div>
</html>
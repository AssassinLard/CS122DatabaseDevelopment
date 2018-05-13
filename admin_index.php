<html>
    
    <head>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
        <link href="reset.css" rel="stylesheet">
        <link href="admin_index_style.css" rel="stylesheet">
    </head>
    
    <body onload = "startTime()">

        <div class="container">

        <header>

            <div class="topnav">
                <ul>
                    <div id = "SplashScreen">
                    <div id = "Time"></div>
                    </div>
                </ul>
            </div>	
            
        </header>

        <nav class ="side">
            <a href="admin_index.php" >Home</a> 
            <a class="tablinks" onclick="openTab(event, 'HELP')">Help</a>
            <a class="tablinks" onclick="openTab(event, 'FACULTY')">Faculty</a>
            <a class="tablinks" onclick="openTab(event, 'PAYROLL')">Payroll</a>
            <a class="tablinks" onclick="openTab(event, 'CREDITS')">Credits</a>
            <a class="tablinks" id="logout" href="index.html" style="color:black" >Logout</a>
        </nav>

        <div>
            <article>
			
                <div id="HOME" class="tabcontent">
				<hr>
				<br />
				<br />
				<br />
                  <h1>Welcome to DigiLog!<br></h1>
                    <h2><br><br>Uses:</h2>
                    <p><br>Checking of Faculty Attendance<br>Checking of Faculty Wage<br><br></p>
                    <h2><br><br>For use of:</h2>
                    <p><br>Barangka National High School Admin<br>Barangka National High School Principal<br><br></p>
                    <h2><br><br>For use within:</h2>
                    <p><br>Barangka National High School<br><br></p>
                    <h2><br><br>Created with:</h2>
                    <p><br>HTML, CSS, PHP, and MySQL<br><br></p>
				<br />
				<br />
				<br />
                </div>

                <div id="HELP" class="tabcontent">
				<hr>
				<br />
				<br />
				<br />
                  <h1>Help and FAQs<br></h1>
                    <h2><br><br>Can I use this outside of BNHS?</h2>
                    <p><br>No, this is only accessible within the school.<br><br></p>
                    <h2><br><br>Can I edit the attendance of teachers?</h2>
                    <p><br>No, this is only used to check their attendance and calculate the payroll based on that.<br><br></p>
                    <h2><br><br>Can I edit the formula used to calculate wages?</h2>
                    <p><br>As of the moment no, but should there be the need to do so, it will be possible in the future after some updates.<br><br></p>
                    <h2><br><br>Are the calculations done in real time?</h2>
                    <p><br>Yes, the calculations for wages are done in real time and are based on the login time of teachers.<br><br></p>
                <br />
				<br />
				<br />
				</div>

                <div id="FACULTY" class="tabcontent">
				<hr>
				<br />
				<br />
				<br />
                    <h1>BNHS Faculty<br></h1>
                    <br><br>
                    <?php
                        $user = 'root';
                        $pass = '';
                        $db = 'dtrdb';
                        $db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
                        $sql = "SELECT employeeno, CONCAT(fname,' ',lname) 'name' FROM employee;";
                        $result = mysqli_query($db, $sql);
                        $resultCheck = mysqli_num_rows($result);
                    ?>
                    <table>
                      <thead>
                        <tr>
                          <th>Employee No.</th>
                          <th>Employee Name</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          while( $row = mysqli_fetch_assoc( $result ) ){
                            echo
                            "<tr>
                              <td>{$row['employeeno']}</td>
                              <td>{$row['name']}</td>
                            </tr>\n";
                          }
                        ?>
                      </tbody>
                    </table>
                    <?php
                        mysqli_close($db);
                    ?>
				<br />
				<br />
				<br />
                </div>

                <div id="PAYROLL" class="tabcontent">
				<hr>
				<br />
				<br />
				<br />
                    <h1>Payroll</h1>
                    <br>
                    <?php
                        $user = 'root';
                        $pass = '';
                        $db = 'dtrdb';
                        $db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
                        $sql = "SELECT employeeno, CONCAT(fname,' ',lname) 'name', exempted_amount 'salary' FROM employee;";
                        $result = mysqli_query($db, $sql);
                        $resultCheck = mysqli_num_rows($result);
                    ?>
                    <table>
                      <thead>
                        <tr>
                          <th>Employee No.</th>
                          <th>Employee Name</th>
                          <th>Employee Salary (in Peso)</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          while( $row = mysqli_fetch_assoc( $result ) ){
                            echo
                            "<tr>
                              <td>{$row['employeeno']}</td>
                              <td>{$row['name']}</td>
                              <td>{$row['salary']}</td>
                            </tr>\n";
                          }
                        ?>
                      </tbody>
                    </table>
                    <?php
                        mysqli_close($db);
                    ?>
				<br />
				<br />
				<br />
                </div>

                <div id="CREDITS" class="tabcontent">
				<hr>
				<br />
				<br />
				<br />
                    <h1>Developer Credits<br></h1>
                    <h2><br>Front-end developers:</h2>
                    <p><br>Alfonso Dolina<br>Ricci Recto<br></p>
                    <h2><br>Back-end developers:</h2>
                    <p><br>Mico Aquino<br>Jennifer Kim<br>Roderick Ko<br>Christian Qui</p>
                    <h2><br><br><br>Brought to you by:</h2>
                    <p><br>The CS122 Students of <br>Ateneo de Manila University <br>SY 2017-2018<br><br></p>
				<br />
				<br />
				<br />
                </div>
            </article>
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
function openTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
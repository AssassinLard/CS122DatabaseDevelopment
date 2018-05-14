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
            <a class="tablinks" onclick="openTab(event, 'HOME')">Home</a> 
            <a class="tablinks" onclick="openTab(event, 'HELP')">Help</a>
            <a class="tablinks" onclick="openTab(event, 'FACULTY')">Faculty</a>
            <a class="tablinks" onclick="openTab(event, 'PAYROLL')">Payroll</a>
            <a class="tablinks" onclick="openTab(event, 'CREDITS')">Credits</a>
            <a class="tablinks" href="index.html">Logout</a>
        </nav>

        <div>
            <article>
                <div id="HOME" class="tabcontent">
                  <h1>Welcome to DigiLog!<br></h1>
                    <h2><br><br>Uses:</h2>
                    <p><br>Checking of Faculty Attendance<br>Checking of Faculty Wage<br><br></p>
                    <h2><br><br>For use of:</h2>
                    <p><br>Barangka National High School Admin<br>Barangka National High School Principal<br><br></p>
                    <h2><br><br>For use within:</h2>
                    <p><br>Barangka National High School<br><br></p>
                    <h2><br><br>Created with:</h2>
                    <p><br>HTML, CSS, PHP, and MySQL<br><br></p>
                </div>

                <div id="HELP" class="tabcontent">
                  <h1>Help and FAQs<br></h1>
                    <h2><br><br>Can I use this outside of BNHS?</h2>
                    <p><br>No, this is only accessible within the school.<br><br></p>
                    <h2><br><br>Can I edit the attendance of teachers?</h2>
                    <p><br>No, this is only used to check the teachers' attendance. As soon as they have logged in, their time is permanently recorded.<br><br></p>
                    <h2><br><br>Can I edit the formula used to calculate wages?</h2>
                    <p><br>As of the moment, no. The payroll included here accounts only for manually inputted deductions like taxes.<br><br></p>
                    <h2><br><br>Can the database deduct according to the faculty's recorded lates and absences?</h2>
                    <p><br>As of the moment, the database can only provide the number of minutes a faculty member was late for.<br><br></p>
                </div>

                <div id="FACULTY" class="tabcontent">
                    <h1>BNHS Faculty<br></h1>
                    <br><br>
                    <?php
                        $user = 'root';
                        $pass = '';
                        $db = 'dtrdb';

                        $db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
                        $sql = "SELECT e.employeeno, CONCAT(fname,' ',lname) 'name' FROM employee e;";
                        $result = mysqli_query($db, $sql);
                        $resultCheck = mysqli_num_rows($result);
						
                    ?>
                    <table>
                      <thead>
                        <tr>
                            <th>Employee No.</th>
                            <th>Employee Name</th>
						    <th>View </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          while( $row = mysqli_fetch_assoc( $result ) ){
							  $eno = $row['employeeno'];
							  
							  $query = "SELECT count( DISTINCT(date) ) AS 'count' FROM dtr WHERE employeeno='$eno'";
							  $result1 = mysqli_query($db, $query) or die("ERROR counting years");
							  $row1 = mysqli_fetch_array($result1);
							  $c = $row1['count'];
                            echo
                            "<tr>
                              <td>{$row['employeeno']}</td>
                              <td>{$row['name']}</td>
							  <td><a href=admin_indexdata.php?ID={$row['employeeno']}>View</a></td>
                            </tr>\n";
                          }
						  
                        ?>
                      </tbody>
                    </table>
                    <?php
                        mysqli_close($db);
                    ?>
                </div>

                <div id="PAYROLL" class="tabcontent">
                    <h1>Payroll</h1>
                    <br><br>
                    <?php
                        $user = 'root';
                        $pass = '';
                        $db = 'dtrdb';

                        $db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
                        $sql = "SELECT e.employeeno, CONCAT(e.fname,' ',e.lname) 'name',p.codeDescription, p.effectivity_date, p.termination_date, p.basic_deduction, w.baseSalary, w.pera_compensation, (w.baseSalary + w.pera_compensation) AS 'Gross_Compensation', ((w.baseSalary + w.pera_compensation)-(p.basic_deduction)) AS 'Net_Pay' FROM employee e, payroll p, wages w Where (e.employeeno = p.employeeno) and (p.employeeno = w.employeeno);";
                        $result = mysqli_query($db, $sql);
                        $resultCheck = mysqli_num_rows($result);
                    ?>
                    <table>
                      <thead>
                        <tr>
                          <th>Employee No.</th>
                          <th>Employee Name</th>
                          <th>Code Description</th>
                          <th>Effectivity Date</th>
                          <th>Termination Date</th>
                          <th>Basic Deduction</th>
                          <th>Basic Salary</th>
                          <th>Pera Compensation</th> 
                          <th>Gross Compensation</th> 
                          <th>Net Pay</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          while( $row = mysqli_fetch_assoc( $result ) ){
                            echo
                            "<tr>
                              <td>{$row['employeeno']}</td>
                              <td>{$row['name']}</td>
                              <td>{$row['codeDescription']}</td>
                              <td>{$row['effectivity_date']}</td>
                              <td>{$row['termination_date']}</td>
                              <td>{$row['basic_deduction']}</td>
                              <td>{$row['baseSalary']}</td>
                              <td>{$row['pera_compensation']}</td>
                              <td>{$row['Gross_Compensation']}</td>
                              <td>{$row['Net_Pay']}</td>
                            </tr>\n";
                          }
                        ?>
                      </tbody>
                    </table>
                    <?php
                        mysqli_close($db);
                    ?>
                </div>

                <div id="CREDITS" class="tabcontent">
                    <h1>Developer Credits<br></h1>
                    <h2><br><br>Front-end developers:</h2>
                    <p><br>Alfonso Dolina<br>Ricci Recto<br><br></p>
                    <h2><br><br>Back-end developers:</h2>
                    <p><br>Mico Aquino<br>Jennifer Kim<br>Roderick Ko<br>Christian Qui</p>
                    <h2><br><br>Brought to you by:</h2>
                    <p><br>The CS122 Students of <br>Ateneo de Manila University <br>SY 2017-2018<br><br></p>
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
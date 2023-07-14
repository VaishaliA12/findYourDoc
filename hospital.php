
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <style>
        table,
        td,
        th {
            border: 1px solid #ddd;
            text-align: left;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            padding: 15px;
        }
    </style>
</head>

<body>
    <center><h1>Hospital Appointments</h1>
        <?php
                include "login.php";
                $username = $_SESSION['username'];
                    $sql = "SELECT * FROM `hospital` WHERE `hid`='$username'";
                    $result = $conn->query($sql);
                    if (mysqli_num_rows($result) == 1) {
                        $sql1 = "SELECT appointment.apptname,appointment.apptmobile,appointment.apptage, doctor.dname, doctor.specialisation, appointment.apptdate,appointment.appttime FROM appointment INNER JOIN doctor ON appointment.apptdoctor=doctor.did WHERE doctor.hid= 123 AND appointment.apptdate >= CURDATE() ORDER BY appointment.apptdate ASC;";
                        $result1 = $conn->query($sql1);
                            echo '<div align="center" style="length: 600px;">';
                            echo '<table border="3" padding="5">';
                            echo '<thead>
                                    <tr>
                                        <th>Patient Name</th>
                                        <th>Mobile number</th>
                                        <th>Patient Age</th>
                                        <th>Doctor Name</th>
                                        <th>Specialisation</th>
                                        <th>Appointment Date</th>
                                        <th>Appointment Time</th>
                                    </tr>
                                </thead><tbody>';

                            while($row = $result1->fetch_array()){
                                echo '<tr>';
                                echo "<td>$row[0]</td>";
                                echo "<td>$row[1]</td>";
                                echo "<td>$row[2]</td>";
                                echo "<td>$row[3]</td>";
                                echo "<td>$row[4]</td>";
                                echo "<td>$row[5]</td>";
                                echo "<td>$row[6]</td>";
                                // echo "<td>$row[7]</td>";
                                // echo "<td>$row[8]</td>";
                                // echo "<td>$row[9]</td>";
                                // echo "<td>$row[10]</td>";
                                // echo "<td>$row[11]</td>";
                    
                    
                            }       echo"</tr></body></table>";
                            
                        }
                
                
            ?></center>
</body>

</html>
<?php
 $conn->close();
 ?>
<?php
include 'conn.php';
$sql_pat = "CREATE TABLE patient(
    username VARCHAR(25) PRIMARY KEY, email VARCHAR(50) NOT NULL, pwd VARCHAR(15) NOT NULL
)";
if($conn->query($sql_pat) === TRUE){
    echo"\nTABLE appointment CREATED SUCCESSFULLY ";
}
else{
    echo"\nError crreating TABLE" .$conn->error;
}
$sql_hos = "CREATE TABLE hospital(
    hid INT(3) Primary key, hname VARCHAR(100) NOT NULL, 
    huser VARCHAR(25) NOT NULL, hpwd VARCHAR(15) NOT NULL
    )";
if($conn->query($sql_hos) === TRUE){
    echo"\nTABLE appointment CREATED SUCCESSFULLY ";
}
else{
    echo"\nError crreating TABLE" .$conn->error;
} 
$sql_doc = "CREATE TABLE doctor(
    did INT(5) primary key, hid INT(3),  
    dname VARCHAR(25), qualification VARCHAR(50), specialisation VARCHAR(25), experience INT(4),
    FOREIGN KEY (hid) REFERENCES hospital(hid)
    )";
 if($conn->query($sql_doc) === TRUE){
    echo"\nTABLE appointment CREATED SUCCESSFULLY ";
}
else{
    echo"\nError crreating TABLE" .$conn->error;
} 
$sql_app = "CREATE TABLE appointment(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    apptname VARCHAR(50) NOT NULL,
    apptusername VARCHAR(25) NOT NULL,
    apptmobile VARCHAR(11),
    apptage INT(3),
    apptdoctor INT(3),
    apptdate DATE,
    appttime VARCHAR(10),
    apptfee INT(4),
    FOREIGN KEY (apptusername) REFERENCES patient(username),
    FOREIGN KEY (apptdoctor) REFERENCES doctor(did)
)";

if ($conn->query($sql_app) === TRUE) {
    echo "\nTABLE appointment CREATED SUCCESSFULLY<br>";
} else {
    echo "\nError creating TABLE: " . $conn->error . "<br>";
}


$conn->close();
?>
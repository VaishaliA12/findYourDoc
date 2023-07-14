<?php 
include 'conn.php';
if(isset($_POST["register"])) {
    $name=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    
    $sql="INSERT INTO patient(username,email,pwd) values('$name','$email','$password')";
    if($conn->query($sql) === TRUE) {
        echo "
                <script>
                    alert('You have Registered Successfully!!');
                    window.location.href='signup_page.html'
                </script>";
    } else{
        echo "
                <script>
                    alert('Please Try Again!!');
                    window.location.href='signup_page.html'
                </script>";
    }     
}
?>
<?php 
session_start();
include 'conn.php';

if (isset($_POST['login'])) {
        
    $username = $_POST['username'];
    $password_login = $_POST['password'];
    $membership = $_POST['membership'];
    
    // Sanitize user input to prevent SQL injection attacks
    $username = mysqli_real_escape_string($conn, $username);
    $password_login = mysqli_real_escape_string($conn, $password_login);
    
    if($membership === 'Patient'){
        $sql = "SELECT * FROM patient WHERE username = '$username' AND pwd = '$password_login'";
        $result = $conn->query($sql);
        if ($row = $result->fetch_assoc()) {
            $_SESSION['logged_in'] = true;
            
            $_SESSION['username'] = $username;
            header('Location: index.html');
            exit();
        } else {
            // Display error message and redirect to login page
            echo "<script>
                    alert('Invalid username or password');
                    window.location.href = 'signup_page.html';
                  </script>";
            exit();
        }
    } elseif($membership === 'Hospital'){
        $sql = "SELECT * FROM hospital WHERE hid = '$username' AND hpwd = '$password_login'";
        $result = $conn->query($sql);
        if ($row = $result->fetch_assoc()) {
            $_SESSION['logged_in'] = true;
            $_SESSION['username'] = $username;
            header('Location: hospital.html');
            exit();
        } else {
            // Display error message and redirect to login page
            echo "<script>
                    alert('Invalid username or password');
                    window.location.href = 'signup_page.html';
                  </script>";
            exit();
        }
    } else {
        // Display error message and redirect to login page
        echo "<script>
                alert('Invalid membership type');
                window.location.href = 'signup_page.html';
              </script>";
        exit();
    }
}
?>

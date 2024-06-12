<?php 
    $email = $_POST['login-email'];
    $pass = $_POST['login-password'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "project";

    $conn = mysqli_connect($servername, $username, $password,$database);

    $sql = "SELECT email, password FROM student where email = '$email'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        if ($row && $row['password'] === $pass) {
            header("Location:main.html");
        } else {
            echo "Invalid email or password.";
        }
    }

?>

<?php
$con = mysqli_connect('localhost', 'root', '', 'login_sample_db');
if (!$con) {
    die("Error: " . mysqli_error($con));
}
?>

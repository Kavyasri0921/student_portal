<?php
	$idno=$_POST['idno'];
	$firstname=$_POST['fname'];
	$lastname=$_POST['lname'];
	$email=$_POST['mail'];
	$password=$_POST['pass'];
	$phonenumber=$_POST['phnno'];
	$select = $_POST['batch'] ?? '';

	$result = match ($select) {
	    'O16' => 'o16',
	    'O17' => 'o17',
	    'O18' => 'o18',
	    'O19' => 'o19',
	    'O20' => 'o20',
	    
	    default => 'unknown value',
	};
	$passedoutyear=$_POST['passyear'];
	$curwa=$_POST['cwa'];
	$cursy=$_POST['csy'];
	$skills=$_POST['skills'];
	$desc=$_POST['description'];
	$servername = "localhost";
	$username = "root";
	$password2 = "";
	$dbname = "project";
	$conn = mysqli_connect($servername, $username, $password2, $dbname);
	if($conn){
		#echo "connected successfully";
	}
	$sql = "INSERT INTO `registration`(`idno`, `firstname`, `lastname`, `email`, `password`, `phn_no`, `batchno`,`passedoutyear`,`curr_stu_year`,`curr_wor_at`,`skills`,`description`) VALUES ('$idno','$firstname','$lastname','$email','$password',$phonenumber,'$result','$passedoutyear','$cursy','$curwa','$skills','$description')";

	$quert=mysqli_query($conn, $sql);
	if($quert){
		echo "records inserted successfully";
	}
?>

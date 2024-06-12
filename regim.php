<!doctype html>
<html>
<head>
<title>register page</title>
<script>
function validation(){
	var idnumber=document.getElementById("idno").value;
	var firstname=document.getElementById("fname").value;
	var lastname=document.getElementById("lname").value;
	var email=document.getElementById("mail").value;
	var pw=document.getElementById("pass").value;
	var tel=document.getElementById("phnno").value;
	var eregx=/^o\d{6}@rguktong\.ac\.in$/;
	var regx=/^O\d{6}$/;
	var pregx=/^[0-9]{10}$/;
	if(idnumber=="")
	{
		alert("please enter your id number");
		return false;
	}
	else if(!regx.test(idnumber))
	{
		alert("please enter your correct clg id number");
		return false;
	}
	else if(firstname=="")
	{
		alert("please enter your firstname");
		return false;
	}
	else if(lastname=="")
	{
		alert("please enter your lastname");
		return false;
	}
	else if(email=="")
	{
		alert("please enter email id")
		return false;
	}
	else if(!eregx.test(email))
	{
		alert("please enter correct email address");
		return false;
	}
	else if(pw=="")
	{
		alert("please enter password");
		return false;
	}
	else if(tel=="")
	{
		alert("please enter phone number")
	}
	else if(!pregx.test(tel))
	{
		alert("phone number should contain 10 digits");
		return false;
	}
	else
	{
		return true;
	}
}
</script>
<style>
	body
	{
		background:linear-gradient(#ffefba,#ffffff);
	}
	div
	{
		display:grid;
		height:1050px;
		place-items:center;
		margin:10px auto;
		width:50%;
		padding:5px 20px;
		font-size:20px;
		color:white;
		background:linear-gradient(#654ea3,#eaafc8);
		opacity:0.8;
		border-radius:20px;
	}
	label
	{
		width:200px;
		display:inline-block;
	}
	input
	{
		width:350px;
		height:30px;
	}
	select
	{
		width:360px;
		height:35px;
	}
	button
	{
		width:500px;
		height:50px;
		background-color:linear-gradient(#636363,#a2ab58);
		color:black;
		border-radius:10px;
	}
	button:hover
	{
		background-color:#000080;
	
	}
</style>
</head>
<body>
<div>
	<form id="form" onsubmit='return validation()' action="connect1.php" method="post">
	<h1 style="color:#59e817;padding:1px 1px;"><center>REGISTRATION  FORM</center></h1>
	
	<label>ID NUMBER:</label>
	<input type="text" id="idno" placeholder="enter your COLLEGE id" name="idno"><br><br>
	<label>FIRSTNAME:</label>
	<input type="text" id="fname" placeholder="enter your firstname" name="fname"><br><br>
	<label>LASTNAME:</label>
	<input type="text" id="lname" placeholder="enter your lastname" name="lname"><br><br>
	<label>EMAIL ID:</label>
	<input type="email" id="mail" placeholder="enter your clg mail id" name="mail"><br><br>
	<label>PASSWORD:</label>
	<input type="password" id="pass" placeholder="enter password" minlength="8" name="pass"><br><br>
	<label>PHONENUMBER:</label>
	<input type="tel" id="phnno" placeholder="enter your phonenumber" minlength="10" name="phnno"><br><br>
	<label>BATCH NO:</label>
	<select name="batch" id="batch">
	<option> </option>
	<option value="O16">O16</option>
	<option value="O17">O17</option>
	<option value="O18">O18</option>
	<option value="O19">O19</option>
	<option value="O20">O20</option>
	</select><br><br>
	<label>PASSEDOUT YEAR:</label>
	<input type="text" name="passyear" placeholder="enter passed out year"><br><br>
	<label>CURRENTLY STUDYING YEAR:</label>
	<input type="text" name="csy" placeholder="enter currently studying year"><br><br>
	<label>CURRENTLY WORKING AT:</label>
	<input type="text" placeholder="working place..." name="cwa"><br><br>
	<label>SKILLS:</label>
	<textarea rows="5" cols="50" placeholder="mention your skills" type="text" name="skills"></textarea><br><br>
	<label>DESCRIPTION:</label>
	<textarea rows="5" cols="50" placeholder="description" type="text" name="description"></textarea><br><br>
	<center><link rel="login.html"> <button type="submit">SUBMIT</button></link></center>
	</form>
</div>
</body>
</html>

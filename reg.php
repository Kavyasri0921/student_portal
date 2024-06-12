<!DOCTYPE html>
<html lang="en">
<head>
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
   <title>Registration Form </title>
</head>
<body>
    <div class="container">
        <header>Registration</header>
        <form id="form" onsubmit='return validation()' action="connect1.php" method="post">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>Id Number</label>
                            <input type="text" id="idno" placeholder="enter your COLLEGE id" name="idno" required>
                        </div>
                        <div class="input-field">
                            <label>FIRSTNAME:</label>
                            <input type="text" id="fname" placeholder="enter your firstname" name="fname" required>
                        </div>
                        <div class="input-field">
                            <label>LASTNAME:</label>
                            <input type="text" id="lname" placeholder="enter your lastname" name="lname" required>
                        </div>
                        <div class="input-field">
                            <label>EMAIL ID:</label>
                            <input type="email" id="mail" placeholder="enter your clg mail id" name="mail" required>
                        </div>
                        <div class="input-field">
                            <label>PASSWORD:</label>
                            <input type="password" id="pass" placeholder="enter password" minlength="8" name="pass" required>
                        </div>
                        <div class="input-field">
                            <label>PHONENUMBER:</label>
                            <input type="tel" id="phnno" placeholder="enter your phonenumber" minlength="10" name="phnno" required>
                        </div>
                        <div class="input-field">
                            <label>BATCH NO:</label>
                            <select name="batch" id="batch" required>
		<option> </option>
		<option value="O16">O16</option>
		<option value="O17">O17</option>
		<option value="O18">O18</option>
		<option value="O19">O19</option>
		<option value="O20">O20</option>
		</select>
                        </div>
                        <div class="input-field">
                            <label>Currently Studying</label>
                            <select name="csy" id="batch" required>
                                <option disabled selected>Select Year</option>
                                <option>P1</option>
                                <option>P2</option>
                                <option>E1</option>
                                <option>E2</option>
                                <option>E3</option>
                                <option>E4</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>PASSEDOUT YEAR:</label>
                            <input type="text" name="passyear" placeholder="enter passed out year" required>
                        </div>
                        
                         <div class="input-field">
                            <label>CURRENTLY WORKING AT:</label>
                            <input type="text" placeholder="working place..." name="cwa" required>
                        </div>
                        <div class="input-field">
                            <label>Skills</label>
                            <textarea rows="5" cols="50" placeholder="mention your skills" type="text" name="skills"></textarea>
                        </div>
                        <div class="input-field">
                            <label>Description</label>
                            <textarea rows="5" cols="50" placeholder="description" type="text" name="description"></textarea>
                        </div>
                    </div>
                    <div class="buttons">
                        <div class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText">Back</span>
                        </div>                
                        <a href="dashboard.html">
                        <button type="submit" class="sumbit">
                            <span class="btnText">Submit</span>
                            <i class="uil uil-navigator"></i>
                        </button></a>
                    </div>
                </div>
               
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>

<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>
<body>

<form action="" method="POST" style="border:1px solid #ccc">
  <div class="container">
<<<<<<< HEAD
    <h1>Register Form</h1>
=======
    <h1>Register Formd</h1>
>>>>>>> parent of e18739e... Update login.php
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="name"><b>name</b></label>
    <input type="text" placeholder="Enter name" name="name" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <label for="cpassword"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="cpassword" required>
    
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" name="submit" class="signupbtn">Login</button>
    </div>
  </div>
</form>
</body>
</html>
<?php
	if(isset($_POST['submit']))
	{
		$name =$_POST['name'];
		$password =$_POST['password'];
		$cpassword =$_POST['cpassword'];
		echo $name,$password,$cpassword;
		
	}
?>

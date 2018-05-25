<?php
include('navbar2.html');
?>
<html>
<head>
<link rel="stylesheet" href="stylecode.css">
</head>
<body>
<form action="Admin.php" method="POST">
    <h1>Sign Up</h1>
    <h1>Please fill the form to create an account.</h1>
   <br>

   <label for="email"><b>Email/User Name</b></label><br>
    <input type="text" placeholder="Enter Email Or User Name" name="email" required><br>

    <label for="psw"><b>Password<b></label><br>
    <input type="password" placeholder="Enter Password" name="psw" required><br>

    <label for="psw-repeat"><b>Confirm Password</b></label><br>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required><br><br>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
	<br>
    <p>By creating an account you agree to our <a href="text.tex" style="color:#336699">Terms & Privacy</a>.</p>
      <br>
            <input type="submit"  Value="Sign Up">
      </form>
</body>
</html>
<?PHP 
include('footer.php');
?>
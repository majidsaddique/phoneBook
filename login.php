<?php
include('navbar2.html');
?>
<html>
<head>
<link rel="stylesheet" href="stylecode.css">
</head>
<body>
<form action="majid.php">
  <div>
    <h1>Login</h1>
   <br><br>
    
    <label for="email"><b>Email/User Name</b></label><br>
    <input type="text" placeholder="Enter Email" name="email" required>
<br>
    <label for="psw"><b>Password<b></label><br>
    <input type="password" placeholder="Enter Password" name="psw" required>
<br>
 <br>
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    <br>
    <br>
      <form action="Admin.php">
<input type="submit"  Value="Login"><br>
</form>
  <br>
      <form action="index.php">
<input type="submit"  Value="Not Now"><br>
</form>
<br>
<label for="register">Don't Have an Account</label>
<form action="register.php">
<input type="submit"  Value="Register">
  </div>
</form>
</body>
</html>
<?PHP 
include('footer.php');
?>
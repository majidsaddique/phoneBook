<?php
include('navbar2.html');
?>

<hmtl>
<head>
<link rel="stylesheet" href="stylecode.css"></head>
<body>
<h1>Welcome to Phone Diary</h1><br><br><br><br>
<div>
<form method="POST" action="login.php">
<input type="submit" name="save" Value="Login"><br></form>
<br>
<form action="register.php" method="post">
<input type="submit" name="update" Value="Register"><br></form>
</div>
<div class="adbox">
<p>This Application is specially Made to secure your Personal Contacts.<br>
 By Using This application you can achive diffrent benefits
 <ul>
 <li>You can Store your Unlimited contacts </li>
 <li>When Unfortunately you lost the cell This App will Help you</li>
 <li>You can get all contacts in all over the world</li>
 </ul>
</p>
</div></body>
</html>
<?php
include('footer.php');
?>

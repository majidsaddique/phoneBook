<?php
include('navbar.html');
?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" href="stylecode.css">
</head>
<body>
<h1>Deletation of Contacts</h1>
<form action="delete.php" method="POST">
<a style="color:red;font-size:24px;" href="show.php">Check ID Number</a><br>
<label for="Name">ID</label>
<input type="Text" name="id" Placeholder="Type ID Of Contact,You want to Delete" required>
<input type="submit" value="Delete">
</html>
</body>
<?PHP 
include('footer.php');
?>
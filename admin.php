<?PHP
include('navbar.html');
?>
<html>
<head>
<link rel="stylesheet" href="stylecode.css">
<title>PHONEBOOK
</title>
</head>
<body>
<h1>Select your Operation</h1><br>
<div style="text-align:center">
<form method="POST" action="majid.php">
<input class="submit" type="submit" name="save" Value="Add New Contact">
</form>
<br><form action="update1.php" method="post">
<input class="submit" type="submit" name="update" Value="Update Contact" onclick="alert('You Must Have A unique ID Number  Before Update a Contact')";>
</form>
<br>
<form action="srchh.php" method="post">
<input class="submit" type="submit" name="search" Value="Search Contact">
</form>
<br>
<form action="delete1.php" method="post">
<input class="submit" type="submit" name="delete" Value="Delete Contact">
</form>

<br><br>
</div>
</body>
</html>
<?PHP
include('footer.php');
?>

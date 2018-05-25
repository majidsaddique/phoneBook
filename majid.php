<?php
include('navbar.html');
?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" href="stylecode.css">
<title>PHONEBOOK
</title>
</head>
<body>
<br>
<form method="POST" action="user.php">
<label for="name"><b>Name
<br><input type="text" name="name" maxlength="25" placeholder="Enter Name Here" required >
</label><br>
<label for="number">Number:<br>
<input type="text"  name="number" placeholder="Enter Number Here" required></label>
<br>
Relation:<br>
<input type="text" name="relation" placeholder="Specify Your Relation Here" required ><br>
Network:<br>
<select name="network">
<option value="jazz" selected>Moblink</option>
<option value="telenor">Telenor</option>
<option value="zong">Zong</option>
<option value="warid">Warid</option>
<option value="ufone">Ufone</option>
</select>
<br>
<label for="adress">Address<br>
<input type="text"  name="address"  placeholder="Enter Location Here" required></label>
<br></form>
<form method="POST" action="user.php" enctype="multipart/form-data">
Photo:<br>
<input type="file"  name="fileToUpload" placeholder="Enter" required>
<br><br>
<br>
<input type="submit" onclick="alert('You Fill All Required TextBox')" value="Save" name="submit">
</form>
<body>
</html>
<?PHP 
include('footer.php');
?>
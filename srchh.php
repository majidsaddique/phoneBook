<?php
include'navbar.html';
?>
<!DOCTYPE html>
<html>
<link href="stylecode.css" rel="stylesheet">
<body>
<form method="POST" action="srch.php"><br>
<label for="search"> Search By<br>
<select name="searchh" required>
<option  selected>Name</option>
<option >Number</option>
</option>
</select></label>
<br>
Name / Number<br>
<input type="text" name="search" placeholder="Write Name or Number Here" required ><br>
<input type="submit"  value="SEARCH" ><br>
</form\>
</body>
</html>
<?php
include'footer.php';
?>

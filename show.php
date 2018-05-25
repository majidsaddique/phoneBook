<?php
include('navbar.html');
echo"<h1>Display of Contacts</h1>";
?>
<html>
<head>
</head>
    <form action="srch.php"method="POST">
      <input type="text" placeholder="Search....." name="search" required>
      <button type="submit"  style="width:80px;height:41px;background-color:#666600;color:white">Search</button>
    </form>
</html>
<?php
include('dbconnection.php');
echo "<link rel='stylesheet'  href='stylecode.css' />";
$sql = "SELECT `id`,`Name`,`Number`,`Relation`,`Network`,`address`,`Photo` FROM `contacts";
$result =mysqli_query($conn,$sql);
echo"<table   border=55>
<br><br>
<tr>
<th>Id</th>
<th>Name</th>
<th>Number</th>
<th>Relation</th>
<th>Network</th>
<th>Address</th>
<th>Photo</th>
</tr>";
    // output data of each row
    while($row =mysqli_fetch_assoc($result)) {
       echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['Name'] . "</td>";
echo "<td>" . $row['Number'] . "</td>";
echo "<td>" . $row['Relation'] . "</td>";
echo "<td>" . $row['Network'] . "</td>";
echo "<td>" . $row['address'] . "</td>";
echo "<td>" . $row['Photo'] . "</td>";
echo "</tr>";
}
echo "</table>";
$conn->close();
?>
<?PHP 
include('footer.php');
?>
<?php
include('navbar.html');
?>
<?php
echo "<link rel='stylesheet' href='stylecode.css'>";
include ('dbconnection.php');
echo"<h1>Display of of Your Search Contacts</h1>";
$term=$_POST["search"];
$sql="SELECT `id`,`Name`,`Number`,`Relation`,`Network`,`address`,`Photo` FROM `contacts` WHERE `Number` OR `Name` LIKE '" . $term . "'";

$result = mysqli_query($conn, $sql);
echo "<table border='1' align='center'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Number</th>
<th>Relation</th>
<th>Network</th>
<th>Address</th>
<th>Photo</th>
</tr>";
while ($row=mysqli_fetch_array($result))
{
	echo "<tr>";
	echo "<td>" .$row['id']. "</td>";
	echo "<td>" .$row['Name']. "</td>";
	echo "<td>" .$row['Number']. "</td>";
	echo "<td>" .$row['Relation']. "</td>";
	echo "<td>" .$row['Network']. "</td>";
    echo"<td>".$row['address']."</td>";
	echo"<td>".$row['Photo']."</td>";
	echo "</tr>";
}
echo "</table>";
echo"<br>";
mysqli_close($conn);
?>
<?PHP
include('footer.php');
?>

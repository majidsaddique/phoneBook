<?php
include('navbar.html');
include('dbconnection.php');
echo"<link rel='stylesheet' href='stylecode.css'>";
$id=$_POST['id'];

$query="Delete from `contacts` where `contacts`.`Id`='$id'";
if(mysqli_query($conn,$query))
echo"<h3 class='hh'>Contact is Successfully Deleted From DataBase<h3>";
else
	echo"Error Occured";
?>
<?PHP
include('footer.php');
?>

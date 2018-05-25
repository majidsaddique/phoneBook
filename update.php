<?php
include('navbar.html');
include'dbconnection.php';?>
<?PHP
echo"<link rel='stylesheet' href='stylecode.css'>"; 
$name=$_POST['name'];
$number=$_POST['number'];
$id=$_POST['id'];
$query="Update `contacts` set `Name`='$name',`Number`='$number' where `id`='$id'";
if(mysqli_query($conn,$query)){
	
	echo"<h3 class='hh'>Data Successfully Updated<h3>";
}
else{
	
	echo"<h3 class='hh'>Error Occured<h3>".mysqli_error();;
}
include('footer.php');
?>
<?PHP
$server="localhost";
$username="root";
$password="";
$dbname="phonebook";
$conn=mysqli_connect($server,$username,$password,$dbname);
if(!$conn)
{
	die("connection is not established"."<br>".mysqli_connect_error());
}
?>
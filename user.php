<?php
include('navbar.html');
?>
<?php
echo"<link href='stylecode.css' rel='stylesheet'>";
include ('dbconnection.php');

$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
$name=$_POST["name"];
$fonenumber=$_POST["number"];
$relation=$_POST["relation"];
$network=$_POST["network"];
$adres=$_POST["address"];
$photo=$_POST["fileToUpload"];

$command="INSERT into `contacts` (`id`,`Name`,`Number`,`Relation`,`Network`,`address`,`Photo`)values(NULL, '$name', '$fonenumber', '$relation', '$network','$adres','$photo')";

if(mysqli_query($conn,$command)){
	
	echo"<h3 class='hh'>Data Successfully Saved Into Batabase<h3>";
}
else
	echo"<h3 class='hh'>There are some error So Data Not Properly Saved<h3>";
	mysqli_close($conn);
?>
<?PHP 
include('footer.php');
?>
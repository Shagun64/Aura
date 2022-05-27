<?php
$name= $_POST['name'];
$email= $_POST['email'];
$target = "pics/";
$target = $target . basename( $_FILES['Filename']['name']);
$Filename=basename( $_FILES['Filename']['name']);
//DATABASE CONNECTION
$conn =new mysqli('localhost','root','','submit');

if(move_uploaded_file($_FILES['Filename']['tmp_name'], $target)) {
	$insertData = "INSERT INTO submit(name,email,filename) Values('$name','$email','$Filename')";
$response = $conn->query($insertData);
if($response){
	header("location:copy.php?success");
}else{
print_r("Failed");
}

}else{
	echo "file upload failed";
}


?>

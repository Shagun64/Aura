<?php
$name= $_POST['Fname'];
$email= $_POST['Email'];
$num= $_POST['num'];
$msg=$_POST['msg'];
//DATABASE CONNECTION
$conn =new mysqli('localhost','root','','submit');
$insertData = "INSERT INTO submit(name,email,phone,YourMassage) Values('$name','$email','$num','$msg')";
$response = $conn->query($insertData);
if($response){
	header("location:form.php?success");
}else{
print_r("Failed");
}


?>

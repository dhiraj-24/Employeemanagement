<?php
include("app/model/config.php");

$user_type = 3; 
$name = $_POST['name'];
$designation = $_POST['designation'];
$mobile =$_POST['mobile'];
$email = $_POST['email'];
$address = $_POST['address'];
$dob = $_POST['dob'];
$doj = $_POST['doj']; 
$blood_group = $_POST['bloodgroup'];
$gender = $_POST['gender'];
$pasword = $_POST['password'];
if($_FILES["profile-pic"]["name"] !=''){
	$profilePicture = null;
	if ($_FILES["profile-pic"]["error"] == 0) {
		$profilePictureName = rand().'_'.$_FILES["profile-pic"]["name"];
		$profilePictureTmpName = $_FILES["profile-pic"]["tmp_name"];
		$profilePicturePath = "uploads/" . $profilePictureName; 
		move_uploaded_file($profilePictureTmpName, $profilePicturePath);
		$profilePicture = $profilePicturePath;
	}
}else{
	$profilePicture = $_POST['hideprofile'];
}
if($_FILES["signature"]["name"] !=''){
	$signature = null; 
	if ($_FILES["signature"]["error"] == 0) {
		$signatureName = rand().'_'.$_FILES["signature"]["name"];
		$signatureTmpName = $_FILES["signature"]["tmp_name"];
		$signaturePath = "uploads/" . $signatureName; 
		move_uploaded_file($signatureTmpName, $signaturePath);
		$signature = $signaturePath; 
	}
}
else{
	$signature = $_POST['hidesignature']; 
}
if($_POST['hideid'] !=''){
	$sql="UPDATE user_details SET name='$name', designation='$designation', mobile='$mobile', email='$email', address='$address', dob='$dob', doj='$doj', blood_group='$blood_group',signature='$signature',profile='$profilePicture',gender='$gender',pasword='$pasword' WHERE id='".$_POST['hideid']."'";
}else{
	$sql = "INSERT INTO user_details (user_type, name, designation, mobile, email, address, dob, doj, blood_group,signature,profile,gender,pasword)VALUES ('$user_type', '$name', '$designation', '$mobile', '$email', '$address', '$dob', '$doj', '$blood_group', '$signature', '$profilePicture','$gender','$pasword')";
}
// Execute the INSERT statement
if ($conn->query($sql) === TRUE) {
    echo 1;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
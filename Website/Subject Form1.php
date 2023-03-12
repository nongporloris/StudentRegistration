<?php
$con=mysqli_connect("localhost","root","","project"); 
if (mysqli_connect_errno()) { 
	echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
	}

if(!empty($_POST['Subject_ID']))
{
	echo "HEllo";

$Subject_ID = mysqli_real_escape_string($con, $_POST['Parent_ID_CardFather']);
$FirstNameFather = mysqli_real_escape_string($con, $_POST['FirstNameFather']); 
$LastNameFather = mysqli_real_escape_string($con, $_POST['LastNameFather']); 
$BirthDateFather = mysqli_real_escape_string($con, $_POST['BirthDateFather']);
$ReligionFather = mysqli_real_escape_string($con, $_POST['ReligionFather']);
$AddressFather = mysqli_real_escape_string($con, $_POST['AddressFather']);
$EmailFather = mysqli_real_escape_string($con, $_POST['EmailFather']); 
$PhoneNumberFather = mysqli_real_escape_string($con, $_POST['PhoneNumberFather']);


$sql1="INSERT INTO parent_profile (Parent_ID_Card,FirstName,LastName,DOB,Religion,Email,Phone) 
VALUES ('$Parent_ID_CardFather', '$FirstNameFather', '$LastNameFather', '$BirthDateFather', '$ReligionFather','$EmailFather','$PhoneNumberFather')";}

?>
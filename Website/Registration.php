<?php
$con=mysqli_connect("localhost","root","","project"); 
if (mysqli_connect_errno()) { 
	echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
	}

  if (!empty($_POST['S_ID_Number'])&&!empty($_POST['S_FirstName'])&&!empty($_POST['S_LastName'])&&!empty($_POST['S_Gender'])&&!empty($_POST['S_Nationality'])&&!empty($_POST['S_BirthDate'])&&!empty($_POST['S_ID_Number'])&&!empty($_POST['S_Religion'])&&!empty($_POST['S_Address'])&&!empty($_POST['S_Email'])&&!empty($_POST['S_PhoneNumber'])){
	
 $S_FirstName = mysqli_real_escape_string($con, $_POST['S_FirstName']); 
 $S_LastName = mysqli_real_escape_string($con, $_POST['S_LastName']); 
 $S_Gender = mysqli_real_escape_string($con, $_POST['S_Gender']);
 $S_Nationality = mysqli_real_escape_string($con, $_POST['S_Nationality']);
 $S_BirthDate = mysqli_real_escape_string($con, $_POST['S_BirthDate']);
 $S_ID_Number = mysqli_real_escape_string($con, $_POST['S_ID_Number']);
 $S_Religion = mysqli_real_escape_string($con, $_POST['S_Religion']);
 $S_Address = mysqli_real_escape_string($con, $_POST['S_Address']);
 $S_Email = mysqli_real_escape_string($con, $_POST['S_Email']); 
 $S_PhoneNumber = mysqli_real_escape_string($con, $_POST['S_PhoneNumber']);
 $S_Department = mysqli_real_escape_string($con, $_POST['S_Department']);
 $S_Faculty = mysqli_real_escape_string($con, $_POST['S_Faculty']);
 $S_Section = mysqli_real_escape_string($con, $_POST['S_Section']);
 $S_Year = mysqli_real_escape_string($con, $_POST['S_Year']);
 $S_Program = mysqli_real_escape_string($con, $_POST['S_Program']);


 $sql="INSERT INTO student_register (FirstName, LastName,DOB,ID_Card, Gender,Nationality,Address, Religion, Email ,Phone, Department, Faculty, Section, YearOfStudy, Program) 
 VALUES ('$S_FirstName', '$S_LastName','$S_BirthDate','$S_ID_Number', '$S_Gender', '$S_Nationality', '$S_Address', '$S_Religion', '$S_Email', '$S_PhoneNumber', '$S_Department', '$S_Faculty', '$S_Section', '$S_Year', '$S_Program')";

 if (!mysqli_query($con,$sql)) {
 	die('Error: ' . mysqli_error($con)); 
 	}
 }

 else if (empty($_POST['S_LastName'])){
	echo "You do not enter Last Names";
	echo "<br>";
	echo "Redirect back to Registration Page.....";
	header("refresh:2; url = http://localhost/Website/RegistrationForm1.html#section-pricing");
	} 
 else if(empty($_POST['S_FirstName'])){
	echo "You do not enter First Name";
	echo "<br>";
	echo "Redirect back to Registration Page.....";
	header("refresh:2; url = http://localhost/Website/RegistrationForm1.html#section-pricing");
	}
 else if (empty($_POST['S_ID_Number'])){
	echo "You do not enter ID-Number";
	echo "<br>";
	echo "Redirect back to Registration Page.....";
	header("refresh:2; url = http://localhost/Website/RegistrationForm1.html#section-pricing");
	}
else if (empty($_POST['S_Gender'])){
	echo "You do not choose Gender";
	echo "<br>";
	echo "Redirect back to Registration Page.....";
	header("refresh:2; url = http://localhost/Website/RegistrationForm1.html#section-pricing");
	}
 else if (empty($_POST['S_Nationality'])){
	echo "You do not enter Nationality";
	echo "<br>";
	echo "Redirect back to Registration Page.....";
	header("refresh:2; url = http://localhost/Website/RegistrationForm1.html#section-pricing");
	}
else if (empty($_POST['S_BirthDate'])){
	echo "You do not enter Birth Date";
	echo "<br>";
	echo "Redirect back to Registration Page.....";
	header("refresh:2; url = http://localhost/Website/RegistrationForm1.html#section-pricing");
	}
else if (empty($_POST['S_Address'])){
	echo "You do not enter Address";
	echo "<br>";
	echo "Redirect back to Registration Page.....";
	header("refresh:2; url = http://localhost/Website/RegistrationForm1.html#section-pricing");
	}
else if (empty($_POST['S_Email'])){
	echo "You do not enter E-mail";
	echo "<br>";
	echo "Redirect back to Registration Page.....";
	header("refresh:2; url = http://localhost/Website/RegistrationForm1.html#section-pricing");
	}
else if (empty($_POST['S_PhoneNumber'])){
	echo "You do not enter Phone Number";
	echo "<br>";
	echo "Redirect back to Registration Page.....";
	header("refresh:2; url = http://localhost/Website/RegistrationForm1.html#section-pricing");
	}
if (!empty($_POST['P1_ID_Number'])&&!empty($_POST['P1_FirstName'])&&!empty($_POST['P1_LastName'])&&!empty($_POST['P1_Gender'])&&!empty($_POST['P1_Nationality'])&&!empty($_POST['P1_BirthDate'])&&!empty($_POST['P1_ID_Number'])&&!empty($_POST['P1_Religion'])&&!empty($_POST['P1_Address'])&&!empty($_POST['P1_Email'])&&!empty($_POST['P1_PhoneNumber'])&&!empty($_POST['P1_Salary'])&&!empty($_POST['P1_Occupation'])&&!empty($_POST['P1_WorkPlace'])){
$P1_ID_Number = mysqli_real_escape_string($con, $_POST['P1_ID_Number']);
$P1_FirstName = mysqli_real_escape_string($con, $_POST['P1_FirstName']); 
$P1_LastName = mysqli_real_escape_string($con, $_POST['P1_LastName']); 
$P1_Gender = mysqli_real_escape_string($con, $_POST['P1_Gender']);
$P1_Nationality = mysqli_real_escape_string($con, $_POST['P1_Nationality']);
$P1_BirthDate = mysqli_real_escape_string($con, $_POST['P1_BirthDate']);
$P1_Religion = mysqli_real_escape_string($con, $_POST['P1_Religion']);
$P1_Address = mysqli_real_escape_string($con, $_POST['P1_Address']);
$P1_Email = mysqli_real_escape_string($con, $_POST['P1_Email']); 
$P1_PhoneNumber = mysqli_real_escape_string($con, $_POST['P1_PhoneNumber']);
$P1_Salary = mysqli_real_escape_string($con, $_POST['P1_Salary']);
$P1_Occupation = mysqli_real_escape_string($con, $_POST['P1_Occupation']);
$P1_WorkPlace = mysqli_real_escape_string($con, $_POST['P1_WorkPlace']);


$sql="INSERT INTO parent_profile (Parent_ID_Card,FirstName,LastName,Gender,Nationality,Address,DOB,Religion,Email,Salary,WorkPlace,Occupation,Phone) 
VALUES ('$P1_ID_Number', '$P1_FirstName', '$P1_LastName', '$P1_Gender','$P1_Nationality','$P1_Address', '$P1_BirthDate', '$P1_Religion','$P1_Email', '$P1_Salary','$P1_WorkPlace','$P1_Occupation','$P1_PhoneNumber')";

if (!mysqli_query($con,$sql)) {
	die('Error: ' . mysqli_error($con)); 
	}
}
 else if (empty($_POST['P1_LastName'])){
	echo "You do not enter Parent Last Names";
	echo "<br>";
	echo "Redirect back to Registration Page.....";
	header("refresh:2; url = http:http://localhost/Website/RegistrationForm1.html#section-pricing");
	} 
 else if(empty($_POST['P1_FirstName'])){
	echo "You do not enter Parent First Name";
	echo "<br>";
	echo "Redirect back to Registration Page.....";
	header("refresh:2; url = http://localhost/Website/RegistrationForm1.html#section-pricing");
	}
 else if (empty($_POST['P1_ID_Number'])){
	echo "You do not enter Parent ID-Number";
	echo "<br>";
	echo "Redirect back to Registration Page.....";
	header("refresh:2; url = http://localhost/Website/RegistrationForm1.html#section-pricing");
	}
else if (empty($_POST['P1_Gender'])){
	echo "You do not choose Parent Gender";
	echo "<br>";
	echo "Redirect back to Registration Page.....";
	header("refresh:2; url = http://localhost/Website/RegistrationForm1.html#section-pricing");
	}
 else if (empty($_POST['P1_Nationality'])){
	echo "You do not enter Parent Nationality";
	echo "<br>";
	echo "Redirect back to Registration Page.....";
	header("refresh:2; url = http://localhost/Website/RegistrationForm1.html#section-pricing");
	}
else if (empty($_POST['P1_BirthDate'])){
	echo "You do not enter Parent Birth Date";
	echo "<br>";
	echo "Redirect back to Registration Page.....";
	header("refresh:2; url = http://localhost/Website/RegistrationForm1.html#section-pricing");
	}
else if (empty($_POST['P1_Address'])){
	echo "You do not enter Parent Address";
	echo "<br>";
	echo "Redirect back to Registration Page.....";
	header("refresh:2; url = http://localhost/Website/RegistrationForm1.html#section-pricing");
	}
else if (empty($_POST['P1_Email'])){
	echo "You do not enter Parent E-mail";
	echo "<br>";
	echo "Redirect back to Registration Page.....";
	header("refresh:2; url = http://localhost/Website/RegistrationForm1.html#section-pricing");
	}
else if (empty($_POST['P1_Salary'])){
	echo "You do not enter Parent Salary";
	echo "<br>";
	echo "Redirect back to Registration Page.....";
	header("refresh:2; url = http://localhost/Website/RegistrationForm1.html#section-pricing");
	}
else if (empty($_POST['P1_WorkPlace'])){
	echo "You do not enter  Parent Work Place";
	echo "<br>";
	echo "Redirect back to Registration Page.....";
	header("refresh:2; url = http://localhost/Website/RegistrationForm1.html#section-pricing");
	}
else if (empty($_POST['P1_Occupation'])){
	echo "You do not enter Parent Occupation";
	echo "<br>";
	echo "Redirect back to Registration Page.....";
	header("refresh:2; url = http://localhost/Website/RegistrationForm1.html#section-pricing");
	}
else if (empty($_POST['P1_PhoneNumber'])){
	echo "You do not enter Phone Number";
	echo "<br>";
	echo "Redirect back to Registration Page.....";
	header("refresh:2; url = http://localhost/Website/RegistrationForm1.html#section-pricing");
	}


// if (!empty($_POST['P2_ID_Number'])&&!empty($_POST['P2_FirstName'])&&!empty($_POST['P2_LastName'])&&!empty($_POST['P2_Gender'])&&!empty($_POST['P2_Nationality'])&&!empty($_POST['P2_BirthDate'])&&!empty($_POST['P2_ID_Number'])&&!empty($_POST['P2_Religion'])&&!empty($_POST['P2_Address'])&&!empty($_POST['P2_Email'])&&!empty($_POST['P2_PhoneNumber'])&&!empty($_POST['P2_Salary'])&&!empty($_POST['P2_Occupation'])&&!empty($_POST['P2_WorkPlace'])){
$P2_ID_Number = mysqli_real_escape_string($con, $_POST['P2_ID_Number']);
$P2_FirstName = mysqli_real_escape_string($con, $_POST['P2_FirstName']); 
$P2_LastName = mysqli_real_escape_string($con, $_POST['P2_LastName']); 
$P2_Gender = mysqli_real_escape_string($con, $_POST['P2_Gender']);
$P2_Nationality = mysqli_real_escape_string($con, $_POST['P2_Nationality']);
$P2_BirthDate = mysqli_real_escape_string($con, $_POST['P2_BirthDate']);
$P2_Religion = mysqli_real_escape_string($con, $_POST['P2_Religion']);
$P2_Address = mysqli_real_escape_string($con, $_POST['P2_Address']);
$P2_Email = mysqli_real_escape_string($con, $_POST['P2_Email']); 
$P2_PhoneNumber = mysqli_real_escape_string($con, $_POST['P2_PhoneNumber']);
$P2_Salary = mysqli_real_escape_string($con, $_POST['P2_Salary']);
$P2_Occupation = mysqli_real_escape_string($con, $_POST['P2_Occupation']);
$P2_WorkPlace = mysqli_real_escape_string($con, $_POST['P2_WorkPlace']);


$sql="INSERT INTO parent_profile (Parent_ID_Card,FirstName,LastName,Gender,Nationality,Address,DOB,Religion,Email,Salary,WorkPlace,Occupation,Phone) 
VALUES ('$P2_ID_Number', '$P2_FirstName', '$P2_LastName', '$P2_Gender','$P2_Nationality','$P2_Address', '$P2_BirthDate', '$P2_Religion','$P2_Email', '$P2_Salary', '$P2_WorkPlace','$P2_Occupation','$P2_PhoneNumber')";

 

if (!mysqli_query($con,$sql)) {
	die('Error: ' . mysqli_error($con)); 
	}
//}
//  else if (empty($_POST['P2_LastName'])){
// 	echo "You do not enter Parent Last Names";
// 	echo "<br>";
// 	echo "Redirect back to Registration Page.....";
// 	header("refresh:2; url = http://localhost/Website/RegistrationForm1.html#section-pricing");
// 	} 
//  else if(empty($_POST['P2_FirstName'])){
// 	echo "You do not enter Parent First Name";
// 	echo "<br>";
// 	echo "Redirect back to Registration Page.....";
// 	header("refresh:2; url = http://localhost/Website/RegistrationForm1.html#section-pricing");
// 	}
//  else if (empty($_POST['P2_ID_Number'])){
// 	echo "You do not enter Parent ID-Number";
// 	echo "<br>";
// 	echo "Redirect back to Registration Page.....";
// 	header("refresh:2; url = http://localhost/Website/RegistrationForm1.html#section-pricing");
// 	}
// else if (empty($_POST['P2_Gender'])){
// 	echo "You do not choose Parent Gender";
// 	echo "<br>";
// 	echo "Redirect back to Registration Page.....";
// 	header("refresh:2; url = http://localhost/Website/RegistrationForm1.html#section-pricing");
// 	}
//  else if (empty($_POST['P2_Nationality'])){
// 	echo "You do not enter Parent Nationality";
// 	echo "<br>";
// 	echo "Redirect back to Registration Page.....";
// 	header("refresh:2; url = http://localhost/Website/RegistrationForm1.html#section-pricing");
// 	}
// else if (empty($_POST['P2_BirthDate'])){
// 	echo "You do not enter Parent Birth Date";
// 	echo "<br>";
// 	echo "Redirect back to Registration Page.....";
// 	header("refresh:2; url = http://localhost/Website/RegistrationForm1.html#section-pricing");
// 	}
// else if (empty($_POST['P2_Address'])){
// 	echo "You do not enter Parent Address";
// 	echo "<br>";
// 	echo "Redirect back to Registration Page.....";
// 	header("refresh:2; url = http://localhost/Test/RegistrationForm1.html");
// 	}
// else if (empty($_POST['P2_Email'])){
// 	echo "You do not enter Parent E-mail";
// 	echo "<br>";
// 	echo "Redirect back to Registration Page.....";
// 	header("refresh:2; url = http://localhost/Test/RegistrationForm1.html");
// 	}
// else if (empty($_POST['P2_Salary'])){
// 	echo "You do not enter Parent Salary";
// 	echo "<br>";
// 	echo "Redirect back to Registration Page.....";
// 	header("refresh:2; url = http://localhost/Test/RegistrationForm1.html");
// 	}
// else if (empty($_POST['P2_WorkPlace'])){
// 	echo "You do not enter  Parent Work Place";
// 	echo "<br>";
// 	echo "Redirect back to Registration Page.....";
// 	header("refresh:2; url = http://localhost/Test/RegistrationForm1.html");
// 	}
// else if (empty($_POST['P2_Occupation'])){
// 	echo "You do not enter Parent Occupation";
// 	echo "<br>";
// 	echo "Redirect back to Registration Page.....";
// 	header("refresh:2; url = http://localhost/Test/RegistrationForm1.html");
// 	}
// else if (empty($_POST['P2_PhoneNumber'])){
// 	echo "You do not enter Phone Number";
// 	echo "<br>";
// 	echo "Redirect back to Registration Page.....";
// 	header("refresh:2; url = http://localhost/Test/RegistrationForm1.html");
// 	}

else{
header("refresh:2; url = http://localhost/Website/RegistrationForm2.html");
}

echo "added 1";
mysqli_close($con);
?>  
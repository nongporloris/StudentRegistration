<?php

	$con=mysqli_connect("localhost","root","","Project"); 
	if (!$con) {
    	die('Could not connect: ' . mysqli_error($con));
	}

if(!empty($_POST['SubjectID'])&&!empty($_POST['TeacherName'])&&!empty($_POST['StudentID'])&&!empty($_POST['Section'])&&!empty($_POST['StudentGrade'])&&!empty($_POST['SectionMean'])&&!empty($_POST['SectionMaxScore'])&&!empty($_POST['SectionMinScore'])&&!empty($_POST['SectionSD'])&&!empty($_POST['SectionMedian'])){
	

	
		$SubjectID = mysqli_real_escape_string($con,$_POST['SubjectID']);
		$TeacherName = mysqli_real_escape_string($con,$_POST['TeacherName']);
		$StudentID = mysqli_real_escape_string($con,$_POST['StudentID']);
		$Section =mysqli_real_escape_string($con,$_POST['Section']);
		$Grade = mysqli_real_escape_string($con,$_POST['StudentGrade']);
		$Mean = mysqli_real_escape_string($con,$_POST['SectionMean']);
		$MaxScore = mysqli_real_escape_string($con,$_POST['SectionMaxScore']);
		$MinScore = mysqli_real_escape_string($con,$_POST['SectionMinScore']);
		$SD = mysqli_real_escape_string($con,$_POST['SectionSD']);
		$Median = mysqli_real_escape_string($con,$_POST['SectionMedian']);
		

		$sql = "INSERT INTO section(Subject_Code, Section, Grade, Mean, Max_Score, Min_Score, SD, Median, Teacher, StudentID)
				VALUES ('$SubjectID', '$Section', '$Grade', '$Mean', '$MaxScore', '$MinScore', '$SD', '$Median', '$TeacherName', '$StudentID')";


		if ($con->query($sql) === TRUE) {
	    echo "New record created successfully";
		} else {
	    echo "Error: " . $sql . "<br>" . $con->error;
		}
	}

 else if (empty($_POST['SubjectID'])){
	echo "Please Enter Subject Code";
	header("refresh:2; url = http://localhost/Website/GradeAdding.html#section-pricing");	
	} 
 else if(empty($_POST['TeacherName'])){
	echo "Please Enter Teacher Name ";
	header("refresh:2; url = http://localhost/Website/GradeAdding.html#section-pricing");
	
	}
 else if (empty($_POST['StudentID'])){
	echo "Please Enter Student ID ";
	header("refresh:2; url = http://localhost/Website/GradeAdding.html#section-pricing");
	
	}
else if (empty($_POST['Section'])){
	echo "Please Enter Section";
	header("refresh:2; url = http://localhost/Website/GradeAdding.html#section-pricing");
	
	}
 else if (empty($_POST['StudentGrade'])){
	echo "Please Enter Grade";
	header("refresh:2; url = http://localhost/Website/GradeAdding.html#section-pricing");
	
	}
else if (empty($_POST['SectionMean'])){
	echo "Please Enter Mean Score";
	header("refresh:2; url = http://localhost/Website/GradeAdding.html#section-pricing");
	
	}
else if (empty($_POST['SectionMaxScore'])){
	echo "Please Enter Max Score";
	header("refresh:2; url = http://localhost/Website/GradeAdding.html#section-pricing");
	
	
	}
else if (empty($_POST['SectionMinScore'])){
	echo "Please Enter Min Score";
	header("refresh:2; url = http://localhost/Website/GradeAdding.html#section-pricing");
	
	}
else if (empty($_POST['SectionSD'])){
	echo "Please Enter Standard Deviation";
	header("refresh:2; url = http://localhost/Website/GradeAdding.html#section-pricing");
	
	}
else if (empty($_POST['SectionMedian'])){
	echo "Please Enter Median Score";
	header("refresh:2; url = http://localhost/Website/GradeAdding.html#section-pricing");
	
	}

	header("refresh:1; url = http://localhost/Website/AdminForm.html");
	mysqli_close($con);

?>
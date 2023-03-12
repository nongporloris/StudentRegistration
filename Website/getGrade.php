<?php
$q = $_GET['q'];

$con=mysqli_connect("localhost","root","","project"); 
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

$sql="SELECT * FROM section WHERE StudentID = '".$q."'";
// -- $sql3="SELECT * FROM section WHERE StudentID = '".$q."'";
$result = mysqli_query($con,$sql);

// $result3 = mysqli_query($con,$sql3);


while($row = mysqli_fetch_array($result)) {
	
	$sql2="SELECT subject.SubjectName As SubjectName, section.Section As Section, section.Grade As Grade FROM subject INNER JOIN section ON subject.Subject_Code = section.Subject_Code WHERE section.Subject_Code = '".$row['Subject_Code']."'";
	
	$result2 = mysqli_query($con,$sql2);
	while($row2 = mysqli_fetch_array($result2)) {
	echo "<tr>";
	echo "<td>".$row2['SubjectName']."</td>";
	echo "<td>".$row2['Section']."</td>";
	echo "<td>".$row2['Grade']."</td>";
	
	echo "</tr>";
	break;
}

}





mysqli_close($con);
?>
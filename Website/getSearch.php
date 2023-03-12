<?php
$q = $_GET['q'];

$con=mysqli_connect("localhost","root","","project"); 
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

$sql="SELECT * FROM subject WHERE Subject_Code = '".$q."'";
$result = mysqli_query($con,$sql);


echo"<table id='subjectQue'>";
while($row = mysqli_fetch_array($result)) {
	
    echo "<tr>";
    echo "<td><input type='radio'name='sel' value='".$row['SubjectID']."'/></td>";
    // echo "<td>".$row['SubjectID']."</td>";
    echo "<td>".$row['Section']."</td>";
    echo "<td>".$row['Program']."</td>";
    echo "<td>".$row['SubjectName']."</td>";
    echo "<td>".$row['Teacher']."</td>";
    echo "<td>".$row['Credit']."</td>";
    echo "<td>".$row['Volume']."</td>";
    // echo "<td>".$row['Price']."</td>";
	echo "</tr>";

    //echo $row['Subject_Code'];
}
echo "</table>";

mysqli_close($con);

?>
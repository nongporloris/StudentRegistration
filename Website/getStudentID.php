<?php
$q = $_GET['q'];

$con=mysqli_connect("localhost","root","","project"); 
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

$sql="SELECT Student_ID FROM student_register WHERE Student_ID = '".$q."'";
$result = mysqli_query($con,$sql);


while($row = mysqli_fetch_array($result)) {
    echo $row['Student_ID'];
}
mysqli_close($con);
?>
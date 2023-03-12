<?php
$q = $_GET['q'];

$con=mysqli_connect("localhost","root","","project"); 
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

$sql="SELECT * FROM open_section WHERE BookingID = '".$q."'";
$result = mysqli_query($con,$sql);


while($row = mysqli_fetch_array($result)) {
    echo $row['TeacherName'];
}
mysqli_close($con);
?>
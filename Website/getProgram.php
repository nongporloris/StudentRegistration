<?php
$q = $_GET['q'];
$p = $_GET['p'];
$w = $_GET['w'];
$con=mysqli_connect("localhost","root","","project"); 
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

echo $p;
$sql="SELECT * FROM subject WHERE Subject_Code = '".$q."'";
$result = mysqli_query($con,$sql);
/**$result = mysqli_query($con,$sql);


while($row = mysqli_fetch_array($result)) {
    echo $row['Program'];
}**/
mysqli_close($con);
?>
<?php
$q = $_GET['q'];

$con=mysqli_connect("localhost","root","","project"); 
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

$sql="SELECT * FROM subject WHERE Subject_Code = '".$q."'";
$result = mysqli_query($con,$sql);



while($row = mysqli_fetch_array($result)) {
    echo "<a href='#' onclick=querySubject()>".$row['Subject_Code']." - ".$row['SubjectName']."</a>";
    break;
}
mysqli_close($con);
?>
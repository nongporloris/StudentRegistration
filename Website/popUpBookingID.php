<?php
$a = $_GET['SubjectName'];
$b = $_GET['SubjectID'];
$c = $_GET['SubjectTeacher'];
$d = $_GET['Program'];
$e = $_GET['SubjectSection'];
$f = $_GET['SubjectCredit'];
$g = $_GET['Seat'];
$h = $_GET['Price'];

$con=mysqli_connect("localhost","root","","project"); 
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

$a = str_replace("'", '', $a);
$b = str_replace("'", '', $b);
$c = str_replace("'", '', $c);
$d = str_replace("'", '', $d);
$e = str_replace("'", '', $e);
$f = str_replace("'", '', $f);
$g = str_replace("'", '', $g);
$h = str_replace("'", '', $h);



$sql = sprintf("SELECT * FROM open_section WHERE Subject ='%s' AND Subject_ID='%s' AND TeacherName='%s' AND Program='%s' AND Section='%s' AND Credit='%s'AND Price='%s'" ,
   $a,$b,$c,$d,$e,$f,$h);

$result = mysqli_query($con,$sql);
// echo $sql;

while($row = mysqli_fetch_array($result)){
    $row['BookingID'];
    $BookingID = $row['BookingID'];
}



mysqli_close($con);
?>
 <!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#dialog" ).dialog();
  } );
  </script>
	
</head>
<body>
	<div id="dialog" title="Your BookingID:">
  <p><?php echo $BookingID;?></p>
</div>

</body>
</html>
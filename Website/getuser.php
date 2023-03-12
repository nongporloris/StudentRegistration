

<?php
$q = $_GET['q'];

$con=mysqli_connect("localhost","root","","project"); 
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

$sql="SELECT * FROM subject WHERE SubjectID = '".$q."'";
$result = mysqli_query($con,$sql);

$sumPrice = "SELECT SUM(Price) AS totalPrice FROM Price WHERE Subject_Code = '".$q."'";
$result2 = mysqli_query($con,$sumPrice);




while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['Subject_Code'] . "</td>";
    echo "<td>" . $row['Section'] . "</td>";
    echo "<td>" . $row['Program'] . "</td>";
    echo "<td>" . $row['SubjectName'] . "</td>";
    echo "<td>" . $row['Teacher'] . "</td>";
    echo "<td>" . $row['Credit'] . "</td>";
    echo "<td>" . $row['Volume'] . "</td>";
    echo "<td>" . $row['Price'] . "</td>";
    echo "<td>Delete SubjectID:<input class='remove' type='button' onclick='deleteEle(this,this.value)' value='".$q."'></input></td>";
    echo "<td></td>";
    echo "</tr>";
    
}
while ($row1 = mysqli_fetch_array($result2)) {
// $sum = $row['sumPrice']; 
    echo "I'm here";
    echo "<tr>";
    echo "<td>" . $row1['Price'] . "</td>";

    echo "</tr>";

}
    // if ($row['Subject_Code'] == "-") {
    //     # code...
        // echo "<td>" . $sum . "</td>";
    // }

    
    
mysqli_close($con);
?>

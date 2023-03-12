<!DOCTYPE html>
<html>
<head>
    <title>Hogwarts University</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="style.css">
<style>
   body 
   {
      background: url(images/wallpaper.jpg);
      background-size: cover;
      background-position: center;
   }   
   #table-scroll 
   {
      width:100%;
      overflow:auto;  
      margin-top:20px;
   }   
   table 
   {
      width:300%;
   }
   table, th, td 
   {
      border: 1px solid black;
      border-collapse: collapse;
   }
   th, td 
   {
      padding: 15px;
      text-align: center; 
   } 
   table#t01 tr:nth-child(even) 
   {
      background-color: #eee; 
   }
   table#t01 tr:nth-child(odd) 
   {
      background-color: #fff;
   }
   table#t01 th 
   {
      background-color: black;
      color: white;
   } 
</style>
</head>
<body class="single-page">
<form>
   <div class="contact-form">
      <div class="container">
         <div class="row align-items-center justify-content-center">
            <br><br><br><br><br><br><br><br>
            <img src="images/student.jpg" width="250" height="110">
            <div class="col-12">
               <br>
               <div class="opening-hours h-100">
                  <h2 class="d-flex align-items-center">Student Profile</h2>
                  <ul class="p-0 m-0">
                   <div id="table-scroll">
<table id="t01">
    <tr>
        <th> FirstName</th>
        <th> LastName</th>
        <th> DOB</th>
        <th> Gender</th>
        <th> Nationality</th>
        <th> Religion</th>
        <th> Address</th>
        <th> Email</th>
        <th> Phone</th>
        <th> YearOfStudey</th>
        <th> Faculty</th>
        <th> Department</th>
        <th> Section</th>
        <th> Program</th>
    </tr>
    
    <?php
$con = mysqli_connect("localhost","root","","project"); 
if (mysqli_connect_error()) { 
    echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
    }
    $Student_ID = mysqli_real_escape_string($con, $_POST['Student_ID']);
    $sql = "SELECT * from student_register WHERE Student_ID ='$Student_ID'";
    $qurrey = mysqli_query($con,$sql);
    
        while ($result = mysqli_fetch_array($qurrey,MYSQLI_ASSOC) ) {
            echo "<tr><td>". $result["FirstName"]."</td><td>". $result["LastName"] . "</td><td>". $result["DOB"] . "</td><td>". $result["Gender"] . "</td><td>". $result["Nationality"] . "</td><td>". $result["Religion"] . "</td><td>". $result["Address"] . "</td><td>". $result["Email"] . "</td><td>". $result["Phone"] . "</td><td>". $result["YearOfStudy"] . "</td><td>". $result["Faculty"] . "</td><td>". $result["Department"] . "</td><td>". $result["Section"] . "</td><td>". $result["Program"] . "</td></tr>";

        }
    echo "</table>";
   // }
    $con -> close();
    ?>
                  </div>     
                  </table>
                  <br><br>  
                  </ul>
                  <div class="row align-items-center justify-content-center">
                     <input type="button" value="BACK" onclick="window.location='http://localhost/Website/HomeForm.html'" class="d-inline-block button gradient-bg">
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <input type="button" value="EDIT" onclick="window.location='http://localhost/Website/RegistrationForm1.html'" class="d-inline-block button gradient-bg">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <p class="mb-4 text-center">CPE231: Student Registration 1</p>
</form>            
</body>
</html>
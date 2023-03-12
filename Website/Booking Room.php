<?php

    $con=mysqli_connect("localhost","root","","project"); 
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }

    error_reporting(E_ALL);
    ini_set('display_errors',1);

    $sql1="SELECT * FROM room";

    $sql2 = "SELECT * FROM open_section";

    $result=mysqli_query($con,$sql1);

    $result2=mysqli_query($con,$sql2);
        



?>


<!DOCTYPE html>
<html lang="en">
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
   table 
   {
      width:100%;
   }
   table, th, td 
   {
      border: 1px solid black;
      border-collapse: collapse;
   }
   th, td 
   {
      padding: 5px;
      /*margin: 5px;*/
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
<script type="text/javascript">
    
    function show(str){
    if (str==""){
        document.getElementById("building").innerHTML="";
        return;
    } 
    
    
        if (window.XMLHttpRequest){
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        }else{ // code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        
        xmlhttp.onreadystatechange=function(){
        if (this.readyState==4 && this.status==200){
            document.getElementById("building").innerHTML = this.responseText;
            document.getElementById("buildingInput").value = this.responseText;

        }
        }
        xmlhttp.open("GET","getBuilding.php?q="+str,true);
        xmlhttp.send();
    }
    
    function showBookingID(str){
    if (str==""){
        document.getElementById("teacherName").innerHTML="";
        return;
    } 
    
    
        if (window.XMLHttpRequest){
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        }else{ // code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        
        xmlhttp.onreadystatechange=function(){
        if (this.readyState==4 && this.status==200){
            document.getElementById("teacherName").innerHTML = this.responseText;

        }
        }
        xmlhttp.open("GET","getTeacherName.php?q="+str,true);
        xmlhttp.send();
    }

    function showsubjectID(str){
    if (str==""){
        document.getElementById("subjectID").innerHTML="";
        return;
    } 
    
    
        if (window.XMLHttpRequest){
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        }else{ // code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        
        xmlhttp.onreadystatechange=function(){
        if (this.readyState==4 && this.status==200){
            document.getElementById("subjectID").innerHTML = this.responseText;
            // document.getElementById("buildingInput").value = this.responseText;

        }
        }
        xmlhttp.open("GET","getSubjectID.php?q="+str,true);
        xmlhttp.send();
    }

    function showsection(str){
    if (str==""){
        document.getElementById("section").innerHTML="";
        return;
    } 
    
    
        if (window.XMLHttpRequest){
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        }else{ // code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        
        xmlhttp.onreadystatechange=function(){
        if (this.readyState==4 && this.status==200){
            document.getElementById("section").innerHTML = this.responseText;
            // document.getElementById("buildingInput").value = this.responseText;

        }
        }
        xmlhttp.open("GET","getSection.php?q="+str,true);
        xmlhttp.send();
    }

</script>
</head>
<body class="single-page">
<form action="BookingRoom.php" method="post">
   <div class="contact-form">
      <div class="container">
         <div class="row align-items-center justify-content-center">
		    <br><br><br><br><br><br><br><br>
		    <img src="building.jpg" width="250" height="200">
            <div class="col-12">
		       <br>
               <div class="opening-hours h-100">
                  <h2 class="d-flex align-items-center">Room Booking</h2>
                  <ul class="p-0 m-0">
                   <table id="t01">
                      <tr>
                         <th>Room Number</th>
                         <th>Building</th> 
                         <th>Day</th>  
                         <th>Time</th> 
                         <th>Booking ID</th>
                         <th>Teacher Name</th>
                         <th>Subject ID</th>
                         <th>Section</th>
                         
                         	  
                      </tr>
                      <tr>
                        <td>
                            <select id="RoomNumber" name="RoomNumber" onchange="show(this.value)">
                                <option selected value="base">Please Select</option>
                                
                                <?php 
                            // output data of each row
                                while($row=mysqli_fetch_row($result)){
                                   echo "<option value='".$row[0]. "'>".$row[0]."</option>";
                                    }
                                ?>

                            </select>

                            
                        </td>
                        
                        <td>  
                               <p id="building"></p>
                               <input name="Building" id="buildingInput" value="" type="hidden"/>
                               
                        </td>
                        
                        <td>
                            <select id="Day" name = "Day">
                                <option>Please Select</option>
                                <option value= "Monday">Monday</option>
                                <option value= "Tuesday">Tuesday</option>
                                <option value= "Wednesday">Wednesday</option>
                                <option value= "Thursday">Thursday</option>
                                <option value= "Friday">Friday</option>
                                <option value= "Saturday">Saturday</option>


                                <!-- <option selected value="base">Please Select</option>
                                <?php foreach($eachlines2 as $lines){ //add php code here
                                    // echo "<option value='".$lines."'>$lines</option>";
                                }?> -->
                            </select>
                        </td>
                        
                        <td>
                            <select id="Time" name="Time">
                                <option>Please Select</option>
                                <option value= "08.30 - 10.2">08.30 - 10.20</option>
                                <option value= "08.30 - 11.20">08.30 - 11.20</option>
                                <option value= "08.30 - 12.20">08.30 - 12.20</option>
                                <option value= "9.30 - 11.20">9.30 - 11.20</option>
                                <option value= "9.30 - 12.20">9.30 - 12.20</option>
                                <option value= "10.30 - 12.20">10.30 - 12.20</option>
                                <option value= "13.30 - 15.20">13.30 - 15.20</option>
                                <option value= "13.30 - 16.20">13.30 - 16.20</option>
                                <option value= "13.30 - 17.20">13.30 - 17.20</option>
                                <option value= "14.30 - 16.20">14.30 - 16.20</option>
                                <option value= "14.30 - 17.20">14.30 - 17.20</option>
                                <option value= "14.30 - 18.20">14.30 - 18.20</option>
                                <option value= "15.30 - 17.20">15.30 - 17.20</option>
                                <option value= "15.30 - 18.20">15.30 - 18.20</option>
                                <option value= "15.30 - 19.20">15.30 - 19.20</option>
                                <option value= "16.30 - 18.20">16.30 - 18.20</option>
                            </select>
                        </td>                        

                        <td>
                            <select id="BookingID" name="BookingID" onchange="showBookingID(this.value);showsubjectID(this.value);showsection(this.value);">
                                <option selected value="base">Please Select</option>
                                
                                <?php 
                            // output data of each row
                                while($row=mysqli_fetch_row($result2)){
                                   echo "<option value='".$row[0]. "'>".$row[0]."</option>";
                                    }
                                ?>
                            </select>
                        </td>
                        

                        <td>
                            <!-- <input type="text" name="TeacherName">  -->
                            <p id = "teacherName"></p>
                        </td>

                        <td>
                            <p id = "subjectID"></p> 
                        </td>
                        


                        <td>
                            

                            <p id="section"></p>

                            <!-- <select id="SubjectSection" name="SubjectSection">
                                <option>Please Select</option>
                                <option name="SubjectSection" value="A">A</option>
                                <option name="SubjectSection" value="B">B</option>
                                <option name="SubjectSection" value="C">C</option>
                                <option name="SubjectSection" value="D">D</option>
                            </select> -->
                        </td>
                     
                     </tr>

                  </table>
				  <br><br>
				  <div class="row align-items-center justify-content-center">
				  	<button type="submit" class="d-inline-block button gradient-bg">CONFIRM</button>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <a class="d-inline-block button gradient-bg" href="http://localhost/Website/AdminForm.html">CANCEL</a>
					 
				  </div>	
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
   <p class="mb-4 text-center">CPE231: Student Registration 1</p>
</form>            
</body>
</html>
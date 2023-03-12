<?php
$con=mysqli_connect("localhost","root","","project"); 
if (mysqli_connect_errno()) { 
    echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
}


$sql1="SELECT * FROM section";

$result=mysqli_query($con,$sql1);
$result2=mysqli_query($con,$sql1);


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
   table#t02 tr
   {
      background-color: #fefbd8;
   } 
</style>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<script>


function showGrade() {
    x = document.getElementById("studentID").value;
     if (x==""){
        document.getElementById("showgrade").innerHTML="";
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
          
            $("#t01").append(this.responseText);

        }
        }
        xmlhttp.open("GET","getGrade.php?q="+x,true);
        xmlhttp.send();
}



</script>



</head>
<body class="single-page">
<form action="Subject.php" method="post">
   <div class="contact-form">
      <div class="container">
         <div class="row align-items-center justify-content-center">
		    <br><br><br><br><br><br><br><br>
		    <img src="images/subject.jpg" width="250" height="110">
            <div class="col-12">
		       <br>

                <div class="opening-hours h-100">
                <table id="t02">
                <th>Student ID <input type="input" name="studentID" id="studentID"><button type="button" onclick="showGrade();">Search</button></th>
                </table>
              	<h2 class="d-flex align-items-center">Grade Result</h2>
              	<ul class="p-0 m-0">
              	<table id="t01">
                     <tr>
                        
                        
                        <th>Subject Name</th> 
                        <th>Section</th>
                        <th>Grade</th>
                        
                       
                     </tr>


            	
            		<table id="t02">
            		<tr>
				        
   				</tr>  
          			</table>
            
    			</table>
    			<br>
    		<div class="row align-items-center justify-content-center">
				     <a class="d-inline-block button gradient-bg" href="http://localhost/Website/HomeForm.html">HOME</a>
					 
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








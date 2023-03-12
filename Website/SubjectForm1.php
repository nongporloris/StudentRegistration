<?php
$con=mysqli_connect("localhost","root","","project"); 
if (mysqli_connect_errno()) { 
    echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
}

if(!empty($_POST['Subject_ID']))
{
    echo "HEllo";
}

$sql1="SELECT * FROM subject";

$sql2 = "SELECT StudentID FROM student_register";

$result=mysqli_query($con,$sql1);
$result3=mysqli_query($con,$sql1);
$result4=mysqli_query($con,$sql1);


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
    <!-- BOOTSTRAP -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <!-- END BOOTSTRAP -->
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

    table#addSubject tr:nth-child(even) 
   {
      background-color: #eee; 
   }
   table#addSubject tr:nth-child(odd) 
   {
      background-color: #fff;

   }
   table#addSubject th 
   {
      background-color: black;
      color: white;
   }

</style>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<script>
var selected = [];
var selected2 = [];
var selected3 = [];
var credit = 0;
var price = 0;
var Subject_ID = "";
var Section = "";
var Program = "";
var subjectID = [];
var studentID = 0;



function showConsole(str){
    selected2.push(str);
    if (str==""){
        document.getElementById("Subject").innerHTML="";
        return;
    } 
    
    if(selected2.length != 1){
        for (var i = 0; i < selected2.length - 1; i++){
            if(selected2[i] == str){
                flag = 1;
                window.alert("This subject has been selected");
                break;
            }else{
                flag = -1;
            }
        }
    }else{
        flag = -1;

    }

    if(flag == -1){
        if (window.XMLHttpRequest){
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        }else{ // code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        
        xmlhttp.onreadystatechange=function(){
            if (this.readyState==4 && this.status==200){
                credit += parseInt(this.responseText);
                showUser(str,credit);
                showPrice(str,credit);
                
                if(credit > 21){
                    window.alert("Credit must less than 21");
                    credit -= parseInt(this.responseText);
                }
                document.getElementById("credit").innerHTML = credit;
            }
        }
        xmlhttp.open("GET","getCredit.php?q="+str,true);
        xmlhttp.send();
            
    }
   

}

function showUser(str,credit1){
    selected.push(str);
    if (str==""){
        document.getElementById("Subject").innerHTML="";
        return;
    } 
    if(selected.length != 1){
        for (var i = 0; i < selected.length - 1; i++){
            if(selected[i] == str){
                flag = 1;
                
                break;
            }else{
                flag = -1;
            }
        }
    }else{
        flag = -1;
    }
    if(flag == - 1 && credit1 <= 21){
        if (window.XMLHttpRequest){
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        }else{ // code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        
        xmlhttp.onreadystatechange=function(){
        if (this.readyState==4 && this.status==200){
            // document.getElementById("tr1").innerHTML = this.responseText;
            $("#t01").append(this.responseText);

        }
        }
        xmlhttp.open("GET","getuser.php?q="+str,true);
        xmlhttp.send();
    }
    
}

function showPrice(str,credit1){
    selected3.push(str);
    if (str==""){
        document.getElementById("Subject").innerHTML="";
        return;
    } 
    if(selected3.length != 1){
        for (var i = 0; i < selected.length - 1; i++){
            if(selected[i] == str){
                flag = 1;
                
                break;
            }else{
                flag = -1;
            }
        }
    }else{
        flag = -1;
    }
    if(flag == - 1 && credit1 <= 21){
        if (window.XMLHttpRequest){
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        }else{ // code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        
        xmlhttp.onreadystatechange=function(){
            if (this.readyState==4 && this.status==200){
                // document.getElementById("tr1").innerHTML = this.responseText;
                price += parseInt(this.responseText);
                console.log(price);
                document.getElementById("Price").innerHTML = price;
            }
        }
        xmlhttp.open("GET","getPrice.php?q="+str,true);
        xmlhttp.send();
    }    
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

        }
        }
        xmlhttp.open("GET","getSectionSubject.php?q="+str,true);
        xmlhttp.send();
    }

function showProgram(str){
    if (str==""){
        document.getElementById("program").innerHTML="";
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
            document.getElementById("program").innerHTML = this.responseText;

        }
        }
        xmlhttp.open("GET","getProgram.php?q="+str,true);
        xmlhttp.send();
    }

function deleteEle(e,value){
    

    flag1 = -1;
    flag = -1;

        if (window.XMLHttpRequest){
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        }else{ // code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        
        xmlhttp.onreadystatechange=function(){
        if (this.readyState==4 && this.status==200){
     			price -= parseInt(this.responseText);
      			document.getElementById("Price").innerHTML = price;
      			displayCredit(value);

        	}
        }
        xmlhttp.open("GET","getPrice.php?q="+value,true);
        xmlhttp.send();
   
     	e.parentNode.parentNode.remove();
}





function displayCredit(value) {
    //document.getElementById("credit").innerHTML = credit;
    if (window.XMLHttpRequest){
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        }else{ // code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        
        xmlhttp.onreadystatechange=function(){
        if (this.readyState==4 && this.status==200){
     			credit -= parseInt(this.responseText);
      			document.getElementById("credit").innerHTML = credit;


        	}
        }
        xmlhttp.open("GET","getCredit.php?q="+value,true);
        xmlhttp.send();

}
function displayPrice(price) {
        if (flag1 == -1) {
     price -= parseInt(this.responseText);
    }
    console.log(flag1);
      //

    document.getElementById("Price").innerHTML = price;

}


function querySubject() {
	x = document.getElementById("searchInput").value;
	console.log(x);

	if (window.XMLHttpRequest){
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        }else{ // code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        
        xmlhttp.onreadystatechange=function(){
        if (this.readyState==4 && this.status==200){
            //$("#addSubject").append(this.responseText);

            document.getElementById("test").innerHTML = this.responseText;

        }
        }
        xmlhttp.open("GET","getSearch.php?q="+x,true);

        xmlhttp.send();
}

function getVal(str){
    if (str==""){
        document.getElementById("information").innerHTML="";
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
            document.getElementById("information").innerHTML = this.responseText;
            // document.getElementById("buildingInput").value = this.responseText;

        }
        }
        xmlhttp.open("GET","getInformationInput.php?q="+str,true);
        xmlhttp.send();
    }	


</script>

<script>
function showResult(str) {
  if (str.length==0) { 
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","search.php?q="+str,true);
  xmlhttp.send();
}




</script>

<script type="text/javascript">
	function insertData(){
		var radioValue = $("input[name='sel']:checked").val();
		console.log(radioValue);
		showConsole(radioValue,credit);
		subjectID.push(radioValue);
	}
	function keepStudentval(val) {
		studentID = val;
	}

	function insertAllData() {
		if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
     
    if (this.readyState==4 && this.status==200) {
      //document.getElementById("test2").innerHTML=this.responseText;
     
    }
  }
  alert("Registration sucess!");
      window.location.href = 'http://localhost/Website/HomeForm.html';
  xmlhttp.open("GET","Subject.php?q="+studentID+"&w="+subjectID,true);
  xmlhttp.send();
	}
</script>


</head>
<body class="single-page">
<form>
   <div class="contact-form">
      <div class="container">
         <div class="row align-items-center justify-content-center">
		    <br><br><br><br><br><br><br><br>
		    <img src="images/subject.jpg" width="250" height="110">
            <div class="col-12">
		       <br>
				<div class="opening-hours h-100">
              	<h2 class="d-flex align-items-center">Subject Registration</h2>
              	<br>
              	<br>
              	<ul class="p-0 m-0">
              	<table id="t01">
                     <tr>
                        
                        <th>Subject ID</th>
                        <th>Section</th>
                        <th>Program</th>
                        <th>Subject Name</th> 
                        <th>Teacher Name</th>	
                        <th>Credit</th>
                        <th>Volume</th>
                     	<th>Price</th>
                     	<th>Edit<p id="program"></p></th>
                     	<th>
                     		<input type="text" style="width:100px;" placeholder="Student ID" onkeyup="keepStudentval(this.value)" name="StudentID">
                     		
                     	</th>
                     	
                     </tr>

			         <tr id="tr1">
            			
            			
            		</tr>
            		<table id="t02">
            		<tr>
				        <td>Summary of Registration</td>
				        <td> Credit : <span id = "credit"></span>  </td>
				        <td> Cost :   <span id = "Price"></span>  Baht</td>
    				</tr>  
          			</table>
            
    			</table>
    			<!-- Modal -->
  <center><div class="modal fade" id="myModal" role="dialog" >
    <div class="modal-dialog" >
    
      <!-- Modal content-->
      <div class="modal-content" style="width: 1000px!important;height: 500px!important;" >
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">ADD SUBJECT</h4>
        </div>
        <div class="modal-body" >
          <form>
Subject code:<input type="text" size="16" id="searchInput" onkeyup="showResult(this.value)" style="width: 350px;height:20px;">
<div id="livesearch"></div>
	
	<table id="addSubject">
		<tr id="tr1">
			<th>select</th>
			<th>Section</th>
			<th>Program</th>
			<th>SubjectName</th>
			<th>TeacherName</th>
			<th>Credit</th>
			<th>Volume</th>
		</tr>

	</table>
	<div id="test"></div>

	<button type="button" type="button" onclick="insertData()">Submit</button>
</form>
<div id="livesearch"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div></center>
  <!-- END ModaL -->
    			<br>
    		<div class="row align-items-center justify-content-center">
    				 <a class="d-inline-block button gradient-bg" href="http://localhost/Website/HomeForm.html">CANCEL</a>
					 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				     <button class="d-inline-block button gradient-bg" type="button" data-toggle="modal" data-target="#myModal">ADD SUBJECT</button>
					 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
					 <button class="d-inline-block button gradient-bg" type="button" onclick="insertAllData()">NEXT</button>
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








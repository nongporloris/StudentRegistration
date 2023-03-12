<?php
$con=mysqli_connect("localhost","root","","Student_Registration"); 
if (mysqli_connect_errno()) { 
    echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
}

if(!empty($_POST['Subject_ID']))
{
    echo "HEllo";
}

$sql1="SELECT * FROM subject";

$result=mysqli_query($con,$sql1);
$result2=mysqli_query($con,$sql1);
$result3=mysqli_query($con,$sql1);


?>
<!DOCTYPE html>
<html>

<head>
<style>
    body 
    {
        background: url(videoblocks-4k-3d-animation.png);
        background-size: cover;
    }

    p 
    {
        font-family: "Tahoma";
        font-size: 24px;
    }

    .boxed 
    {
        margin: auto;
        box-sizing: border-box;
        width: 60%;
        border: double green 5px;
        padding: 5px;
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
</style>

<title>Subject Form1</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script type="text/javascript">
    var i =0;
    function htmlToElement(html){
        var template = document.createElement('template');
        html = html.trim(); // Never return a text node of whitespace as the result
        template.innerHTML = html;
        return template.content.firstChild;
    }

    $(function(){
        $("#addNew").click(function(){
            i++;
            console.log(i);
            // div = document.createElement('tr');
            div = htmlToElement(" <tr id='tr2'><td><select  onchange='showUser(this.value)' name='Subject_ID1' id='Subject_ID1'><option value='PHY-122'>PHY-122</option><option value='CHM-103'>CHM-103</option><option value='BIO-100'>BIO-100</option><option value='MTH-121'>MTH-121</option><option value='LNG-107'>LNG-107</option><option value='GEN-111'>GEN-111</option></select></td><td id='Subject1'>-</td><td id='Teacher1'>-</td><td id='Credit1'>-</td><td id='Price'>-</td></tr>");
            //$(div).addClass("inner").html("new inner div");
            $("#t01").append(div);
        })
    });
</script>

<script>
var selected = [];
var selected2 = [];
var selected3 = [];
var credit = 0;
var price = 0;




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


function deleteEle(e){
    
     // xmlhttp.onreadystatechange=function(){

    flag1 = -1;
    flag = -1;

     // price -= parseInt(this.responseText);


     // document.getElementById(Price).innerHTML = price;
     e.parentNode.parentNode.remove();
    // }
    if (flag1 == -1) {
     price -= parseInt(this.responseText);


      // document.getElementById(Price).innerHTML = price;
    }
}



// function deleteEle(e){
//     e.parentNode.parentNode.remove();

//      price -= parseInt(this.responseText);


//      document.getElementById(Price).innerHTML = price;

// }

function displayCredit(credit) {
    document.getElementById("credit").innerHTML = credit;

}
function displayPrice(price) {
        if (flag1 == -1) {
     price -= parseInt(this.responseText);
    }
    console.log(flag1);
      //

    document.getElementById("Price").innerHTML = price;

}





</script>
</head>

<body>
<form action="Subject.php" method="post">
    <p style="text-align:center;">
    <br>
    
      <img src="registration19_button_web.png" width="250" height="95">
    </p>
    
    <br><br>
   
    <div class="boxed">
    <table id="t01">
        <tr>
            <th>Subject ID</th>
            <th>Subject Name</th> 
            <th>Teacher Name</th>	
            <th>Credit</th>
            <th>Price</th>
            		  
        </tr>
   
        <tr id="tr1">
            <td>
            <select name = "Subject_ID" id="Subject_ID" onchange="showConsole(this.value)">
                <?php 
                // output data of each row
                    while($row=mysqli_fetch_row($result)){
                       echo "<option value='".$row[0]. "'>".$row[0]."</option>";
                    }
                ?>
            </select>
            </td>
            
            <!-- <td id="Subject">-</td>
        	  <td id="Teacher">-</td>
        	  <td id="Credit">-</td>
        	  <td id="Price">-</td>-->
                
        </tr>
          
            
    </table>
    
    </div>  

    <div class="boxed">
    <table id="t01">
        
    <tr>
        <td>Summary of Registration</td>
        <td onload="displayCredit('credit');"> Credit : <span id = "credit"></span>  </td>
        <td onload="displayPrice('price');"> Cost :   <span id = "Price"></span>  Baht</td>
        <!-- <td id="Price"> Baht</td> -->
    </tr>  

    </table>
    </div>    
    
    <br><br>
   
    <p style="text-align:center;">
        <input type="submit" value="Cancel" onclick="goHome()" 
            style="font-size : 18px; width: 95px; height: 40px; 
            family: Tahoma; color: white; 
            background: url(the-button-859345_960_720.png);
            background-position: center; background-size: cover;"/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   
        <input type="submit" value="Schedule Table" onclick="goHome()" 
            style="font-size : 18px; width: 155px; height: 40px; 
            family: Tahoma; color: white; 
            background: url(the-button-859345_960_720.png);
            background-position: center; background-size: cover;"/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   
        <input type="submit" value="Next" onclick="goHome()" 
            style="font-size : 18px; width: 95px; height: 40px; 
            family: Tahoma; color: white; 
            background: url(the-button-859345_960_720.png);
            background-position: center; background-size: cover;"/> 
    </p>

s</form>
</body>

</html>

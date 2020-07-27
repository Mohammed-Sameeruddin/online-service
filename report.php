<!DOCTYPE html>
<head>
    <title>Report</title>
    <style>
        body{
    background-color: #000000
}

h1 {
    margin-left: 625px;
    font-size: 50px;
    color: #fce00a
}
form {
    margin-left: 5%;
    width: 100%;
    color: #fce00a
}


input{
    padding: 15px;
    font-size: inherit;
}
input[type="text"]{
    display: block;
    margin-bottom: 25px;
    width: 100%;
    border: 5px solid #fce00a;
}
input[type="email"]{
    display: block;
    margin-bottom: 25px;
    width: 100%;
    border: 5px solid #fce00a;
}

#main{
    width:100%;
    background: #000000;
}
#fname{
    float: left;
    padding: 15px;
    margin: 5%;
    margin-bottom: 0%;
}

#mname{
    float: left;
    padding: 15px;
    margin: 5%;
    margin-bottom: 0%;
}
#lname{
    float: left;
    padding: 15px;
    margin: 5%;
    margin-bottom: 0%;
}
#pno{
    float:left;
    padding:15px;
    margin:5%;
    margin-top: 0%;
}
#main2{
    width: 100%;
    background: #000000;
    margin-top: 0%;
}
#aa{
    float: left;
    padding: 15px;
    margin: 5%;
    margin-top: 0%;
}
#email{
    float: left;
    padding: 15px;
    margin: 5%;
    margin-top: 0%;
}
#com{
    width: 80%;


    float: left;
    padding: 15px;

    height: 50%;
}
#sub{
  align-items: center;
}
#main3{
    width: 100%;
    background: #000000;
    margin-top: 0%;
}

input[type="submit"]{
    width: 350px;
    height: 45;
    margin-left: 470px;
    background: #000000;
    color: #fce00a;
    border:5px solid #fce00a ;
}
    </style>
</head>
<body>
    <h1>
        Report
    </h1>
    <form method=post>
        <div id="main">

        
            <div id="fname">
                    <label for="text">Firstname:</label>
                    <input type="text" name="fname" placeholder="Rahul" required>
           </div>
           <div id="mname">
                <label for="text">Middlename:</label>
                <input type="text" name="mname" placeholder="Ajay">
           </div >
        <div id ="lname">
                <label for="text">Lastname:</label>
                <input type="text" name="lname" placeholder="Chowdary" required>
        </div>
    </div>
    <div id="main2">

    
        <div id="pno">
                <label for="text">Mobile no:</label>
                <input type="text" name="mobile" placeholder="9875786557" required>

        </div>
        <div id="aa">
                <label for="text">Aadhaar:</label>
                <input type="text" name="aad" placeholder="1234 5678 9012" required>
        </div>
        <div id="email">
                <label for="email">email:</label>
                <input type="email" name="email" placeholder="rahul@gmail.com" required>
        </div>
    </div>
    <div id="main3">
        <div id="com">
            
                    <label for="text">Grievance:</label>
                    <input type="text" name="report" placeholder="Report your grievance here........." required>
            

    
   
        </div>
        <div id="sub">
                <input type="submit" name="Submit">
        </div>
    </div>
</body>
</html>
<?php
include 'connection.php';
if(isset($_POST['Submit'])) {
$fn=$_POST['fname'];
$mn=$_POST['mname'];
$ln=$_POST['lname'];
$mob=$_POST['mobile'];
$aad =$_POST['aad'];
$em=$_POST['email'];
$rep=$_POST['report'];


$ins = " insert into report(fname,mname,lname,mobile,aad,email,feedback) values('$fn','$mn','$ln','$mob','$aad','$em','$rep') ";
$run = mysqli_query($conn,$ins);
if($run) {
?>
<script>
alert('data inserted sucessfully');
</script>
<?php
}
else {
?>
<script>
alert('data not inserted');
</script>
<?php
}
}
?>
    
            
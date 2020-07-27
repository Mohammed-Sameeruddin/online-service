<!DOCTYPE html>
<head>
    <title>APPLICATION FORM</title>
    <style>
    body{
    background-color: #000000
}
h1 {
    text-align: center;
    font-size: 50px;
    color: #ffbb00
}
form {
    margin: 20px auto;
    width: 344px;
    color: #ffbb00
    
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
    border: 3px solid #fce00a;
}
input[type="tel"]{
    display: block;
    margin-bottom: 25px;
    width: 100%;
    border: 3px solid #fce00a;
}
input[type="radio"]{
    margin: 0 18px 25px 18px;
}
input[type="radio"]:first-child{
    margin-left: 0;
}
input[type="submit"]{
    width: 350px;
    height: 45;
    border: 5px solid #fce00a;
    background: #000000;
    color: #fce00a;
}
input[type="date"]{
    display: block;
    margin-bottom: 25px;
    width: 100%;
    border: 3px solid #fce00a;
}
.required-field ::after{
    content:"*";
    color: red;
}
</style>

</head>
<body>
    <h1>
        APPLICATION FORM
    </h1>
    <form method=post>
        <div id="fname">
                <label for="text">Firstname:</label>
                <input type="text" name="fname" placeholder="Rahul" required>
       </div>
       <div id="lname">
            <label for="text">Middlename:</label>
            <input type="text"  name="mname" placeholder="Ajay">
       </div>
        
        <label for="text">Lastname:</label>
        <input type="text"  name="lname" placeholder="Chowdary" required>
        <label for="email">email:</label>
        <input type="email"  name="email" placeholder="rahul@gmail.com" required>
        <label for="tel">Mobile no:</label>
        <input type="tel"  name="mob" placeholder="9875786557" required>
        <label for="date">DOB:</label>
        <input type="date"  name="dob" placeholder="10/04/2000" required>
        <label for="text">Aadhaar:</label>
        <input type="text"  name="aad" placeholder="1234 5678 9012" required>
        <label for="text">Address:</label>
        <input type="text"  name="addr" placeholder="Address" required>
        
        <div>
            <input type="radio" id="male" name="gen" value='male' required><label for="male">Male     </label>
            <input type="radio" id="female" name="gen" value='female' required><label for="female">Female</label>
        </div>
        <input type="submit" name="submit">
    </form>
</body>
<?php 
include 'connection.php';
if(isset($_POST['submit'])) {
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$mobile=$_POST['mob'];
$dob=$_POST['dob'];
$aad=$_POST['aad'];
$adde=$_POST['addr'];
$gender=$_POST['gen'];

$insertquery = " insert into apply(fname,mname,lname,email,mobile,dob,aad,addr,gender) values('$fname','$mname','$lname','$email','$mobile','$dob','$aad','$adde','$gender') " ;

$res = mysqli_query($conn,$insertquery);

if($res){
?>
<script>
alert("data inserted successully");
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
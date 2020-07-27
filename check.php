<!DOCTYPE html>

<html>

  <head>
  
  <title>Check Info</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
   
 <style>
    
  html, body {
     
 display: flex;
      
justify-content: center;
      font-family: Roboto, Arial, sans-serif;
      font-size: 15px;
      background-color:#000000;
      }
  
    form {
      border: 5px solid #f1f1f1;
      }
 
     input[type=text], input[type=password] {
      width: 100%;
      padding: 16px 8px;
   
   margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
      }
   
   button {
      background-color: none;
      color: black;
      padding: 14px 0;
      margin: 10px 0;
      border: 2px solid #fcee02;
      border-radius:20px;
  
    cursor: grabbing;
      width: 100%;
      }
      h1 {
      text-align:center;
      fone-size:18;
      color:#fcee02;
      }
      button:hover {
      opacity: 0.8;
      }
      #u,#p{
          border:2px solid #fcee02;
          border-radius:3px;
      }
      .formcontainer {
      text-align: left;
      margin: 24px 50px 12px;
      }
      .container {
      padding: 16px 0;
      text-align:left;
      color:#fcee02;
      }
      span.psw {
      float: right;
      padding-top: 0;
      padding-right: 15px;
      }
      /* Change styles for span on extra small screens */
      @media screen and (max-width: 300px) {
      span.psw {
      display: block;
      float: none;
      }
      }
      #para {
          text-align:center;
          font-size:inherit;
          text-transform:uppercase;
          color:white;


      }
  
table {
    border-collapse:collapse;
    background-color:#000000;
    box-shadow:0 10px 20px 0 rgba(0,0,0,0,.03);
 margin-top:55px;    border-radius:10px;
    margin:auto;} th,td {
    border:5px solid grey;
    padding:10px 30px;
    text-align:center;

}
th {
    text-transform:uppercase;
    font-weight:500;
    color:#fce00a;
}
td {
    font-size:15px;
    color:white;  </style>
 
 </head>

  <body>
  
  <form method=post>
  
    <h1>Login Form</h1>
      <div class="formcontainer">
   
   <div class="container">
        <label for="uname"><strong>Aadhaar</strong></label>
   
     <input type="text" id="u" placeholder="Enter aadhaar" name="uname" required>
   
     <label for="psw"><strong>Phone No.</strong></label>
   
     <input type="text" id = "p" placeholder="Enter mobile" name="psw" required>
      </div>
   
   <button type="submit" name="submit" style="color:#000000;">Login</button>
      </div>
      

<table>
<thead>
<tr>
<th>First-Name</th> 
<th>Middle-Name</th> 
<th>Last-Name</th> 
<th>email</th> 
<th>mobile</th> 
<th>date-of-birth</th> 
<th>aadhaar</th> 
<th>address</th> 
<th>gender</th>   
</tr>
</thead> 
<tbody>
  <?php
    
include 'connection.php';
    
 if(isset($_POST['submit'])) {
 
   $aad=$_POST['uname'];
    
$mob=$_POST['psw'];

   
 $inc = "select * from apply where aad='$aad' and mobile='$mob' ";
  
  $run=mysqli_query($conn,$inc);


while($ar = mysqli_fetch_array($run)) {
 
?>
<tr>
<td><?php echo $ar['fname'] ?></td>
<td><?php echo $ar['mname'] ?></td>
<td><?php echo $ar['lname'] ?></td>
<td><?php echo $ar['email'] ?></td>
<td><?php echo $ar['mobile'] ?></td>
<td><?php echo $ar['dob'] ?></td>
<td><?php echo $ar['aad'] ?></td>
<td><?php echo $ar['addr'] ?></td>
<td><?php echo $ar['gender'] ?></td>
</tr>

<?php
      }
  }  ?> 

</tbody>
</table>
</form>

</body>

</html>
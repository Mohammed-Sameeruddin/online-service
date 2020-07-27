<html>
<head>
<title>Registration</title>
<style>
* {
    margin:0;
    padding:0;
    background-color:#000000;
}
h1{
    font-size:18px;
    color:#fce00a;
    text-align:center;
    margin-top:15px;
    margin-bottom:20px;
}
table {
    border-collapse:collapse;
    background-color:#fff;
    box-shadow:0 10px 20px 0 rgba(0,0,0,0,.03);
    border-radius:10px;
    margin:auto;
}
th,td {
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
    color:white;
}
</style>
</head>
<body>
<div>
<h1>LIST OF REGISTRATIONS</h1>
<div>
<div>
<table>
<thead>
<tr>
<th>first-name</th>
<th>middle-name</th>
<th>last-name</th>
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
$ins = " select * from apply ";
$selection= mysqli_query($conn,$ins);

while($arr = mysqli_fetch_array($selection)) {
    ?>
<tr>
<td><?php echo $arr['fname'] ?></td>
<td><?php echo $arr['mname'] ?></td>
<td><?php echo $arr['lname'] ?></td>
<td><?php echo $arr['email'] ?></td>
<td><?php echo $arr['mobile'] ?></td>
<td><?php echo $arr['dob'] ?></td>
<td><?php echo $arr['aad'] ?></td>
<td><?php echo $arr['addr'] ?></td>
<td><?php echo $arr['gender'] ?></td>
</tr>
<?php
}
?>
</tbody>
</table>
</div>
</div>
</div>
</body>
</html>
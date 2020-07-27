<?php 
$user="root";
$password="";
$server='127.0.0.1:3308';
$db='project';
$conn = mysqli_connect($server,$user,$password,$db);
if($conn) {
}
else {
?>
<script>
alert('connection failed');
</script>
<?php
}
?>
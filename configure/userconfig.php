
<?php
$dbhost='';
$dbname='';
$dbusername='';
$dbpass='';

$conn2=mysqli_connect($dbhost,$dbusername,$dbpass,$dbname) or die("Connection failed :" . mysqli_connect_error());

/*if($conn2){
    echo "<script>alert('connected successfully');</script>";
}else{
    echo "<script>alert('connection not successfull');</script>";  
}*/
?>

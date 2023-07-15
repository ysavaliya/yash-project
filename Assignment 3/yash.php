<?php 
$servername="localhost";
$username="root";
$password="";
$databasename="feedback";

$nm=$_POST['full'];
$gm=$_POST['address'];
$fb=$_POST['opinion'];

$con = mysqli_connect($servername,$username,$password,$databasename);

// die if the connection was not successful
if(!$con){
    die("sorry we fail to connect".mysqli_connect_error());
}
else{
echo "<br/>connection was successful ";
}


$db=mysqli_select_db($con,"feedback");
$sql="INSERT INTO y_table(fname,gmail,comment) VALUES('$nm','$gm','$fb')";
$cmd=mysqli_query($con,$sql);

if($cmd)
{
    echo "data inserted successfully<br>";
}
else{
    echo "Error is : ".mysqli_error($con);
}
?>  
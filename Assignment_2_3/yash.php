<?php  
$servername="localhost";
$username="root";
$password="";
$databasename="feedback";

$con = mysqli_connect($servername,$username,$password);
// die if the connection was not successful
if(!$con){
    die("sorry we fail to connect".mysqli_connect_error());
}
else{
echo "<br/>connection was successful ";
}

$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['text'];
$db=mysqli_select_db($con,"feedback");

$sql="INSERT INTO yashtable(name,email,feedback) VALUES('$a','$b','$c')";
$cmd=mysqli_query($con,$sql);

if($cmd)
{
    echo "data inserted successfully<br>";
}
else{
    echo "Error is : ",mysqli_error($con);
}
$servername="localhost";
$username="root";
$password="";
?>  
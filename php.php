<?php
$nname=$_REQUEST['name'];
$nnumber=$_REQUEST['number'];
$eemail=$_REQUEST['email'];
$ddata=$_REQUEST['date'];


if (isset($_POST['subimt']))
{
$host="localhost";
$user="root";
$password="";
$db="project";

$conn=mysqli_connect($host,$user,$password,$db);
$insert="insert into book appointment values('$nname','$nnumber','$eemail','$ddata')";
$mysqli_query($conn,$insert);
if($conn){
    echo("<h1 style='color:green';>your registrations is done !</h1>")
}
else {
    echo("<h1 style='color:red';>your registrations is fail !</h1>")
}
}
?>
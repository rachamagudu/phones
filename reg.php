<?php
include("connect.php");
if($_SERVER['REQUEST_METHOD']){
$username=$_POST["username"];
$phoneno=$_POST["phoneno"];
$email=$_POST["email"];
$pwd=$_POST["pwd"];

$sql="INSERT INTO users(username,phoneno,email,pwd) VALUES('$username','$phoneno','$email','$pwd')";

$result=mysqli_query($conn,$sql);

if($result){
    header("location:index.php");
}
else{
    echo"bata not insertesd".mysqli_connect_error();
}
}

?>


<?php
include 'connect.php';

$scnm=$_POST['scnm'];
$scid=$_POST['scid'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];

$s="select * from screg where username='$username'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);

if($num==1){
    echo"<script>alert('Username Already Taken!')</script>";
}
else{
    $reg="insert into screg(scname,scid,username,email,password) values ('$scnm','$scid','$username','$email','$password')";
    mysqli_query($con,$reg); 
    $_SESSION['scnm']=$scnm; 
    header('location:clg_log.php?Registration-successfull'); 
}

?>

 
<?php
session_start();
$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="project"; 
$tbl_name="student"; 
$conn =mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
mysqli_select_db($conn,"$db_name")or die("cannot select DB");
// username and password sent from form 
$un= $_POST["mail"];
$pwd=$_POST["password"]; 
// To protect MySQL injection (more detail about MySQL injection)
$un = stripslashes($un);
$pwd = stripslashes($pwd);
$un = mysqli_real_escape_string($conn,$un);
$pwd = mysqli_real_escape_string($conn,$pwd);
$sql="SELECT * FROM $tbl_name WHERE email='$un' and password='$pwd'";
$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);
if($count==1){
    #$_SESSION["email"] = $un;
header("location:student_homepage.html");
}
else {
header("location:student_login.php?msg=failed");
}
?>
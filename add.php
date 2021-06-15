<?php
$name=$_POST["name"];
$age=$_POST["age"];
$location =$_POST["location"];
$salary=$_POST["salary"];
// To protect MySQL injection (more detail about MySQL injection)
$name = stripslashes($name);
$age = stripslashes($age);
$location = stripslashes($location);
$salary = stripslashes($salary);
$name = mysqli_real_escape_string($conn,$name);
$age = mysqli_real_escape_string($conn,$age);
$location = mysqli_real_escape_string($conn,$location);
//echo "location- $location";
$salary = mysqli_real_escape_string($conn,$salary);

$sql="INSERT INTO employee(name,Age,location,salary) VALUES ('$name', '$age' ,'$location','$salary')";
$result=mysqli_query($conn,$sql);
?>

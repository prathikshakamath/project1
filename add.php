<?php
include('session_admin.php');
$ename = $_SESSION["ename"];
$esem = $_SESSION["esem"];
$eyear = $_SESSION["eyear"];
$emonth = $_SESSION["emonth"];

$ename = stripslashes($ename);
$esem = stripslashes($esem);
$eyear = stripslashes($eyear);
$emonth = stripslashes($emonth);
$ename = mysqli_real_escape_string($conn, $ename);
$esem = mysqli_real_escape_string($conn, $esem);
$eyear = mysqli_real_escape_string($conn, $eyear);
$emonth = mysqli_real_escape_string($conn, $emonth);

$sql = "INSERT INTO exam(exam_id,name,start_year,start_month,sem,admin_id) VALUES (NULL,'$ename','$eyear','$emonth','$esem' ,'$loggedin_id')";
$result = mysqli_query($conn, $sql);

$ename = $_POST["ename"];
$esem = $_POST["esem"];
$eyear = $_POST["eyear"];
$emonth = $_POST["emonth"];
// To protect MySQL injection (more detail about MySQL injection)
$ename = stripslashes($ename);
$esem = stripslashes($esem);
$eyear = stripslashes($eyear);
$emonth = stripslashes($emonth);
$ename = mysqli_real_escape_string($conn, $ename);
$esem = mysqli_real_escape_string($conn, $esem);
$eyear = mysqli_real_escape_string($conn, $eyear);
//echo "eyear- $eyear";
$emonth = mysqli_real_escape_string($conn, $emonth);

$sql = "INSERT INTO employee(ename,esem,eyear,emonth) VALUES ('$ename', '$esem' ,'$eyear','$emonth')";
$result = mysqli_query($conn, $sql);

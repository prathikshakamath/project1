<?php
<<<<<<< HEAD
include('timetable_add.php');
=======
include('session_admin.php');
>>>>>>> d0c95f71e93e9f8a26fba9ddc6c89d553babc4b0
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

$tbl_name3 = "exam";
$sql = "SELECT e.exam_id as id FROM $tbl_name3 e
        WHERE e.name='$ename' and e.sem= '$esem' and e.start_year='$eyear' and e.start_month='$emonth' ";
$res = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($res);
$id = $row['id'];

$stime = $_POST["time"];
$date = $_POST["date"];

<<<<<<< HEAD
//echo "{$array[1][2]}";
for ($i = 0; $i < $_SESSION["count1"]; $i++) {
    $cid = $array[$i][0];

    $timestamp = strtotime($stime[$i]);
    $etime = $timestamp + 3 * 360000;
=======
$time = "03:00:00";
$secs = strtotime($time) - strtotime("00:00:00");
//echo "{$array[1][2]}";
for ($i = 0; $i < $_SESSION["count1"]; $i++) {
    $cid = $_SESSION["data"][$i][0];
    // echo $cid;
    $etime = "00:00:00";

>>>>>>> d0c95f71e93e9f8a26fba9ddc6c89d553babc4b0
    $sql = "INSERT INTO timetable(exam_id,course_id,admin_id,start_time,end_time,exam_date) VALUES ('$id','$cid','$loggedin_id','$stime[$i]','$etime','$date[$i]')";
    $result = mysqli_query($conn, $sql);
}
header('Location: submit.php');

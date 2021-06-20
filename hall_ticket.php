<?php
include('session.php');
$eid = $_SESSION["exam_id"];
date_default_timezone_set("Asia/Calcutta");
$cur_time = date("Y-m-d h:i:sa");
$tbl_name1 = "exam_registration";

$conn = mysqli_connect("$host", "$username", "$password") or die("cannot connect");
mysqli_select_db($conn, "$db_name") or die("cannot select DB");

$sql = "INSERT INTO exam_registration(exam_id,usn,time) VALUES ('$eid','$loggedin_usn','$cur_time')";
$result = mysqli_query($conn, $sql);

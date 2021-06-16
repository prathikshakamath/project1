<?php

include('session_admin.php');



// To protect MySQL injection (more detail about MySQL injection)
$_SESSION['ename'] = stripslashes($_SESSION['ename']);
$_SESSION['esem'] = stripslashes($_SESSION['esem']);
$_SESSION['eyear'] = stripslashes($_SESSION['eyear']);
$_SESSION['emonth'] = stripslashes($_SESSION['emonth']);

$_SESSION['ename'] = mysqli_real_escape_string($conn, $_SESSION['ename']);
$_SESSION['esem'] = mysqli_real_escape_string($conn, $_SESSION['esem']);
$_SESSION['eyear'] = mysqli_real_escape_string($conn, $_SESSION['eyear']);
$_SESSION['emonth'] = mysqli_real_escape_string($conn, $_SESSION['emonth']);
// echo "{$loggedin_name}";
$esem = $_SESSION["esem"];
// echo "{$er}";
$tbl_name1 = "course";
$tbl_name2 = "department";
$conn = mysqli_connect("$host", "$username", "$password") or die("cannot connect");
mysqli_select_db($conn, "$db_name") or die("cannot select DB");

$sql = "SELECT c.course_id AS cid,c.name as cname,d.name as dname FROM $tbl_name2 d,$tbl_name1 c
                    WHERE c.sem='$esem' and c.dept_id = d.dept_id order by d.dept_id";
$res = mysqli_query($conn, $sql);
$_SESSION["count1"] = mysqli_num_rows($res);
$j = 0;
while ($row = mysqli_fetch_assoc($res)) {
    $i = 0;

    $array[$j][$i++] = $row['cid'];
    $array[$j][$i++] = $row['cname'];
    $array[$j][$i++] = $row['dname'];
    $j++;
}


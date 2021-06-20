<?php
include('session_admin.php');
$eid = $_POST["eid"];
$_SESSION["exam_id"] = $eid;

$tbl_name1 = "exam_registration";
$conn = mysqli_connect("$host", "$username", "$password") or die("cannot connect");
mysqli_select_db($conn, "$db_name") or die("cannot select DB");

$sql = "SELECT e.usn AS usn FROM $tbl_name1 e
            WHERE e.exam_id = '$eid'";

$res = mysqli_query($conn, $sql);
$count1 = mysqli_num_rows($res);
$i = 0;
while ($row = mysqli_fetch_assoc($res)) {
    $array[$i++] = $row['usn'];
}

for ($j = 0; $j < $count1; $j++) {
    echo "<tr><td>{$array[$j]}</td></tr>";
}

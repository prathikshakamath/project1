﻿<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include('session.php');
    $eid = $_POST["eid"];
    $_SESSION["exam_id"] = $eid;
    // echo "{$eid}";
    ?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/f293a21338.js" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Alegreya' rel='stylesheet'>
    <title>Submit</title>
    <style>
     table,
    th,
    td {
      border-collapse:collapse;  
      border: 1px solid #000000;
      width: 1000px;
    }
    th,td{
        height:30px;
    }
        body {
            background-color: lightblue;
        }

        .right {
            float: right;
            width: 90%;
            background-color: lightblue;

        }

       

        .logout {
            position: fixed;
            background-color: lightblue;
            color: white;
            border-color: #ff0000;
            border: 3px solid red;
            top: 1%;
            left: 93%;
            padding: 0.5%;
        }

        .submit {
            color: white;
            background-color: black;
        }

        .right hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        .registerbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 73%;
            opacity: 0.9;
        }

        .registerbtn:hover {
            opacity: 1;
        }

        label,
        input {

            padding: 2%;
            margin-top: 2%;

        }

        input {
            margin-left: 3%;
        }


       
    </style>
    <script>
        function check() {

            if (myform.subject[1].checked == true || myform.subject[2].checked == true) {
                document.getElementById('text').style.display = "block";
                return false;
            }

        }
    </script>
</head>

<body>
    <button class="logout"><a href="student_login.php">LOGOUT</a></button>

    <section class="right">
        <?php
        $tbl_name1 = "timetable";
        $tbl_name2 = "course_enrolled";
        $tbl_name3 = "course";
        $conn = mysqli_connect("$host", "$username", "$password") or die("cannot connect");
        mysqli_select_db($conn, "$db_name") or die("cannot select DB");

        $sql = "SELECT c.course_id AS cid,c.name as name,ce.attendance as attendance, ce.cie_marks as cie_marks FROM $tbl_name3 c,$tbl_name2 ce,$tbl_name1 t,$tbl_name s 
    WHERE s.email='$usermail'and t.exam_id='$eid' and ce.course_id=t.course_id and s.usn=ce.usn and ce.course_id=c.course_id and ce.sem = s.current_sem";
        $res = mysqli_query($conn, $sql);
        $_SESSION["count1"] = mysqli_num_rows($res);
        $j = 0;
        while ($row = mysqli_fetch_assoc($res)) {
            $i = 0;

            $array[$j][$i++] = $row['cid'];
            $array[$j][$i++] = $row['name'];
            $array[$j][$i++] = (int)$row['attendance'];
            $array[$j][$i++] = (int)$row['cie_marks'];
            if ($array[$j][2] < 85 || $array[$j][3] < 20) {
                $array[$j][$i] = "NO";
            } else {
                $array[$j][$i] = "YES";
            }

            $j++;
        }
        ?>

        <form name="myform" action="hall_ticket.php">
            <center>
                <h1> Exam Registeration Form</h1>
            </center>
            <hr>
            <table>
                <tr>
                    <th>COURSE CODE</th>
                    <th>COURSE TITLE</th>
                    <th>ELIGIBILITY</th>
                </tr>

                <?php
                $count = $_SESSION["count1"];
                for ($j = 0; $j < $count; $j++) {
                    echo "<tr><td>{$array[$j][0]}</td><td> {$array[$j][1]}</td><td>{$array[$j][4]}</td></tr>";
                }
                ?>


            </table>

            <input type="checkbox" name="subject" id="I Agree To All The Necessary Condition" required style="margin-left:-1%;">
            <label for="I Agree To All The Necessary Conditions" style="margin-left:-0.5%;">I have checked all the details.</label>
            <br /><br /><br />
            </div>

            <input type="submit" class="registerbtn" value="SUBMIT">

        </form>
    </section>
</body>

</html>
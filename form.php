<!DOCTYPE html>
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
        body {
            background-color: lightblue;
        }

        .right {
            float: right;
            width: 77%;
            background-color: lightblue;

        }

        form {
            width: 100%;
        }

        .logout {
            position: fixed;
            background-color: black;
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

        button a {
            text-decoration: none;
            color: white;
        }


        .container {
            padding-left: 6%;
            padding-top: 1%;
            background-color: lightblue;

        }

        input[type=text],
        input[type=password] {
            width: 95%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus,
        input[type=password]:focus {
            background-color: orange;
            outline: none;
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
            width: 100%;
            opacity: 0.9;
        }

        .registerbtn:hover {
            opacity: 1;
        }

        div .name {
            display: inline-block;
            width: 30%;
            padding: 1%;
        }

        label,
        input {

            padding: 2%;
            margin-top: 1.5%;

        }

        input {
            margin-left: 3%;
        }

        #text {
            margin: 1%;
            color: red;
            display: none;
        }

        .not {
            color: red;
        }

        input[type="checkbox"]:checked {
            box-shadow: 0 0 0 3px #4CAF50;
        }

        #active {
            color: #feea03;
            font-size: 130%;
            line-height: 120%;
            font-weight: 200;
        }

        #active1 {
            color: #feea03;
            font-weight: 200;
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
                    <th>ATTENDANCE</th>
                    <th>CIE MARKS</th>
                    <th>ELIGIBILITY</th>
                </tr>

                <?php
                $count = $_SESSION["count1"];
                for ($j = 0; $j < $count; $j++) {
                    echo "<tr><td>{$array[$j][0]}</td><td> {$array[$j][1]}</td><td>{$array[$j][2]}</td><td>{$array[$j][3]}</td><td>{$array[$j][4]}</td></tr>";
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
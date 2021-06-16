<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include('session_admin.php');
    $ename = $_POST["name"];
    $esem = $_POST["sem"];
    $eyear = $_POST["year"];
    $emonth = $_POST["month"];
    // To protect MySQL injection (more detail about MySQL injection)
    $eename = stripslashes($ename);
    $esem = stripslashes($esem);
    $eyear = stripslashes($eyear);
    $emonth = stripslashes($emonth);

    $ename = mysqli_real_escape_string($conn, $ename);
    $esem = mysqli_real_escape_string($conn, $esem);
    $eyear = mysqli_real_escape_string($conn, $eyear);
    $emonth = mysqli_real_escape_string($conn, $emonth);
    // echo "{$loggedin_name}";
    //echo " {$eyear}";

    ?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/f293a21338.js" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Alegreya' rel='stylesheet'>
    <title>Student Homepage</title>
    <style>
        body {
            background-color: lightblue;
        }

        .right {
            float: right;
            width: 100%;
            background-color: lightblue;

        }

        form {
            width: 100%;

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
            padding-left: 5%;
            background-color: lightblue;
        }

        input[type=text],
        input[type=password],
        input[type=time],
        input[type=date],
        select,
        span {
            width: 75%;
            padding: 15px;
            margin: 5% 0 10% 10%;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus,
        input[type=password]:focus {
            background-color: #f7ef86;
            outline: none;
        }


        .shift>label,
        .left {
            display: block;
            font-weight: bold;
        }

        .right hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }



        .registerbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px 20px;
            margin-left: 45%;
            border: none;
            cursor: pointer;
            width: 15%;
            opacity: 0.9;
        }

        .registerbtn:hover {
            opacity: 1;
        }

        div .div {
            display: inline-block;
            width: 18%;
        }

        div .left {
            display: block;
            margin-left: 10%;
        }
    </style>

</head>

<body>
    <section class="right">
        <form method="POST" action="timetable_add.php" name="form2">

            <center>
                <h1> Add timetable</h1>
            </center>
            <hr>
            <?php
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
            ?>

            <div class="left">
                <?php
                for ($i = 0; $i < $_SESSION["count1"]; $i++) {  ?>
                    <div class="div">

                        <label class="field left">
                            Course Code :
                        </label>
                        <?php echo "<span>{$array[$i][0]}</span>"; ?>
                    </div>
                    <div class="div">
                        <label class="field left">
                            Course Name :
                        </label>
                        <?php echo "<span>{$array[$i][1]}</span>"; ?>
                    </div>
                    <div class="div">
                        <label class="field left">
                            Department:
                        </label>
                        <?php echo "<span>{$array[$i][2]}</span>"; ?>
                    </div>
                    <div class="div">
                        <label for="Date" class="field left">Date:</label>
                        <input type="date" id="Date" name="Date">
                    </div>
                    <div class="div">
                        <label for="time" class="field left">Time:</label>
                        <input type="time" id="time" name="time">
                    </div>
                <?php } ?>
            </div>
            <input type="submit" class="registerbtn" value="NEXT">

        </form>
    </section>
</body>

</html>
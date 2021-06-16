<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include('exam_add.php');
    include('timetable_add.php');
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
        select {
            width: 80%;
            font-size: small;
            padding: 5%;
            margin: 5% 0 10% 10%;
            height: 10%;
            border: none;
            background: #f1f1f1;
        }

        span {
            display: inline-block;
            width: 80%;
            height: 10%;
            background: #f1f1f1;
            margin: 5% 0 10% 10%;
            padding: 5%;
            font-size: small;
        }

        input[type=time]:focus,
        input[type=date]:focus {
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
            width: 19%;
        }

        div .left {
            display: block;
            margin-left: 10%;
        }
    </style>

</head>

<body>
    <section class="right">
        <form method="POST" action="add.php" name="form2">

            <center>
                <h1> Add timetable</h1>
            </center>
            <hr>

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
                        <input type="date" id="Date" name="date[]">
                    </div>
                    <div class="div">
                        <label for="time" class="field left">Time:</label>
                        <input type="time" id="time" name="time[]">
                    </div>
                <?php } ?>
            </div>
            <input type="submit" class="registerbtn" value="NEXT">

        </form>
    </section>
</body>

</html>
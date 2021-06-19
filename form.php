<!DOCTYPE html>
<html lang="en">

<head>

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

        .sidenav {
            height: 100%;
            width: 22%;
            padding-top: 1%;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #000000;
            overflow-x: hidden;
            text-align: center;
        }

        .sidenav a,
        .dropdown-btn {
            padding: 2%;
            width: 100%;
            text-decoration: none;
            font-size: 18px;
            color: #ffffff;
            display: inline-block;
            border: none;
            background: none;
            text-align: center;
            cursor: pointer;
            outline: none;
        }

        .dropdown-container {
            display: none;
            background-color: #0a0a0a;
        }

        .sidenav a:hover,
        .dropdown-btn:hover {
            color: #e27464;
        }

        .sidenav hr {
            background-color: #09f4e2;
            margin-left: 5%;
            margin-right: 5%;
        }

        .active {
            background-color: #020202;
            color: white;
        }

        .dropdown-container {
            width: 22%;
            display: none;
            background-color: #0a0a0a;
            padding-left: 8px;
            margin-left: 35%;
        }

        .sidenav img {
            background-color: #000000;
            width: 75%;
            margin-top: 5%;
            margin-bottom: 5%;
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
    <nav class="sidenav">
        <img src="images/bmsce_logo.png" />
        <hr style="height:2px;border-width:0;background-color:#66fcf1">
        <a href="student_homepage.php">HOME</a>
        <hr style="height:2px;border-width:0;background-color:#66fcf1">
        <a href="profile.php">View Profile</a>
        <hr style="height:2px;border-width:0;background-color:#66fcf1">
        <a href="course.php">Courses</a>
        <hr style="height:2px;border-width:0;background-color:#66fcf1">
        <a href="eligibility.php">View eligibility</a>
        <hr style="height:2px;border-width:0;background-color:#66fcf1">
        <button class="dropdown-btn" id="active">
            Exam
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="timetable.php">Timetable</a>
            <a href="instruction.php">Instructions</a>
            <a href="form.php" id="active1">Registration</a>
        </div>
        <hr style="height:2px;border-width:0;background-color:#66fcf1">

    </nav>

    <script>
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;

        for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";
                } else {
                    dropdownContent.style.display = "block";
                }
            });
        }
    </script>
    <section class="right">

        <form onsubmit="return check()" name="myform" action="thankyou.php">
            <center>
                <h1> Exam Registeration Form</h1>
            </center>
            <hr>
            <div class="container">
                <b>SELECT COURSES :</b>
                <br>
                <input type="checkbox" name="subject" id="Microprocessor n Microcontrollers (19CS3ESMMC)">
                <label for="Microprocessor n Microcontrollers (19CS3ESMMC)">Microprocessor n Microcontrollers (19CS3ESMMC)</label>
                <br>
                <input type="checkbox" name="subject" id="Object Oriented Java Programming (19CS3PCOOJ)">
                <label for="ooj" class="not">Object Oriented Java Programming (19CS3PCOOJ)</label>
                <br>
                <input type="checkbox" name="subject" id="Computer Organization And Architecture (19CS3PCOOJ)">
                <label for="coa" class="not">Computer Organization And Architecture (19CS3PCOOJ)</label>
                <br>
                <input type="checkbox" name="subject" id="Environmental Studies(19CS3PCEVS)">
                <label for="Environmental Studies(19CS3PCEVS)">Environmental Studies(19CS3PCEVS)</label>
                <br />
                <input type="checkbox" name="subject" id="Statistics And Discrete Mathematics(19MA3BSSDM)" />
                <label for="Statistics And Discrete Mathematics(19MA3BSSDM)">Statistics And Discrete Mathematics(19MA3BSSDM)</label>
                <br />
                <input type="checkbox" name="subject" id="Data Structures(19CS3PCDST)" />
                <label for="Data Structures(19CS3PCDST)">Data Structures(19CS3PCDST)</label>
                <br>
                <input type="checkbox" name="subject" id="Logic Design(19CS3PCLOD)" />
                <label for="Logic Design(19CS3PCLOD)">Logic Design(19CS3PCLOD)</label><br />
                <input type="checkbox" name="subject" id="EVS" />
                <label for="EVS">Environment Studies(19IC4HSCPH)</label>
                <br><br />
                <span id="text">

                    You can't register for subjects you are not eligible in.
                </span>
                <br>

                <input type="checkbox" name="subject" id="I Agree To All The Necessary Condition" required style="margin-left:-1%;">
                <label for="I Agree To All The Necessary Conditions" style="margin-left:-0.5%;">I have checked all the details.</label>
                <br /><br /><br />
            </div>

            <input type="submit" class="registerbtn" value="SUBMIT">

        </form>
    </section>
</body>

</html>
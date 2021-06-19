﻿<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/f293a21338.js" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Alegreya' rel='stylesheet'>
    <link rel="stylesheet" href="table.css">
    <title>Student Homepage</title>
    <style>
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

        hr {
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
            margin-top: 24%;
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

        button a {
            text-decoration: none;
            color: white;
        }

        p {
            font-family: 'Alegreya';
            color: orangered;
        }

        .sidenav img {
            width: 75%;
            margin-top: 5%;
            margin-bottom: 5%;
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
            <a href="timetable.php" id="active1">Timetable</a>
            <a href="instruction.php">Instructions</a>
            <a href="exam.php">Registration</a>
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
        <h2>TIME TABLE</h2>
        <p>FOR 3rd SEMESTER 2020-21</p>
        <table>
            <tr>
                <th>DATE</th>
                <th>TIMING</th>
                <th>SUBJECT</th>
            </tr>
            <tr>
                <td>17-11-2020</td>
                <td>09:30 to 12:30</td>
                <td>Static and Discrete Mathematics</td>
            </tr>
            <tr>
                <td>18-11-2020</td>
                <td>09:30 to 12:30</td>
                <td>Microprocessors and Microcontrollers</td>
            </tr>
            <tr>
                <td>19-11-2020</td>
                <td>09:30 to 12:30</td>
                <td>OOJ Programming</td>
            </tr>
            <tr>
                <td>20-11-2020</td>
                <td>09:30 to 12:30</td>
                <td>Data Structure</td>
            </tr>
            <tr>
                <td>21-11-2020</td>
                <td>09:30 to 12:30</td>
                <td>COA</td>
            </tr>
            <tr>
                <td>23-11-2020</td>
                <td>09:30 to 12:30</td>
                <td>Logic Design</td>
            </tr>
            <tr>
                <td>24-11-2020</td>
                <td>09:30 to 12:30</td>
                <td>Environment Studies</td>
            </tr>
        </table>
    </section>
</body>

</html>
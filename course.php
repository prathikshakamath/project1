<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/f293a21338.js" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Alegreya' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Raleway" rel="stylesheet">
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

            .sidenav a, .dropdown-btn {
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

        .sidenav a:hover, .dropdown-btn:hover {
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
    </style>

</head>
<button class="logout"><a href="login.html">LOGOUT</a></button>
<nav class="sidenav">
    <img src="images/bmsce_logo.png" />
    <hr style="height:2px;border-width:0;background-color:#66fcf1">
    <a href="student_homepage.html">HOME</a><hr style="height:2px;border-width:0;background-color:#66fcf1">
    <a href="profile.html">View Profile</a><hr style="height:2px;border-width:0;background-color:#66fcf1">
    <a href="course.html" id="active">Courses</a><hr style="height:2px;border-width:0;background-color:#66fcf1">
    <a href="eligibility.html">View eligibility</a><hr style="height:2px;border-width:0;background-color:#66fcf1">
    <button class="dropdown-btn">
        Exam
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="timetable.html">Timetable</a>
        <a href="instruction.html">Instructions</a>
        <a href="form.html">Registration</a>
    </div>
    <hr style="height:2px;border-width:0;background-color:#66fcf1">

</nav>
<body>
    <script>
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;

        for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function () {
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
        <h2>COURSES</h2>
        <p>FOR 3RD SEMESTER 2020-21</p>
        <table>
            <tr>
                <th>COURSE CODE</th>
                <th>COURSE TITLE</th>
                <th>CREDITS</th>
            </tr>
            <tr>
                <td>19MA3BSSDM</td>
                <td>Static and Discrete Mathematics</td>
                <td>4</td>
            </tr>
            <tr>
                <td>19CS3ESMMC</td>
                <td>Microprocessor and Microcontrollers</td>
                <td>4</td>
            </tr>
            <tr>
                <td>19CS3PCOOJ</td>
                <td>OOJ Programming</td>
                <td>4</td>
            </tr>
            <tr>
                <td>19CS3PCDST</td>
                <td>Data Structure</td>
                <td>4</td>
            </tr>
            <tr>
                <td>19CS3PCCOA</td>
                <td>Computer Organization and Architecture</td>
                <td>3</td>
            </tr>
            <tr>
                <td>19CS3PCLOD</td>
                <td>Logic Design</td>
                <td>3</td>
            </tr>
            <tr>
                <td>19IC4HSCPH</td>
                <td>Environment Studies</td>
                <td>1</td>
            </tr>
        </table>
    </section>
</body>
</html>

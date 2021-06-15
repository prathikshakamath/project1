<!DOCTYPE html>
<html lang="en">

<head>

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
        select {
            width: 75%;
            padding: 15px;
            margin: 5px 0 22px 0;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus,
        input[type=password]:focus {
            background-color: #f7ef86;
            outline: none;
        }

        .shift {
            margin-left: 1%;
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

        div {
            display: inline-block;
            width: 18%;
        }
    </style>

</head>

<body>
    <section class="right">
        <form action="submit.html" name="myform" onsubmit="return validateform()">

            <center>
                <h1> Add timetable</h1>
            </center>
            <hr>
            <div>
                <label class="field left">
                    Course Code :
                </label>
                <input type="text" name="course code" placeholder="course code" required autocomplete="off">
            </div>
            <div>
                <label class="field left">
                    Course Name :
                </label>
                <input type="text" name="course name" placeholder="course name" required autocomplete="off">
            </div>
            <div>
                <label class="field left">
                    Department:
                </label>
                <input type="text" name="department" placeholder="department" required autocomplete="off">
            </div>
            <div>
                <label for="Date" class="field left">Date:</label>
                <input type="date" id="Date" name="Date">
            </div>
            <div>
                <label for="time" class="field left">Time:</label>
                <input type="time" id="time" name="time">
            </div>
            <input type="submit" class="registerbtn" value="NEXT">

        </form>
    </section>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include('session_admin.php');
    //session_start();
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
            padding-left: 5%;
            background-color: lightblue;
        }

        input[type=text],
        input[type=password],
        select {
            width: 50%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
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
            display: inline-block;
            width: 10%;
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

        label .field {
            display: inline-block;
        }

        div .name {
            display: inline-block;
            width: 28%;
            padding: 1%;
            font-weight: bold;
        }

        div .name>input {
            width: 80%;
        }
    </style>

</head>

<body>

    <section class="right">
        <form action="add_timetable.php" name="myform ">

            <center>
                <h1> Exam Registeration Form</h1>
            </center>
            <hr>
            <div>
                <label class=" field left">
                    Exam Name :
                </label>

                <select required>
                    <option value="Exam Name">Exam Name</option>
                    <option value="SEMESTER END EXAMINATION">SEMESTER END EXAMINATION</option>
                    <option value="IMPROVEMENT EXAMINATION">IMPROVEMENT EXAMINATION</option>
                </select>
            </div>
            <div>
                <label class="field left">
                    Semester:
                </label>

                <select required>
                    <option value="Semester">Semester</option>
                    <option value="I"> I </option>
                    <option value="II"> II</option>
                    <option value="III"> III</option>
                    <option value="IV"> IV</option>
                    <option value="V"> V</option>
                    <option value="VI"> VI</option>
                    <option value="VII"> VII</option>
                    <option value="VIII"> VIII</option>
                </select>
            </div>
            <br>
            <div>
                <label class="field left">
                    Start_year:
                </label>
                <select id="ddlYears"></select>
                <script type="text/javascript">
                    window.onload = function() {
                        //Reference the DropDownList.
                        var ddlYears = document.getElementById("ddlYears");

                        //Determine the Current Year.
                        var currentYear = (new Date()).getFullYear();

                        //Loop and add the Year values to DropDownList.
                        for (var i = 2000; i <= currentYear; i++) {
                            var option = document.createElement("OPTION");
                            option.innerHTML = i;
                            option.value = i;
                            ddlYears.appendChild(option);
                        }
                    };
                </script>
                </select>
            </div>
            <div>
                <label class="field left">
                    Start_month:
                </label>
                <select required>
                    <option value="month">month</option>
                    <option value="01">January</option>
                    <option value="02">February</option>
                    <option value="03">March</option>
                    <option value="04">April</option>
                    <option value="05">May</option>
                    <option value="06">June</option>
                    <option value="07">July</option>
                    <option value="08">August</option>
                    <option value="09">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
                <input type="submit" class="registerbtn" value="NEXT">

        </form>
    </section>
</body>

</html>
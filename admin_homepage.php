<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin homepage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/f293a21338.js" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Alegreya' rel='stylesheet'>
    <style>
        body,
        html {
            width: 100%;
            height: 100%;
            margin: 0;
        }

        .container {
            height: 100%;
        }

        #left {
            width: 30%;
            height: 100%;
            background-color: #cae9f5;
            border-collapse: collapse;
            display: inline-block;
        }

        #main {
            width: 40%;
            height: 100%;
            background-color: hsl(193, 100%, 96%);
            border-collapse: collapse;
            margin: auto;
            font-size: 100%;
        }

        #right {
            width: 30%;
            height: 100%;
            background-color: #cae9f5;
            border-collapse: collapse;
            display: inline-block;
        }

        .column {
            float: left;
            height: 100;
            padding-top: 5%;
            text-align: center;
        }

        .list {
            list-style-type: none;
            padding: 2%;
            line-height: 170%;
        }

            .list li::before {
                content: "\f0a4";
                font-family: "Font Awesome 5 Free";
            }

            .list a {
                text-decoration: none;
                font-size: 110%;
            }

        h2 {
            font-weight: 130%;
            font-size: 150%;
            display: inline;
            font-family: "Alegreya";
            padding-top: 10%;
        }

        .logout {
            position: fixed;
            background-color: black;
            color: white;
            border-color: #ff0000;
            border: 3px solid red;
            top: 1%;
            left: 88%;
            width: 10%;
            padding: 0.5%;
        }

        button a {
            text-decoration: none;
            color: white;
        }

        #main button {
            background-color: #4CAF50;
            font-size:120%;
            width: 60%;
            height:10%;
            color: black;
            margin: 8%;
            border: none;
            cursor: pointer;
            position: relative;
        }

        #main a:hover {
            color: black;
        }

        .quote {
            color: orange;
            font-size: 200%;
            text-align: center;
        }


        #left img {
            width: 75%;
            margin-top: 10%;
            margin-left: 2%;
        }

        a:hover {
            color: aqua;
        }
        input[type=text] {
            width: 80%;
            height:10%;
            padding: 15px;
            margin: 30% 0 5% 0;
            display: inline-block;
            border: 1px solid black;
            background: #f1f1f1;
            position:
        }

            input[type=text]:focus {
                background-color: #baf7b6;
                outline: none;
            }
        #add{
            padding:2%;
            width:40;
        }
    </style>


</head>
<body>
    <div class="container">

        <section class="column side" id="left">


            <img src="images/bmsce_logo.png" />
            <h1 class="quote ">Let us do great things together</h1>

        </section>
        <section class="column" id="main">
            <button type="submit"><a href="student_eligibility.html">Check Eligibility</a></button>
            <button type="submit"><a href="submission.html">Check Exam Form Submission Status</a>  </button>


        </section>


        <section class="column side" id="right">
            <button class="logout"><a href="login.html">LOGOUT</a></button>
            <h2 style="font-size: 200%;" class="head">Announcements</h2>
            <ul class="list" id="list">
                <li>SEE exams are scheduled to be held from 17/11/2020.Find the timetable <a href="timetable.html">here</a></li>

                <li>Important:The last date to fill exam registration form is extended till 10/11/2020.Fill the form <a href="form.html">here</a></li>

                <li>Exam registration form is out.Fill the form <a href="form.html">here</a></li>

            </ul>
            <input type='text' id='idea'><br />
            <input type="button" id="add" value="Add New">
            <script>
    document.getElementById("add").onclick = function () {

                    var node = document.createElement("Li");
                    var text = document.getElementById("idea").value;
                    var textnode = document.createTextNode(text);
                    node.appendChild(textnode);
                    document.getElementById("list").appendChild(node);
                }
            </script>
            <ul id='list'></ul>

        </section>
    </div>
    
</body>
</html>
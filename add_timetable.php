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

        input[type=text], input[type=password], select {
            width: 50%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

            input[type=text]:focus, input[type=password]:focus {
                background-color: #f7ef86;
                outline: none;
            }

        .shift {
            margin-left: 1%;
        }

            .shift > label, .left {
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
            margin-left:45%;
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

            div .name > input {
                width: 80%;
            }

        #text {
            margin: 1%;
            color: red;
            display: none;
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
    <button class="logout"><a href="login.html">LOGOUT</a></button>
   
    <section class="right">
        <form action="submit.html" name="myform" onsubmit="return validateform()">

            <center>  <h1> Exam Registeration Form</h1> </center>
            <hr>
                     <div>
                        <label class="field left">
                            Course Name :
                        </label>

                        <select required>
                            <option value="Exam Name">Course Name</option>
                            <option value="SEMESTER END EXAMINATION">SEMESTER END EXAMINATION</option>
                            <option value="IMPROVEMENT EXAMINATION">IMPROVEMENT EXAMINATION</option>
                        </select>
                    </div>

                    <div>
                        <label class="field left">
                            Course Code :
                        </label>

                        <select required>
                            <option value="Exam Name">Course Code</option>
                            <option value="SEMESTER END EXAMINATION">SEMESTER END EXAMINATION</option>
                            <option value="IMPROVEMENT EXAMINATION">IMPROVEMENT EXAMINATION</option>
                        </select>
                    </div>

                    <div>
                        <label class="field left">
                            Department:
                        </label>

                        <select required>
                        <option value="Semester">Department</option>
                        <option value="I"> I </option>
                        <option value="II"> II</option>
                        <option value="III"> III</option>
                        <option value="IV"> IV</option>
                        <option value="V" > V</option>
                        <option value="VI"> VI</option>
                        <option value="VII"> VII</option>
                        <option value="VIII"> VIII</option>
                        </select>
                    </div>
                    <br>
             <label for="Date">Date:</label>
  <input type="date" id="Date" name="Date">
  <input type="submit">
   <label for="Date">Time:</label>
  <input type="time" id="Date" name="Date">
  <input type="submit">

  <br>

                <input type="submit" class="registerbtn" value="NEXT">
            
        </form>
    </section>
</body>
</html>
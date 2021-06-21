<?php
include('session.php');
$eid = $_SESSION["exam_id"];
date_default_timezone_set("Asia/Calcutta");
$cur_time = date("Y-m-d h:i:sa");
$tbl_name1 = "exam_registration";

$conn = mysqli_connect("$host", "$username", "$password") or die("cannot connect");
mysqli_select_db($conn, "$db_name") or die("cannot select DB");

$sql = "INSERT INTO exam_registration(exam_id,usn,time) VALUES ('$eid','$loggedin_usn','$cur_time')";
$result = mysqli_query($conn, $sql);
?>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/f293a21338.js" crossorigin="anonymous"></script>
    <meta charset="utf-8" />

    <title></title>
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700' rel='stylesheet' type='text/css'>
    <style>
        html {
            font-size: 16px;
            background-color: #fffffe;
        }

        body {
            padding: 0 20px;
            min-width: 300px;
            font-family: 'Akkurat-Regular', sans-serif;
            background-color: #fffffe;
            color: #1a1a1a;
            text-align: center;

        }

        a:link,
        a:visited {
            color: #00c2a8;
        }

        a:hover,
        a:active {
            color: #03a994;
        }

        .site-header {
            margin: 0 auto;
            padding: 80px 0 0;
            max-width: 820px;
        }

        .site-header__title {
            margin: 0;
            font-family: Montserrat, sans-serif;
            font-size: 2.5rem;
            font-weight: 700;
            line-height: 1.1;
            text-transform: uppercase;

        }

        .main-content {
            margin: 0 auto;
            max-width: 820px;
        }

        .main-content__checkmark {
            font-size: 4.0625rem;
            line-height: 1;
            color: #24b663;
        }

        .main-content__body {
            margin: 20px 0 0;
            font-size: 1rem;
            line-height: 1.4;
        }

        @media only screen and (min-width: 40em) {
            .site-header {
                padding-top: 150px;
            }

            .site-header__title {
                font-size: 4.25rem;
            }

            .main-content__checkmark {
                font-size: 9.75rem;
            }

            .main-content__body {
                font-size: 1.25rem;
            }


        }
    </style>


</head>

<body>
    <header class="site-header" id="header">
        <h1 class="site-header__title" data-lead-id="site-header-title">REGISTRATION SUCCESSFULL!</h1>
    </header>

    <div class="main-content">
        <i class="fa fa-check main-content__checkmark" id="checkmark"></i>
        <p class="main-content__body" data-lead-id="main-content-body"> YOU ARE REGISTERED FOR YOUR EXAM!</p>
        <p class="main-content__body" data-lead-id="main-content-body"><a href="hall_ticket_d.php" target="_blank" style="text-decoration:none;"><i class="fas fa-arrow-down"></i></i> Download Admit Card</a></p>
        <p class="main-content__body" data-lead-id="main-content-body"><a href="student_homepage.php" style="text-decoration:none;"><i class="fas fa-undo-alt"></i> Back to Homepage</a> </p>
    </div>


</body>

</html>
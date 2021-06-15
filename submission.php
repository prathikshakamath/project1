<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/f293a21338.js" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Alegreya' rel='stylesheet'>
    <link rel="stylesheet" href="table.css">
    <title>Student Homepage</title>
    <style>
        .table {
            margin: 5% auto;
            width: 70%;
        }

        table tr th {
            border: solid rgb(6, 24, 107);
            border-width: 1px 1px 3px 1px;
            width: 250px;
            margin: 20px;
            line-height: 100%;
            color: #ffffff;
            font-size: 100%;
            font-weight: bold;
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            background: linear-gradient(to right, #000000, #130e0e);
            padding: 2%;
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

        .not {
            color: red;
            opacity: 1;
        }

        .back {
            font-size: 1.25rem;
            margin-left: 80%;
            font-size: 1.5rem;
            line-height: 1.4;
            margin-top: -3.5%;
        }

        a:hover {
            color: #4cf352;
        }

        p a {
            color: navy;
        }

        h2 {
            text-align: center;
            font-size: 220%;
            color: black;
        }
    </style>

</head>

<body>
    <button class="logout"><a href="admin_login.php">LOGOUT</a></button>



    <section class="table">
        <h2>EXAM REGISTRATION STATUS</h2>
        <p>(TO CHECK IF STUDENT REGISTERED FOR EXAM OR NOT)</p>
        <table>
            <tr>
                <th>USN</th>
                <th>STUDENT NAME</th>
                <th>ATTENDANCE</th>
                <th>STATUS</th>

            </tr>
            <tr>
                <td>1BM19CS119</td>
                <td>PRATIBHA JAMKHANDI</td>
                <td>85%</td>
                <td>REGISTERED</td>

            </tr>
            <tr>
                <td>1BM19CS118</td>
                <td>PRATHIKSHA KAMATH</td>
                <td>87%</td>
                <td>REGISTERED</td>

            </tr>
            <tr class="not">
                <td>1BM19CS124</td>
                <td>RANJI K</td>
                <td>86%</td>
                <td>PENDING</td>

            </tr>
            <tr>
                <td>1BM19ET014</td>
                <td>DEEPTHI L</td>
                <td>92%</td>
                <td>REGISTERED</td>

            </tr>
            <tr class="not">
                <td>1BM19CS145</td>
                <td>PALLAVI J</td>
                <td>79%</td>
                <td>PENDING</td>

            </tr>
            <tr class="not">
                <td>1BM19CS122</td>
                <td>PRITHVI J</td>
                <td>94%</td>
                <td>PENDING</td>

            </tr>
            <tr>
                <td>1BM19CS078</td>
                <td>BHAVYA SHARMA</td>
                <td>88%</td>
                <td>REGISTERED</td>

            </tr>
        </table>
    </section>
    <p class="back"><a href="admin_homepage.php" style="text-decoration:none;"><i class="fas fa-undo-alt"></i> Back to homepage</a></p>
</body>

</html>
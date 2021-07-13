
//deleting the data from the forms

<?php
include('session_admin.php')
$loggedin_dept = $_POST["dept_id"];
$_SESSION["dept_id"] = $loggedin_dept;

// $tbl_name1 = "exam_registration";
// $tbl_name2 = "student";
// $tbl_name3 = "exam";
$conn = mysqli_connect("$host", "$username", "$password") or die("cannot connect");
mysqli_select_db($conn, "$db_name") or die("cannot select DB");

$sql = "select course_id,name,sem,credits from course where dept_id = $did;";
$res = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($res);
$course_id = $row['course_id'];
$dname = $row['name'];
$dsem = $row['sem'];
$credits = $row['credits'];


// $sql = "SELECT e.usn AS usn,s.name as name,s.current_sem as sem FROM $tbl_name1 e,$tbl_name2 s
//             WHERE e.exam_id = '$eid' and e.usn = s.usn";

// $res = mysqli_query($conn, $sql);
// $count1 = mysqli_num_rows($res);
// //echo "{$count1}";
// $j = 0;
// while ($row = mysqli_fetch_assoc($res)) {
//     $i = 0;
//     $array[$j][$i++] = $row['usn'];
//     $array[$j][$i++] = $row['name'];
//     $array[$j][$i++] = $row['sem'];
//     $j++;
// }
$dep = $_POST['fname'];
$sql2 = "delete from course where dept_id = $dep;";
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . $conn->error;
  }

?>
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
        <h2>Courses</h2>
        <p>Select the course you want to delete</p>
        <?php
        if ($count1 == 0) {
            echo '<span style="font-size:120%";>NO STUDENT FOUND';
        } else {
        ?>
            <table id = "table">
                <tr>
                    <th>Course_id</th>
                    <th>Course name</th>
                    <th>Sem</th>
                    <th>Credits</th>
                </tr>
            <?php
            for ($j = 0; $j < $count1; $j++) {
                echo "<tr><td>$course_id</td><td>$dname</td><td>$dsem</td><td>$credits</td></tr>";
            }
        }
            ?>
            </table>
    </section>
    <p class="back"><a href="admin_homepage.php" style="text-decoration:none;"><i class="fas fa-undo-alt"></i> Back to homepage</a></p>
<form id = "myform" action="delete.php" method = "post">
<input name = 'fname'id = 'fname'>
</form>
</body>

<script>
            var table = document.getElementById("table");
            for(var i = 0; i<table.rows.length; i++){
                table.rows[i].onclick = function(){
                    //rIndex = this.rowIndex;
                    if(confirm("Are you sure you want to delete this course?")){
                    document.getElementById("fname").value = this.cells[0].innerHTML;

                    console.log(document.getElementById("fname").value);
                    if(document.getElementById("fname").value!=''){
                  submitform();
                    }
                }
                    
                };
            }

          

            function submitform() {
if (validate()) 
{

document.getElementById("myform").submit();
document.getElementById("fname").value = "";
}
};



function validate() {

var fname = document.getElementById("fname").value;


if (fname != '') {
return true;
} else {
alert("There is no value");
return false;
}

}


        </script>

</html>
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
        body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 0px 8px;
  border: none;
  cursor: pointer;
  width: 20%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Float cancel and delete buttons and add an equal width */
.cancelbtn, .deletebtn {
  float: left;
  width: 50%;
}

/* Add a color to the cancel button */
.cancelbtn {
  background-color: #ccc;
  color: black;
}

/* Add a color to the delete button */
.deletebtn {
  background-color: #f44336;
}

/* Add padding and center-align text to the container */
.container {
  padding: 16px;
  text-align: center;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
/* The Modal Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and delete button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .deletebtn {
     width: 100%;
  }
}
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

        button a {
            text-decoration: none;
            color: white;
        }


        .container {
            padding-left: 5%;
            background-color: lightblue;
        }

        input[type=text],
        input[type=date],
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

        input[type=date] {
            width: 25%;
        }

        .right hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
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

        button a {
            text-decoration: none;
            color: white;
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

        #profile {
            margin-top: 3%;
            text-align: center;
        }

        .detail,
        .person {
            display: inline-block;
            margin-bottom: 2%;
        }

        body {
            background-image: linear-gradient(to right, white, #4fb4e4);

            height: 100%;
        }

        .box {
            padding-top: 2%;
            padding-bottom: 1%;
            margin: 0 30% 0 30%;
            border: 2px solid black;
            background-color: white;

        }

        .person {
            font-weight: bold;
        }

        #active {
            color: #feea03;
            font-size: 130%;
            line-height: 120%;
            font-weight: 200;
        }

        .link {
            margin-left: 40%;
            font-size: 110%;
            font-weight: 150;
        }

        .link a:hover {
            color: #EE4B2B;
        }

    </style>

</head>

<body>

    <section class="right">
        <form method="POST" action="student_delete.php" name="form2">
         <section class="right" id="profile">
        <section class="box"> <img src="<?php echo $_SESSION['profile_url']; ?>" width="150px" height="175px" style="margin-top:-1%;"><br /><br />

            <div>

                <span class="person">NAME: </span>

                <span class="detail"><?php print "{$loggedin_name}" ?></span><br />
                <hr style="height:2px;border-width:0;background-color:black;margin: 2% 15% 2% 15%;">
                <span class="person">USN:</span>
                <span class="detail"><?php echo $row['usn']; ?></span><br />
                <hr style="height: 2px;border-width: 0;background-color: black;margin: 2% 15% 2% 15%;">
                <span class="person">SEMESTER:</span>
                <span class="detail"><?php echo $row['current_sem']; ?></span></br>
                <hr style="height: 2px;border-width: 0;background-color: black;margin: 2% 15% 2% 15%;">
                <span class="person">SECTION: </span>
                <span class="detail"><?php echo $row['section']; ?></span></br>
                <hr style="height: 2px;border-width: 0;background-color: black;margin: 2% 15% 2% 15%;">
                <span class="person">EMAIL: </span>
                <span class="detail"><?php echo $row['email']; ?></span></br>
                <hr style="height: 2px;border-width: 0;background-color: black;margin: 2% 15% 2% 15%;">
                <span class="person">PHONE: </span>
                <span class="detail"><?php print "{$loggedin_phone}" ?></span><br />

            </div>


            <button onclick="document.getElementById('id01').style.display='block'">DELETE</button>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
  <form class="modal-content" action="/action_page.php">
    <div class="container">
      <h1>Delete Account</h1>
      <p>Are you sure you want to delete your account?</p>
    
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="deletebtn">Delete</button>
      </div>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
        </form>
    </section>
</body>

</html>
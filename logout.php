<?php
session_start();
unset($_SESSION['user']);
header('Location: student_login.php');
session_destroy();

<html>
<head>
    
    <?php
    include('session.php');
    //session_start();
    ?>
<title>Change Password</title>

<link rel="stylesheet" type="text/css" href="styles.css" />
<style>
body {
font-family:Arial;
}
input {
font-family:Arial;
font-size:14px;
}
label{
font-family:Arial;
font-size:14px;
color:#999999;
}
.tblSaveForm {
border-top:2px #999999 solid;
background-color: #f8f8f8;
}
.tableheader {
background-color: #fedc4d;
}
.btnSubmit {
background-color:#fd9512;
padding:5px;
border-color:#FF6600;
border-radius:4px;
color:white;
}
.message {
color: #FF0000;
text-align: center;
width: 100%;
}
.txtField {
padding: 5px;
border:#fedc4d 1px solid;
border-radius:4px;
}
.required {
color: #FF0000;
font-size:11px;
font-weight:italic;
padding-left:10px;
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
.main-content__checkmark {
font-size: 9.75rem;
}           
.main-content__body {               
font-size: 1.25rem;
}
        
</style>
<script>
function validatePassword() {
var currentPassword,newPassword,confirmPassword,output = true;

currentPassword = document.frmChange.currentPassword;
newPassword = document.frmChange.newPassword;
confirmPassword = document.frmChange.confirmPassword;

if(!currentPassword.value) {
currentPassword.focus();
document.getElementById("currentPassword").innerHTML = "required";
output = false;
}
else if(!newPassword.value) {
newPassword.focus();
document.getElementById("newPassword").innerHTML = "required";
output = false;
}
else if(!confirmPassword.value) {
confirmPassword.focus();
document.getElementById("confirmPassword").innerHTML = "required";
output = false;
}
if(newPassword.value != confirmPassword.value) {
newPassword.value="";
confirmPassword.value="";
newPassword.focus();
document.getElementById("confirmPassword").innerHTML = "not same";
output = false;
} 	
return output;
}
</script>
</head>
<body>
	
<?php
$_SESSION["usn"]="$loggedin_usn ";
$conn = mysqli_connect("$host", "$username", "$password") or die("cannot connect");
mysqli_select_db($conn, "$db_name") or die("cannot select DB");

if (count($_POST) > 0) {
    $result = mysqli_query($conn, "SELECT *from student WHERE usn='" . $_SESSION["usn"] . "'");
    $row = mysqli_fetch_array($result);
    if ($_POST["currentPassword"] == $row['password']) {
        mysqli_query($conn, "UPDATE student set password='" . $_POST["newPassword"] . "' WHERE usn='" . $_SESSION["usn"] . "'");
        $message = "Password Changed";
    } else
        $message = "Current Password is not correct";
}
?>
<form name="frmChange" method="post" action="" onSubmit="return validatePassword()">
<div style="width:500px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr class="tableheader">
<td colspan="2">Change Password</td>
</tr>
<tr>
<td width="40%"><label>Current Password</label></td>
<td width="60%"><input type="password" name="currentPassword" class="txtField"/><span id="currentPassword"  class="required"></span></td>
</tr>
<tr>
<td><label>New Password</label></td>
<td><input type="password" name="newPassword" class="txtField"/><span id="newPassword" class="required"></span></td>
</tr>
<td><label>Confirm Password</label></td>
<td><input type="password" name="confirmPassword" class="txtField"/><span id="confirmPassword" class="required"></span></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>
</table>
</div>
</form>
<div class="main-content">
        <i class="fa fa-check main-content__checkmark" id="checkmark"></i>
        <p class="main-content__body" data-lead-id="main-content-body"><a href="student_homepage.php" style="text-decoration:none;"><i class="fas fa-undo-alt"></i> Back to Homepage</a> </p>
    </div>

</body>
</html>
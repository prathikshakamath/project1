<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<body >
	<table width="100%" height="100%" >
	  <tr width="200" height="100" >
	     <td ><?php include 'header.php'; ?>  </td>
	  </tr>
	  <tr height="300">
	     <td width = "220" >
	     <?php include 'nav.php'; ?>
	     </td>
	     <td width="100%" height="100%"  align="left" valign="top">
<?php
#action of add.php
$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="admin_db"; 
$tbl_name="employee"; 
$conn = mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
mysqli_select_db($conn,"$db_name")or die("cannot select DB");

$name=$_POST["name"];
$age=$_POST["age"];
$location =$_POST["location"];
$salary=$_POST["salary"];
// To protect MySQL injection (more detail about MySQL injection)
$name = stripslashes($name);
$age = stripslashes($age);
$location = stripslashes($location);
$salary = stripslashes($salary);
$name = mysqli_real_escape_string($conn,$name);
$age = mysqli_real_escape_string($conn,$age);
$location = mysqli_real_escape_string($conn,$location);
//echo "location- $location";
$salary = mysqli_real_escape_string($conn,$salary);

$sql="INSERT INTO employee(name,Age,location,salary)   VALUES ('$name', '$age' ,'$location','$salary')";
$result=mysqli_query($conn,$sql);
?>      
        <div >
        <font size ="5"><?php echo "Saved Successfully....";?></font><br>
        </div>
        </td>    
	   </tr>
	       </table>	  
	</body>
</html>

<?php
include('session.php');
if (isset($_POST['but_upload'])) {

    $name = $_FILES['file']['name'];
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);

    // Select file type
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Valid file extensions
    $extensions_arr = array("jpg", "jpeg", "png");

    // Check extension
    if (in_array($imageFileType, $extensions_arr)) {
        // Upload file
        $conv = explode('.', $name);
        $ext = $conv['1'];
        // $conn = mysqli_connect("$host", "$username", "$password") or die("cannot connect");
        if (move_uploaded_file($_FILES['file']['tmp_name'], "upload/" . $loggedin_usn . "." . $imageFileType)) {
            // Insert record
            $url = $loggedin_usn . "." . $imageFileType;
            //echo "{$url}";
            $sql = "UPDATE student SET image_url='$url' WHERE usn='$loggedin_usn'";
            if (mysqli_query($conn, $sql)) {
                echo "Profile updated successfully";
            } else {
                echo "Error updating Profile: " . mysqli_error($conn);
            }
        }
    }
}
?>

<form method="post" action="" enctype='multipart/form-data'>
    <input type='file' name='file' />
    <input type='submit' value='Save name' name='but_upload'>
</form>
<?php
echo '<p class="link"><a href="student_homepage.php" style="text-decoration:none;"><i class="fas fa-undo-alt"></i> Back to homepage</a></p>';
?>
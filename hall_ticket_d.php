<!doctype html>
<html lang="en">
  <head>
  
  <?php
    include('session.php');
    ?>

  <style>
  table, th, td {
    border: 1px solid #000000 !important;
}
  
  .txt-center {
    text-align: center;
}
.border- {
    border: 1px solid #000 !important;
}
.padding {
    padding: 15px;
}
.mar-bot {
    margin-bottom: 15px;
}
.admit-card {
    border: 2px solid #000;
    padding: 25px;
    margin: 20px 0;
}
.BoxA h5, .BoxA p {
    margin: 0;
}
h5 {
    text-transform: uppercase;
}
table img {
    width: 100%;
    margin: 0 auto;
}
.table-bordered td, .table-bordered th, .table thead th {
    border: 1px solid #000000 !important;
}
</style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>admit Card</title>



  </head>
  <body>
    
<section>
	<div class="container">
		<div class="admit-card">
			<div class="BoxA border- padding mar-bot"> 
				<div class="row">
					<div class="col-sm-4">
						<h5>BMS COLLEGE OF ENGINEERING</h5>
						
					</div>
					<div class="col-sm-4 txt-center">
						<img src="images/bmsce_logo.png" width="100px;" />
					</div>
					<div class="col-sm-4">
						<h5>Admit Card</h5>
						<p>B.Tech - 2019</p>
					</div>
				</div>
			</div>
			
			<div class="BoxD border- padding mar-bot">
				<div class="row">
					<div class="col-sm-10">
						<table class="table table-bordered">
						 
							<tr>
							  <td><b>USN : <?php echo $row['usn']; ?></b></td>
							  <td><b>Course: </b> B.TECH</td>
							</tr>
							<tr>
							  <td><b>STUDENT NAME: <?php print "{$loggedin_name}" ?></b></td>
							  <td><b>SEMESTER: <?php echo $row['current_sem']; ?></b></td>
							</tr>
							<tr>
							  <td><b>SECTION: </b><?php echo $row['section']; ?></td>
							  <td><b>EMAIL: <?php echo $row['email']; ?> </b></td>
							</tr>
							
						 
						</table>
					</div>
					<div class="col-sm-2 txt-center">
						<table class="table table-bordered">
						  <tbody>
							<tr>
							  <th scope="row txt-center"><img src="images/profilepic.jpg" width="123px" height="125px" /></th>
							</tr>
						  </tbody>
						</table>
					</div>
				</div>
			</div>
			
			<div class="BoxF border- padding mar-bot txt-center">
				<div class="row">
					<div class="col-sm-12">
                    <section class="center">
    <?php
        $tbl_name3 = "timetable";
        $tbl_name4 ="exam";
        $tbl_name1 ="course";
        $tbl_name2 ="course_enrolled";
        $conn = mysqli_connect("$host", "$username", "$password") or die("cannot connect");
        mysqli_select_db($conn, "$db_name") or die("cannot select DB");

        $sql = "SELECT distinct t.course_id AS cid,c.name as name,t.exam_date as date  FROM $tbl_name3 t,$tbl_name4 e,$tbl_name1 c ,$tbl_name s,$tbl_name2 ce
    WHERE s.email='$usermail'and ce.sem=s.current_sem and s.usn=ce.usn and t.course_id=c.course_id and e.exam_id=t.exam_id ";
        $res = mysqli_query($conn, $sql);
        $_SESSION["count1"] = mysqli_num_rows($res);
        $j = 0;
        while ($row = mysqli_fetch_assoc($res)) {
            $i = 0;

            $array[$j][$i++] = $row['cid'];
            $array[$j][$i++] = $row['name'];
            $array[$j][$i++] = $row['date'];
            $j++;
        }
        ?>
        <h2>TIME TABLE</h2>
        <table style="width:1000px;">
            <tr>
                <th>COURSE CODE</th>
                <th>COURSE TITLE</th>
                <th>DATE</th>
            </tr>
            <?php
            $count = $_SESSION["count1"];
            for ($j = 0; $j < $count; $j++) {
                echo "<tr><td>{$array[$j][0]}</td><td> {$array[$j][1]}</td><td>{$array[$j][2]}</td></tr>";
            }
            ?> 
        </table>
    </section>
					</div>
				</div>
			</div>
			<footer class="txt-center">
				<p>*** BMS COLLEGE OF ENGINEERING ***</p>
			</footer>
			
		</div>
	</div>
	
</section>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
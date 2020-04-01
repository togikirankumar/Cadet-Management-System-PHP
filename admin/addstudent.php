<?php require_once('../include/Session.php');?>
<?php require_once('../include/Functions.php');?>
<?php echo AdminAreaAccess(); ?>

<?php include('../header.php') ?>




 <div class="container-fluid top-social-container">
          <span class="follow-call">Follow us on</span>
          <a href="#" class="fa fa-facebook top-social-icons"></a>
          <a href="#" class="fa fa-twitter top-social-icons"></a>
          <a href="#" class="fa fa-linkedin top-social-icons"></a>
        </div>



            <div class="container-fluid">
                <div class="row" style="border-bottom: 2px solid #f58220;border-top: 2px solid #f58220;">
                    <div >
                         <img class="org-logo" src="../Images/image39.png" height="50" width="50" alt="">
                          <img class="org-logo" src="../Images/image52.png" height="50" width="50" alt="">
                            <h1 style="float:center;display:inline;padding-left: 150px;">
                                INSERT CADET DETAILS</h2>
                               <span><a href="admindash.php" class="btn btn-success" style="float: left;">BACK TO DASHBOARD</a><span>
                                <span style="float: right;"><a href="logout.php" class="btn btn-info btn-lg">LOGOUT</a></span>

                    </div>
                </div>
            </div>


<div class="container jumbotron">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">

			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
				  <div class="form-group">
				      Enrollment No.:<input type="text" class="form-control" name="roll" placeholder="Enter Enrollment No." >
				  </div>
				  <div class="form-group">

				    Full Name:<input type="text" class="form-control" name=" Enter Fullname" placeholder="full name" required>
				  </div>
				  <div class="form-group">
				      City: <input type="text" class="form-control" name="city" placeholder="Enter City" required>
				  </div>
				  <div class="form-group">

				    Contact No.:<input type="text" class="form-control" name="pphone" placeholder="Enter Contact No." required>
				  </div>
				  <div class="form-group">

				    Batch:<input type="number" class="form-control" name="standard" placeholder="Enter Student Batch" required>
				  </div>

				   <div class="form-group">

				    Image:<input type="file" class="form-control" name="simg" required>
				  </div>

				  <button type="submit" name="submit" class="btn btn-success btn-lg">INSERT</button>
			</form>
		</div>
	</div>
</div>

<?php include('../footer.php') ?>

<?php

	if (isset($_POST['submit'])) {
		if (!empty($_POST['roll']) && !empty($_POST['fullname'])) {

			include ('../dbcon.php');
			$roll=$_POST['roll'];
			$name=$_POST['fullname'];
			$city=$_POST['city'];
			$pphone=$_POST['pphone'];
			$standard=$_POST['standard'];
			include('ImageUpload.php');

			$sql = "INSERT INTO `student`( `rollno`, `name`, `city`, `pcontact`, `standard`,`image`) VALUES ('$roll','$name','$city','$pphone',$standard,'$imgName')";

			$run = mysqli_query($conn,$sql);

			if ($run == true) {

				?>
				<script>
					alert("Data Inserted Successfully");
				</script>
				<?php
			} else {
				echo "Error : ".$sql."<br>". mysqli_error($conn);
			}
		} else {
				?>
				<script>
					alert("Please insert atleast roll no. and fullname");
				</script>
				<?php
		}


	}

 ?>









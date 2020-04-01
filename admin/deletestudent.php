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
                                DELETE CADET'S INFORMATION</h2>
                               <span><a href="admindash.php" class="btn btn-success" style="float: left;">BACK TO DASHBOARD</a><span>
                                <span style="float: right;"><a href="logout.php" class="btn btn-info btn-lg">LOGOUT</a></span>

                    </div>
                </div>
            </div>



<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3  jumbotron ">
			<div  style="text-align: center;">
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data" >
				Choose Batch: <select name="standard" class="btn btn-info" style="margin-right: 30px;">					<option>Select</option>
									<option>2017</option>
									<option>2018</option>
									<option>2019</option>
									<option>2020</option>

								</select>
				<input type="submit" name="search" value="SEARCH" class="btn btn-success">
			</form>
			</div>
		</div>
	</div>


<table class="table table-striped table-bordered table-responsive text-center">
	<h2 class="text-center">Student's Information</h2>
	<tr>

		<th class="text-center">Enrollment No.</th>
		<th class="text-center">Full Name</th>
		<th class="text-center">City</th>
		<th class="text-center">Contact No.</th>
		<th class="text-center">Profile Pic</th>
		<th class="text-center">Delete</th>

	</tr>
<?php
	include('../dbcon.php');
	if (isset($_POST['search'])) {

		$standard = $_POST['standard'];

		$sql = "SELECT * FROM `student` WHERE `standard` = '$standard'";

		$result = mysqli_query($conn,$sql);
		if (mysqli_num_rows($result)>0) {
			while ($DataRows = mysqli_fetch_assoc($result)) {
				$Id = $DataRows['id'];
				$RollNo = $DataRows['rollno'];
				$Name = $DataRows['name'];
				$City = $DataRows['city'];
				$Pcontact = $DataRows['pcontact'];
				$ProfilePic = $DataRows['image'];
				?>
				<tr>
					<td><?php echo $RollNo;?></td>
					<td><?php echo $Name; ?></td>
					<td><?php echo $City; ?></td>
					<td><?php echo $Pcontact; ?></td>
					<td><img src="../databaseimg/<?php echo $ProfilePic;?>" alt="img"></td>
					<td><a href="deleterecord.php?Delete=<?php echo $Id; ?>&Picture=<?php echo $ProfilePic;?>" class="btn btn-danger">Delete</a></td>
				</tr>
				<?php

			}

		} else {
			echo "<tr><td colspan ='6' class='text-center'>No Record Found</td></tr>";
		}
	}

 ?>


</table>
</div>

<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<h2><?php echo @$_GET['deleted']; ?></h2>
			</div>
		</div>
	</div>



<?php include('../footer.php') ?>

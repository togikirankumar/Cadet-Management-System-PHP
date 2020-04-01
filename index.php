
<?php
//include header part of html
 include('header.php')
  ?>

        <div class="container-fluid top-social-container">
          <span class="follow-call">Follow us on</span>
          <a href="#" class="fa fa-facebook top-social-icons"></a>
          <a href="#" class="fa fa-twitter top-social-icons"></a>
          <a href="#" class="fa fa-linkedin top-social-icons"></a>
        </div>





            <div class="container-fluid">
                <div class="row" style="border-bottom: 2px solid #f58220;border-top: 2px solid #f58220;">
                    <div >
                         <img class="org-logo" src="Images/image39.png" height="50" width="50" alt="">
                          <img class="org-logo" src="Images/image52.png" height="50" width="50" alt="">
                            <h2 style="text-align:center;display:inline">
                                WELCOME TO CADET MANAGEMENT SYSTEM
                                <span style="float: right;"><a href="login.php" class="btn btn-info btn-lg">Admin Login</a></span>
                            </h2>
                    </div>
                </div>
            </div>
            <section class="bgimg">
            <div class="student-info text-center ">
                <div class="container-fluid ">
                    <div class="row">
                        <div class="col-md-12 jumbotron bgimg">
                            <h2 style="font-weight: bold">Cadet's information</h2>
                            <form action="index.php" method="post">
                <input type="text" name="roll" placeholder="Enter Enrollment Number" style="width: 240px;height: 35px;"><span>OR/AND<span>
                 <select name="standard" class="btn btn-info" >
                                    <option>SELECT YEAR</option>
                                    <option>2017</option>
                                    <option>2018</option>
                                    <option>2019</option>
                                    <option>2020</option>

                                </select>
                  <input type="submit" name="show" value="SHOW INFO" class="btn btn-success text-center" style="margin-left: 30px;" >
                            </form>
                        </div>
                    </div>
                </div>
            </div></section>

<table class="table table-striped table-bordered table-responsive text-center">
    <tr >
        <th class="text-center">Enrollment No.</th>
        <th class="text-center">Batch</th>
        <th class="text-center">Full Name</th>
        <th class="text-center">City</th>
        <th class="text-center">Contact No.</th>
        <th class="text-center">Profile Pic</th>
    </tr>
<?php
    include('dbcon.php');
    if (isset($_POST['show'])) {

        $Standard = $_POST['standard'];
        $RollNo = $_POST['roll'];

        $sql = "SELECT * FROM `student` WHERE `standard` = '$Standard' OR `rollno`='$RollNo'";

        $result = mysqli_query($conn,$sql);
        if (mysqli_num_rows($result)>0) {
            while ($DataRows = mysqli_fetch_assoc($result)) {
                $Id = $DataRows['id'];
                $RollNo = $DataRows['rollno'];
                $Name = $DataRows['name'];
                $City = $DataRows['city'];
                $Pcontact = $DataRows['pcontact'];
                $Standard = $DataRows['standard'];
                $ProfilePic = $DataRows['image'];
                ?>
                <tr>
                    <td><?php echo $RollNo;?></td>
                    <td><?php echo $Standard;?></td>
                    <td><?php echo $Name; ?></td>
                    <td><?php echo $City; ?></td>
                    <td><?php echo $Pcontact; ?></td>
                    <td><img src="databaseimg/<?php echo $ProfilePic;?>" alt="img"></td>
                </tr>
                <?php

            }

        } else {
            echo "<tr><td colspan ='7' class='text-center'>No Record Found</td></tr>";
        }
    }

 ?>



<!--include header part of html-->
<?php include('footer.php') ?>


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
                                WELCOME TO ADMIN DASHBOARD</h2>
                                <span style="float: right;"><a href="logout.php" class="btn btn-info btn-lg">LOGOUT</a></span>

                    </div>
                </div>
            </div>





<div class="admin-dashboard text-center">
        <div class="container">

            <div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 jumbotron" >
                        <a href="addstudent.php" class="btn btn-info btn-lg">INSERT CADET DETAIL</a><br><br>
                        <a href="updatestudent.php" class="btn btn-info btn-lg">UPDATE CADET DETAIL</a><br><br>
                        <a href="deletestudent.php" class="btn btn-info btn-lg">DELETE CADET DETAIL</a>
                    </div>
                </div>
            </div>
        </div>
</div>

<?php include('../footer.php') ?>

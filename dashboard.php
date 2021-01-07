<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/d5273ad2f6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style2.css">
    <title>Admin Deshboard</title>
  </head>

<body>
  <nav  class="navbar navbar-expand-lg navbar-light " id="headnav">
    <a class="navbar-brand" href="#">
    <i class="fas fa-university"></i>
  </a>
    <form class="form-inline  ">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">

    </form>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <div class="mr-auto"></div>
      <ul class="navbar-nav my-2 my-lg-0">

      <li class="nav-item active">
        <a class="nav-link text-light" href="#"><i class="fas fa-bell"></i><span class="sr-only">(current)</span></a>
      </li>
<li class="nav-item active">
        <a class="nav-link text-light" href="#"><i class="fas fa-star" id="important"></i><span class="sr-only">(current)</span></a>
      </li>
                          
      <li class="dropdown">
      <div class="btn-group dropleft">
  <button type="button" class="btn btn-secondary dropdown-toggle bg-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <i class="fa fa-user-circle"></i><?php //echo $name001; ?>
  </button>

                      <ul id="g-account-menu" class="dropdown-menu pl-15 pr-15 mt-10 " role="menu">
                           <li><a href="myprofile.php" class="headeraa"><i class="fa fa-user-secret"></i> My Profile</a></li>
                           <li><a href="changepassword.php" class="headeraa"><i class="fa fa-lock"></i> Change Password</a></li>
                           <li><a href="editprofile.php" class="headeraa"><i class="fa fa-user-secret"></i> Edit profile </a></li>
                           <?php 
                           include ('conn.php');
                           if($role=='admin'){ ?>
                           <li><a href="login_logged.php" class="headeraa"><i class="fa  fa-sign-in"></i> Login Users </a></li>
                           <?php } ?> 
                           <li><a href="database/logout.php" class="headeraa"><i class="fa fa-sign-out"></i> Logout</a></li>
                      </ul>

        </li>

      </ul>

      </div>
</nav>
    <div class="container">
    
        <div class="row">
        
        <nav aria-label="breadcrumb">
        
  <ol class="breadcrumb">
  
     <li class="navbar-expand-lg"  style="width:900px";" aria-current="page"> <i class="fas fa-map-signs"></i> Dashboard</li>
  </ol>
</nav>
          <div class="col-md-3">
            <div class="list-group">
              <!-- <a href="index.php?page=dashboard"    class="list-group-item list-group-item-action active"><i class="fas fa-tachometer-alt"></i> Dashboard</a> -->
              <a href="dashboard.php"  class="list-group-item list-group-item-action"><i class="fa fa-user-plus"></i> Dashboard</a>
              <a href="team_member.php"  class="list-group-item list-group-item-action"><i class="fa fa-users"></i> Team members</a>
              <a href="team_performance.php"    class="list-group-item list-group-item-action"><i class="fa fa-users"></i> Team performance</a>
              <a href="remark_view.php" class="list-group-item list-group-item-action"><i class="fa fa-user"></i> View Remark</a>
              <a href="distributed_students.php" class="list-group-item list-group-item-action"><i class="fa fa-user"></i> Total Students</a>
              <a href="upload_student_details.php" class="list-group-item list-group-item-action"><i class="fa fa-user"></i> Upload data</a>
              <a href="" class="list-group-item list-group-item-action"><i class="fa fa-user"></i> Add Student</a>
              <a href="distributed_students.php" class="list-group-item list-group-item-action"><i class="fa fa-user style="color" ></i> Distribute student</a>
              <a href="assigned_students.php" class="list-group-item list-group-item-action"><i class="fa fa-user"></i> Assign student</a>
              <a href="assigned_student.php" class="list-group-item list-group-item-action"><i class="fa fa-user"></i> Report</a>
             <a href="profile_edit.php" class="list-group-item list-group-item-action"><i class="fa fa-user"></i> User Profile</a> 
            </div></div>
            <div class="col-md-9" id="box">


<div class="row" id="container2">
<a href="index.php?page=add-student"></a>
<div class="col-sm-4">
     <div class="card text-white bg-info mb-3">
      <div class="card-header">
        <div class="row">
          <div class="col-sm-4">
            <i class="fa fa-users fa-3x"></i>
          </div>
          <a href="total_students.php"></a>
          <div class="col-sm-8">
            <div class="float-sm-right">&nbsp;<span style="font-size: 30px"><?php //$tusers=mysqli_query($db_con,'SELECT * FROM `users`'); $tusers= mysqli_num_rows($tusers); echo $tusers; ?></span></div>
            <div class="clearfix"></div>
            <div class="float-sm-right"><a href="total_students.php">Total Students</a></div>
          </div>
        </div></a>
        </div>
    </div>
  </div>
</a>
  <div class="col-sm-4">
     <div class="card text-white bg-info mb-3">
      <div class="card-header">
        <div class="row">
          <div class="col-sm-4">
            <i class="fa fa-users fa-3x"></i>
          </div>
          <div class="col-sm-8">
            <div class="float-sm-right">&nbsp;<span style="font-size: 30px"><?php //$tusers=mysqli_query($db_con,'SELECT * FROM `users`'); $tusers= mysqli_num_rows($tusers); echo $tusers; ?></span></div>
            <div class="clearfix"></div>
            <div class="float-sm-right">Team members</div>
          </div>
        </div>
        </div>
    </div>
  </div>
  <div class="col-sm-4">
     <div class="card text-white bg-info mb-3">
      <div class="card-header">
        <div class="row">
          <div class="col-sm-4">
            <i class="fa fa-users fa-3x"></i>
          </div>
          <div class="col-sm-8">
            <div class="float-sm-right">&nbsp;<span style="font-size: 30px"><?php //$tusers=mysqli_query($db_con,'SELECT * FROM `users`'); $tusers= mysqli_num_rows($tusers); echo $tusers; ?></span></div>
            <div class="clearfix"></div>
            <div class="float-sm-right">Distributed student</div>
          </div>
        </div>
        </div>
    </div>
  </div>
  <div class="col-sm-4">
     <div class="card text-white bg-info mb-3">
      <div class="card-header">
        <div class="row">
          <div class="col-sm-4">
            <i class="fa fa-users fa-3x"></i>
          </div>
          <div class="col-sm-8">
            <div class="float-sm-right">&nbsp;<span style="font-size: 30px"><?php //$tusers=mysqli_query($db_con,'SELECT * FROM `users`'); $tusers= mysqli_num_rows($tusers); echo $tusers; ?></span></div>
            <div class="clearfix"></div>
            <div class="float-sm-right">Positive Response</div>
          </div>
        </div>
        </div>
    </div>
  </div>
  <div class="col-sm-4">
     <div class="card text-white bg-info mb-3">
      <div class="card-header">
        <div class="row">
          <div class="col-sm-4">
            <i class="fa fa-users fa-3x"></i>
          </div>
          <div class="col-sm-8">
            <div class="float-sm-right">&nbsp;<span style="font-size: 30px"><?php //$tusers=mysqli_query($db_con,'SELECT * FROM `users`'); $tusers= mysqli_num_rows($tusers); echo $tusers; ?></span></div>
            <div class="clearfix"></div>
            <div class="float-sm-right">Negative Response</div>
          </div>
        </div>
        </div>
    </div>
  </div>
  <div class="col-sm-4">
     <div class="card text-white bg-info mb-3">
      <div class="card-header">
        <div class="row">
          <div class="col-sm-4">
            <i class="fa fa-users fa-3x"></i>
          </div>
          <div class="col-sm-8">
            <div class="float-sm-right">&nbsp;<span style="font-size: 30px"><?php //$tusers=mysqli_query($db_con,'SELECT * FROM `users`'); $tusers= mysqli_num_rows($tusers); echo $tusers; ?></span></div>
            <div class="clearfix"></div>
            <div class="float-sm-right">Transfer Students</div>
          </div>
        </div>
        </div>
    </div>
  </div>
  <div class="col-sm-4">
     <div class="card text-white bg-info mb-3">
      <div class="card-header">
        <div class="row">
          <div class="col-sm-4">
            <i class="fa fa-users fa-3x"></i>
          </div>
          <div class="col-sm-8">
            <div class="float-sm-right">&nbsp;<span style="font-size: 30px"><?php //$tusers=mysqli_query($db_con,'SELECT * FROM `users`'); $tusers= mysqli_num_rows($tusers); echo $tusers; ?></span></div>
            <div class="clearfix"></div>
            <div class="float-sm-right">Fake Students</div>
          </div>
        </div>
        </div>
    </div>
  </div>
  <div class="col-sm-4">
     <div class="card text-white bg-info mb-3">
      <div class="card-header">
        <div class="row">
          <div class="col-sm-4">
            <i class="fa fa-users fa-3x"></i>
          </div>
          <div class="col-sm-8">
            <div class="float-sm-right">&nbsp;<span style="font-size: 30px"><?php //$tusers=mysqli_query($db_con,'SELECT * FROM `users`'); $tusers= mysqli_num_rows($tusers); echo $tusers; ?></span></div>
            <div class="clearfix"></div>
            <div class="float-sm-right">Number of visits</div>
          </div>
        </div>
        </div>
    </div>
  </div>
  <div class="container3 text-light" id="fot">
      <p class="footext">Course wise outcome</p>
      </div><br><br>
      <div class="col-sm-4">
     <div class="card text-white bg-info mb-3">
      <div class="card-header">
        <div class="row">
          <div class="col-sm-4">
            <i class="fa fa-users fa-3x"></i>
          </div>
          <div class="col-sm-8">
            <div class="float-sm-right">&nbsp;<span style="font-size: 30px"><?php //$tusers=mysqli_query($db_con,'SELECT * FROM `users`'); $tusers= mysqli_num_rows($tusers); echo $tusers; ?></span></div>
            <div class="clearfix"></div>
            <div class="float-sm-right">B.Tech</div>
          </div>
        </div>
        </div>
    </div>
  </div>
  <div class="col-sm-4">
     <div class="card text-white bg-info mb-3">
      <div class="card-header">
        <div class="row">
          <div class="col-sm-4">
            <i class="fa fa-users fa-3x"></i>
          </div>
          <div class="col-sm-8">
            <div class="float-sm-right">&nbsp;<span style="font-size: 30px"><?php //$tusers=mysqli_query($db_con,'SELECT * FROM `users`'); $tusers= mysqli_num_rows($tusers); echo $tusers; ?></span></div>
            <div class="clearfix"></div>
            <div class="float-sm-right">B.Tech</div>
          </div>
        </div>
        </div>
    </div>
  </div>
  <div class="col-sm-4">
     <div class="card text-white bg-info mb-3">
      <div class="card-header">
        <div class="row">
          <div class="col-sm-4">
            <i class="fa fa-users fa-3x"></i>
          </div>
          <div class="col-sm-8">
            <div class="float-sm-right">&nbsp;<span style="font-size: 30px"><?php //$tusers=mysqli_query($db_con,'SELECT * FROM `users`'); $tusers= mysqli_num_rows($tusers); echo $tusers; ?></span></div>
            <div class="clearfix"></div>
            <div class="float-sm-right">MBA</div>
          </div>
        </div>
        </div>
    </div>
  </div>
  <div class="col-sm-4">
     <div class="card text-white bg-info mb-3">
      <div class="card-header">
        <div class="row">
          <div class="col-sm-4">
            <i class="fa fa-users fa-3x"></i>
          </div>
          <div class="col-sm-8">
            <div class="float-sm-right">&nbsp;<span style="font-size: 30px"><?php //$tusers=mysqli_query($db_con,'SELECT * FROM `users`'); $tusers= mysqli_num_rows($tusers); echo $tusers; ?></span></div>
            <div class="clearfix"></div>
            <div class="float-sm-right">B.pharma</div>
          </div>
        </div>
        </div>
    </div>
  </div>
  <div class="col-sm-4">
     <div class="card text-white bg-info mb-3">
      <div class="card-header">
        <div class="row">
          <div class="col-sm-4">
            <i class="fa fa-users fa-3x"></i>
          </div>
          <div class="col-sm-8">
            <div class="float-sm-right">&nbsp;<span style="font-size: 30px"><?php //$tusers=mysqli_query($db_con,'SELECT * FROM `users`'); $tusers= mysqli_num_rows($tusers); echo $tusers; ?></span></div>
            <div class="clearfix"></div>
            <div class="float-sm-right">M.Pharma</div>
          </div>
        </div>
        </div>
    </div>
  </div>
  <div class="container3 text-light" id="fot">
      <p class="footext">Your Task</p>
      </div><br><br>
  <?php 
			                  // include 'database/config.php';
                              // $qry11="SELECT count(E_ID) EIDS,Lead_allotment_Date,U_ID,Transfer_by FROM `tbl_lead_distribution` WHERE U_ID='$username' and flag=1 ORDER BY Lead_allotment_Date DESC";
                              // $row2=mysqli_query($connect,$qry11);
                              // if ($row2->num_rows > 0) 
                               {
                                   // while($rohan1 = $row2->fetch_assoc())
                                     {
                                           // $hello=$rohan1['Transfer_by'];  
                                       ?>
                                       <div class="assign">
                                           <div class="panel panel-info"  style="margin-top: 0px;" id="assign">
									          <div class="panel-heading">
									            <div class="row">
									              <div class="col-xs-6">
									               <h3  class="textsize1">Student Assigned to you <?php// echo $rohan1['EIDS'];?></h3>
									               <p>Date-<?php// echo date('h:i A d-m-Y',strtotime($rohan1['Lead_allotment_Date'])); ?></p>
									               </div>
									                <div class="col-xs-6 text-right" style="margin-top: 15px;"> 
			                                         <p class="announcement-heading"><?php //echo $rohan1['EIDS'];?></p>

			                                         <?php
			                                          // $qry15="select Name from tbl_userinfo where U_ID='$hello'";
			                                          // $Assigned_by_name1=mysqli_query($connect,$qry15);
			                                          // if($userName=mysqli_fetch_assoc($Assigned_by_name1))
											              {
											              	?>
											                   <p class="announcement-text">By-<?php //echo $userName['Name']; ?></p>
											                <?php 
											              }
			                                         ?>
			                                         
			                                     </div>
									            </div>
									          </div>
									          <a href="Recentalyallot.php">
									            <div class="panel-footer announcement-bottom">
									              <div class="row">
									                <div class="col-xs-6">
									                  View
									                </div>
									                <div class="col-xs-6 text-right">
									                  <i class="fa fa-arrow-circle-right"></i>
									                </div>
									              </div>
									            </div>
									          </a>
									        </div>      
			                            <?php
			                            
			                           }
			                      }
                     ?>
                     <br><br>                
 </div></div></div>
 <footer>
      <div class="container3 text-light" id="fot">
      <p class="footext">Copyright &copy; 2016 to <?php echo date('Y') ?></p>
      </div>
    </footer>

            </body>
</html>
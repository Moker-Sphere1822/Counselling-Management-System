<?php
   include "database/conn.php";  
   $username=$_SESSION['username'];

   if(isset($_SESSION['username']))
   {
   $query = "select *from cms_userinfo where username='$username'";
   $result = mysqli_query($connect, $query);
   if($value1=mysqli_fetch_assoc($result))
              {
                if ($value1['profile_image']=='')
                 {
                    $value1['profile_image']='default.png';
                 }
              
                    $nameuser=$value1['Name'];
                    $role=$value1['Role'];
              }

    $user_arr = array ( 'username' => $username,'role' => $role); 
    $_SESSION['user'] = $user_arr;   

            
?>

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
      <li class="dropdown">
      <div class="btn-group dropleft">
  <button type="button" class="btn btn-secondary dropdown-toggle bg-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <i class="fa fa-user-circle"></i><?php //echo $nameuser; ?>
  </button>

                      <ul id="g-account-menu" class="dropdown-menu pl-15 pr-15 mt-10 " role="menu">
                           <li><a href="myprofile.php" class="headeraa"><i class="fa fa-user-secret"></i> My Profile</a></li>
                           <li><a href="changepassword.php" class="headeraa"><i class="fa fa-lock"></i> Change Password</a></li>
                           <li><a href="editprofile.php" class="headeraa"><i class="fa fa-user-secret"></i> Edit profile </a></li>
                           <?php if($role=='admin'){ ?>
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
     <li class="breadcrumb-item active"  style="width:800px;" aria-current="page"> Dashboard</li>
  </ol>
</nav>
    
                  <?php
                    if($role=='admin')
                     {
                    ?>
             <div class="col-md-3">
            <div class="list-group">
              <!-- <a href="index.php?page=dashboard"    class="list-group-item list-group-item-action active"><i class="fas fa-tachometer-alt"></i> Dashboard</a> -->
              <a href="dashboard.php"  class="list-group-item list-group-item-action"><i class="fa fa-user-plus"></i> Dashboard</a>
              <a href="team_member.php"  class="list-group-item list-group-item-action"><i class="fa fa-users"></i> Team members</a>
              <a href="team_performance.php"    class="list-group-item list-group-item-action"><i class="fa fa-users"></i> Team performance</a>
              <a href="remark-view.php" class="list-group-item list-group-item-action"><i class="fa fa-user"></i> View Remark</a>
              <a href="total_students.php" class="list-group-item list-group-item-action"><i class="fa fa-user"></i> Total Students</a>
              <a href="upload_student_details.php" class="list-group-item list-group-item-action"><i class="fa fa-user"></i> Upload data</a>
              <a href="mannually_upload.php" class="list-group-item list-group-item-action"><i class="fa fa-user"></i> Add Student</a>
              <a href="distributed_students.php" class="list-group-item list-group-item-action"><i class="fa fa-user style="color" ></i> Distribute student</a>
              <a href="assigned_students.php" class="list-group-item list-group-item-action"><i class="fa fa-user"></i> Assign student</a>
              <a href="report.php" class="list-group-item list-group-item-action"><i class="fa fa-user"></i> Report</a>
             <a href="profile_edit.php" class="list-group-item list-group-item-action"><i class="fa fa-user"></i> User Profile</a> 
            </div></div>
                    <?php
                     }
                     elseif($role=='sub-admin')
                     {
                    ?>     
                            <a href="dashboard.php"  class="list-group-item list-group-item-action"><i class="fa fa-user-plus"></i> Dashboard</a>
                            <a href="assigned_students.php" class="list-group-item list-group-item-action"><i class="fa fa-user"></i> Assigned student</a>
                            <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-user"></i> positive</a>
                            <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-user"></i> closedt</a>
                    <?php
                      }
                     
                     elseif($role=='Teamuser')
                      {
                        ?>
                            <a href="dashboard.php"  class="list-group-item list-group-item-action"><i class="fa fa-user-plus"></i> Dashboard</a>
                            <a href="assigned_students.php" class="list-group-item list-group-item-action"><i class="fa fa-user"></i> Assigned student</a>
                            <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-user"></i> positive</a>
                            <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-user"></i> closedt</a>
                        <?php
                      }
                      else
                      {
                        ?>
                          <h1>Nothing</h1>
                        <?php
                      }
                      ?>          
                           
                 </li>
            </ul>
        


<?php
  }
   else
   {
       header('Location: index.php');
   }
?>
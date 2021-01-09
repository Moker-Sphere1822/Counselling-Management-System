<?php

  ?>
  <?php
            include "database/conn.php";
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password']))
             {
				          $user=$_POST['username'];
				          $pass=$_POST['password'];
               // query to check whether the username is present in user table 
                  $qry1="select Status from cms_userinfo where username='$user'";
                  $qry2=mysqli_query($connect,$qry1);
                  $row=mysqli_fetch_assoc($qry2);             
                  if($row['Status']==1)
                  {
                    // to check uername and password are correct 
                  	  $qry3="select *from cms_userinfo where username='$user' and Password='$pass'";
                  	  $qry4=mysqli_query($connect,$qry3);
                  	  $row1=mysqli_num_rows($qry4);
                      if($row1>0)
                      
                  	  {
                        echo"hey";
                  	  	 if($row3=mysqli_fetch_assoc($qry4))
                  	  	 {
                  	       $_SESSION['username'] = $row3['username'];
                           $login_user=$row3['U_ID'];
                           // to track login logout time of all uers
                           $login_time="insert into cms_user_logininfo(U_ID,login_date_time) values('$login_user',sysdate())";
                           $login_qry=mysqli_query($connect,$login_time);
                  	       header('location:dashboard.php');
                  	     }  
                  	  }
                  	  else
                  	  {
                  	  	$msg="Wrong Email And Password.";
                  	  }

                  }
                  else
                  {
                  	$msg="Your Account is not acctivated.";
                  }
                
             }
            // else{
            //  $msg="user not found";
            // }
            
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/d5273ad2f6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body><br>
<h1><b><b>Welcome to Counselling Management System</b></h1>
<div class="container">
        <h1>Login</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        <h6 class = "form-signin-heading" style="color:red;"><?php echo $msg; ?></h6> 
        <div class="form-group">
          <i class="fas fa-user"></i>
          <label for="username">Username</label>
          <input type="email" name="username" class="form-control" id="username" placeholder="">
        </div>
       <div class="form-groupp
       ">
       <i class="fas fa-unlock-alt"></i>
          <label for="Password">Password</label>
          <input type="password" name="password" class="form-control" id="Password" placeholder="Password">
       </div> 
      <div><br>
      <button type="submit" name="login" class="btn btn-primary">login</button><br><br>
        <a class="log" href="#">forget your password?</a>
      </div>
    </form><!-- form -->
    
  <!-- content -->
</div><!-- container -->
</body>
</html>

<?php include "header.php"; ?>

<div class="col-lg-10 col-md-9 col-sm-8 col-xs-12">
  <div class="container-fluid backgrounddesign">
  <div class="row">
  <div class="col-md-9" id="box">
    <div>
    <h1 style="color:grey;margin-left: 5px;"><i>Profile</i></h1>
  	<hr> 
   <div class="emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4" style="margin-top: 25px;margin-left: 50px;">
                        <div class="profile-img">
                            <img src="profile_images/<?php echo $value1['profile_image']; ?>" width="200px" height="200px" class="avatar img-circle"/>
                            <button class="btn" style="margin-left: 40px;">Change Profile</button> 
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                          <?php
                            if($role=='admin' || $role=='subadmin-gn' || $role=='subadmin-r' || $role=='Teammember')
                            {
                              ?>
                                    <h2>
                                       <?php echo $value1['Name'];?>
                                    </h2>
                                 
                                    <table class="table">
                                      <tr>  
                                      <th>Campus</th>
                                      <td><?php echo $value1['Campus'];?></td>
                                      </tr>
                                      <tr>  
                                      <th>Department</th>
                                      <td><?php echo $value1['Department'];?></td>
                                      </tr>
                                      <tr>  
                                      <th>Email Id</th>
                                      <td><?php echo $value1['U_ID'];?></td>
                                      </tr>
                                       <tr> 
                                      <th>Team Information</th>
                                      <td><?php echo $value1['Team_info'];?></td>
                                      </tr>
                                       <tr> 
                                      <th>Edit Details</th>
                                      <td><a href="editprofile.php" class="btn btn-primary">Edit</a></td>
                                      </tr>                                       
                                    </table>
                            <?php
                            }
                            ?>

                        </div>
                    </div>
                </div>
                </div>
            </form>           
        </div>
</div>
</div>
</div>                         
</div></div>
<div class="col-md-1 col-sm-1 col-xs-12">
</div>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>profile</h1>
</body>
</html>
<?php //include "footer.php"; ?>
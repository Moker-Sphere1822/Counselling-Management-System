<?php include "header.php"; ?>

<div class="col-lg-10 col-md-9 col-sm-8 col-xs-12">
      <?php

         if(isset($_POST['submit'])) 
         {
             
              $msg='';
            
                $email=$_POST['email'];
                $password=$_POST['password'];
                $myname=$_POST['updatename'];
                $dpt=$_POST['updatedpt'];
                $campus1=$_POST['updatcampus'];
                $teaminfo1=$_POST['updateteaminfo'];
               //image file type  
                $name= $_FILES['proimg']['name'];
                $tmp_name= $_FILES['proimg']['tmp_name'];
                if (isset($name)) 
                 { 
                   $path= 'profile_images/';
                   if (!empty($name))
                    {
                       if (move_uploaded_file($tmp_name, $path.$name)) 
                        {
                      

                        }
                    }
                 }

                
               
                
                 $sql="UPDATE `tbl_userinfo` SET `Name`='$myname',`Department`='$dpt',`Campus`='$campus1',`Team_info`='$teaminfo1',`profile_image`='".$name."' WHERE `U_ID`='$email' and `Password`='$password'";
                 $qry1=mysqli_query($connect,$sql);
                      if($qry1==true)
                      {
                          
                         ?>
                           <script type="text/javascript">
                             alert("Data Updated Successfully..");
                             window.open('editprofile.php');
                           </script>

                         <?php
                          
                      }
                      else
                      {
                          ?>
                           <script type="text/javascript">
                             alert("Something Went Wrong Please Try Again...");
                             window.open('editprofile.php');
                           </script>

                         <?php                      }
            
             }             
          
?>        
<div class="backgrounddesign">
    <h1 style="color: grey;margin-left: 7px;"><i>Edit Profile</i></h1>
  	<hr>
	<div class="row">
      <!-- left column -->
    <form class="form-horizontal" action="editprofile.php" method="post" enctype="multipart/form-data">  
      <div class="col-md-3">
        <div class="text-center">
          <img src="profile_images/<?php echo $value1['profile_image']; ?>" width="100px" height="100px" class="avatar img-circle" alt="avatar">
          <h6>Upload a different photo...</h6>          
          <input type="file" name="proimg" accept="image/*" class="form-control">
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-7 personal-info" style="margin-top: 5px;">
        <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
           You Can Edit Your Information Here.

          
        </div>
        <h3>Personal info</h3>
     
          <div class="form-group">
            <label class="col-lg-3 control-label">Name:</label>
            <div class="col-lg-7">
              <input class="form-control" type="text" name="updatename" value="<?php echo $value1['Name']; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Campus:</label>
            <div class="col-lg-7">
              <input class="form-control" type="text" name="updatcampus" value="<?php echo $value1['Campus']; ?>">
            </div>
          </div>
           <div class="form-group">
            <label class="col-lg-3 control-label">Department:</label>
            <div class="col-lg-7">
              <input class="form-control" type="text" name="updatedpt" value="<?php echo $value1['Department']; ?>">
            </div>
          </div>
            <div class="form-group">
            <label class="col-lg-3 control-label">Team Info:</label>
            <div class="col-lg-7">
              <input class="form-control" type="text" name="updateteaminfo" value="<?php echo $value1['Team_info']; ?>" > 
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-7">
              <input class="form-control" type="text" name="email" value="<?php echo $value1['U_ID']; ?>" placeholder="Email">
            </div>
          </div>
        
          <div class="form-group">
            <label class="col-md-3 control-label">Password:</label>
            <div class="col-md-7">
              <input class="form-control" type="password" name="password" value="" placeholder="password">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-7">
             <button class="btn btn-primary" name="submit">Update</button>        
            </div>
          </div>
        </form>
      </div>
  </div>
<hr>                  
</div>
</div>

<div class="col-md-1 col-sm-1 col-xs-12">
</div>

<?php include "footer.php"; ?>
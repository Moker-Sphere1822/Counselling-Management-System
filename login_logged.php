<?php include "header.php";
if($role=='admin')
{
 ?>

<div class="col-lg-10 col-md-9 col-sm-8 col-xs-12 backgrounddesign" style="margin-top: 0px!important;">
  <hr>
	<div class="container-fluid bg-light ">
  <div class="row align-items-center justify-content-center">
      <form action="login_logged.php" method="post">
                        <div class="col-md-4 pt-3">                      
                            <div class="form-group">
                             <select  class="form-control"  name="user_name">
                                       <option disabled selected>-Search By Name-</option>
                                       <?php  
                                        if($role=='admin')
                                        {
                                           $qry6="SELECT * FROM `tbl_userinfo`";
                                        }
                                                                           
                                        $optiondata=mysqli_query($connect,$qry6);
                                        if ($optiondata->num_rows > 0) 
                                        {
                                            while($optdata = $optiondata->fetch_assoc())
                                                {
                                                 ?>
                                                    <option value="<?php echo $optdata['U_ID'];?>"><?php echo $optdata['Name'];?></option>
                                               <?php
                                            }
                                          }
                                          else
                                          {
                                            echo "0 results";
                                          }

                                      ?>    
                                    </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                         <button type="submit" name="search_users" class="btn btn-primary btn-block">Search</button>
                      </div>
                </form>      
                  </div>
         </div>
   <hr>
        <table class="table table-striped table-bordered">
          <thead style="background-color: #337ab7;">
            <tr style="color: white;">
              <th>S.no.</th>
              <th>User Name</th>
              <th>Login Time</td>
              <th>Logged Time</th>           
            </tr>
          </thead>
          <tbody>
          <?php 
            include "database/config.php";
            if (isset($_POST['search_users'])) 
            {
                  $user_name=$_POST['user_name'];
                  $Search_qry="SELECT * FROM `tbl_user_logininfo` WHERE U_ID='$user_name' ORDER BY login_date_time DESC";
                  $searchdata=mysqli_query($connect,$Search_qry);
                                        if ($searchdata->num_rows > 0) 
                                        {
                                            while($optdata = $searchdata->fetch_assoc())
                                                {
                                                   $login_date_time=date('h:i A d-m-Y',strtotime($optdata['login_date_time']));
                                                   $logged_date_time=date('h:i A d-m-Y',strtotime($optdata['logged_date_time']));
                                                 ?>
                                                   <tr>
                                                    <td><?php echo $optdata['S.no']; ?></td>
                                                    <td><?php echo $optdata['U_ID']; ?></td>
                                                    <td><?php echo $login_date_time; ?></td>
                                                    <td><?php echo $logged_date_time; ?></td>
                                                   </tr> 
                                                 <?php
                                                 }
                                          }      
            }         

          ?>
         </tbody>
       </table>          
 
</div>

<div class="col-md-1 col-sm-1 col-xs-12">   
</div>
<?php 
}
include "footer.php"; ?>
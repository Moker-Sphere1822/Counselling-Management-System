<?php include "header.php"; ?>
 <div class="col-lg-10 col-md-9 col-sm-8 col-xs-12">
       <div class="search-table">        
            <div class="search-list">
                <h2 style="color: white;">Update Information</h2>
                <table class="table table-striped table-bordered" >
                    <tbody>
                <?php
                    // $msg='';

                      $r1='';
                      $r2='';
                      $r3='';
                      $r4='';
                      $ten_th='';
                      $twl_th='';
                      $board='';
                      $Visit1='';
                      $ten_visti_date='';
                      $status_Id='';
                      $Reason_of_transfer='';
                     include "database/config.php";  
                     $username=$_SESSION['username'];
                     $en_id=$_GET['id'];
                    if($role='admin')
                    {
                       $qry18="select * from tbl_lead_distribution where E_ID=$en_id";
                    }
                    else
                    {
                       $qry18="select * from tbl_lead_distribution where E_ID=$en_id and U_ID='$username'";
                    } 
                     $enq_id=mysqli_query($connect,$qry18);
                     $leadDstributionData=mysqli_fetch_assoc($enq_id);

                     if(count($leadDstributionData)>0)
                            {
              
                                         $r1=$leadDstributionData['R1'];
                                         $r2=$leadDstributionData['R2'];
                                         $r3=$leadDstributionData['R3'];
                                         $r4=$leadDstributionData['R4'];
                                         $WhatsApp=$leadDstributionData['whatsapp_no'];
                                         $ten_th=$leadDstributionData['10th'];
                                         $twl_th=$leadDstributionData['12th'];
                                         $board=$leadDstributionData['board'];
                                         $Visit1=$leadDstributionData['visit'];
                                         $ten_visti_date=$leadDstributionData['Tentative_visit_date'];
                                         $status_Id=$leadDstributionData['status'];
                                         $Reason_of_transfer=$leadDstributionData['Reason_of_transfer'];
                            }   
                        $qry31="select Student_Name from tbl_lead_management where E_ID=$en_id";
                        $stu_name=mysqli_query($connect,$qry31);
                        $Student_name=mysqli_fetch_assoc($stu_name);
                        $Name_student=$Student_name['Student_Name'];      
                         ?>   
                                  <tr>
                                      <td>Student Name :</td>
                                      <td><?php echo $Name_student;?></td>
                                  </tr>
                                  <tr>
                                      <td>Remarks 1 :</td>
                                      <td><?php echo $r1;?></td>
                                  </tr>
                                  <tr>
                                      <td>Remarks 2 :</td>
                                      <td><?php echo $r2;?></td>
                                  </tr>
                                  <tr>
                                      <td>Remarks 3 :</td>
                                      <td><?php echo $r3;?></td>
                                  </tr>
                                  <tr>
                                      <td>Remarks 4 :</td>
                                      <td><?php echo $r4;?></td>
                                  </tr>
                                  <tr>
                                      <td>WhatsApp no:</td>
                                      <td><?php echo $WhatsApp ?></td>
                                  </tr>
                                  <tr>
                                      <td>10% :</td>
                                      <td><?php echo $ten_th ?>%</td>
                                  </tr>

                                  <tr>
                                      <td>12% :</td>
                                      <td><?php echo $twl_th ?>%</td>
                                  </tr>
                                     <tr>
                                      <td>Board :</td>
                                      <td><?php echo $board ?></td>
                                  </tr>
                                  <tr>
                                      <td>Tentative visit Date</td>
                                      <td><?php echo $ten_visti_date ?></td>
                                  </tr>
                                  <tr>
                                      <td>Visit Status</td>
                                      <td><?php echo $Visit1 ?></td>
                                  </tr>
                                  <tr>
                                      <td>Final Status</td>
                                      <td><?php echo $status_Id ?></td>
                                   </tr>
                              <?php 
                                   if($role=='Subadmin-r' || $role=='Teamuser')
                                   { 
                                     ?>
                                        <tr>
                                          <td>Transfer Reason</td>
                                          <td><?php echo $Reason_of_transfer ?></td>
                                        </tr>
                                     <?php
                                    }
                               ?>      
                                  <tr>
                                     <td colspan="2"><button data-toggle="modal" data-target="#squarespaceModal" class="btn btn-xs btn-info">Update Information</button></td>
                                   </tr> 
                          
                    </tbody>
                </table>
            </div>
        </div>

<!-- line modal -->
<div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header" style="background-color:#337ab7;">
      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
      <h3 class="modal-title"  id="lineModalLabel" style="color: white;">Fill Information</h3>
    </div>
    <div class="modal-body">
            <form class="form-horizontal" method="post" action="database/edit_all_inquires.php">
              <fieldset>
                   <div class="form-group">
                       <label class="col-sm-2 control-label" for="textinput">Remark 1 </label>
                       <div class="col-sm-10">
                           <input type="text" name="remark1" placeholder="Remark one" value='<?php echo $r1 ?>' class="form-control" <?php if(count($leadDstributionData)>0){if ($r1!=NULL) {
                            echo "readonly";
                             # code...
                           } } ?>>
                           <input type="hidden" name="e_id" value="<?php echo $en_id; ?>" class="form-control" >
                       </div>
                     </div>  
                     
                     <div class="form-group">
                         <label class="col-sm-2 control-label" for="textinput">Remark 2</label>
                         <div class="col-sm-10">
                             <input type="text" name="remark2" placeholder="Remark two" value="<?php echo $r2 ?>" class="form-control" <?php if(count($leadDstributionData)>0){if ($r2!=NULL) {
                            echo "readonly";
                             # code...
                           } } ?>>
                         </div>
                      </div> 

                    <!-- Text input-->
                    <div class="form-group">
                          <label class="col-sm-2 control-label" for="textinput">Remark 3 </label>
                          <div class="col-sm-10">
                              <input type="text" name="remark3" placeholder="Remark three" value='<?php echo $r3 ?>' class="form-control" <?php if(count($leadDstributionData)>0){if ($r3!=NULL) {
                            echo "readonly";
                             # code...
                           } } ?>>
                          </div>
                     </div> 
                    
                    <div class="form-group">
                          <label class="col-sm-2 control-label" for="textinput">Remark 4 </label>
                          <div class="col-sm-10">
                             <input type="text" name="remark4" placeholder="Remark four" value='<?php echo $r4 ?>' class="form-control" <?php if(count($leadDstributionData)>0){if ($r4!=NULL) {
                            echo "readonly";
                             # code...
                           } } ?>>
                          </div>
                        </div>
            
                    
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="textinput">WhatsApp_no </label>
                      <div class="col-sm-4">
                          <input type="number" name="WhatsApp" placeholder="WhatsApp" value='<?php echo $WhatsApp ?>' class="form-control">
                      </div>
                     </div> 

                     <!-- Text input-->
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="textinput">10% </label>
                      <div class="col-sm-4">
                          <input type="number" name="percen1" placeholder="10th percentage" value='<?php echo $ten_th ?>' class="form-control">
                      </div>

                      <label class="col-sm-2 control-label" for="textinput">12% </label>
                      <div class="col-sm-4">
                          <input type="number" name="percen2" placeholder="12th percentage" value='<?php echo $twl_th ?>' class="form-control">
                      </div>
                    </div>
                    
                    <div class="form-group">
                    <label for="inputcourse" class="control-label col-xs-2">Course</label>
                    <div class="col-xs-10">
                       <select name="Course" class="form-control">
                            <option selected="" disabled="">-Course-</option>
                            <option>MBA</option>
                            <option>B.Tech</option>
                            <option>Pharmacy</option>
                            <option>M.Pharmacy</option>
                            <option>M.Tech</option>
                       </select>
                    </div>
                </div>

              <div class="form-group">
                 <label for="inputbranch" class="control-label col-xs-2">Branch</label>
                   <div class="col-xs-10">
                <select class="form-control" name="Branch">
                      <option selected="" disabled="">-Branch-</option>
                      <option>CSE</option>
                      <option>ME</option>
                      <option>CE</option>
                      <option>EC</option>
                      <option>EE</option>
                      <option>MBA</option>
                      <option>B.PHARMA</option>
                      <option>M.PHARMA</option>
               </select>
              </div>  
              </div> 
                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="textinput">Board </label>
                      <div class="col-sm-10">
                          <input type="text" name="board1" value='<?php echo $board ?>'  class="form-control">
                      </div>
                    </div> 

                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="textinput">Tentative_visit_Date </label>
                      <div class="col-sm-10">
                        <input type="date" class="form-control" value='<?php echo $ten_visti_date ?>' name="visitdate" id="userdate" onchange="TDate()"/>
                      </div>
                    </div>


                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="textinput">Visit_Status</label>
                      <div class="col-sm-10">
                         <select class="form-control"  name="status1">
                            <option value="No" <?php if($Visit1=="No") echo 'selected="selected"'; ?> >No</option>
                            <option value="Yes" <?php if($Visit1=="Yes") echo 'selected="selected"'; ?>>Yes</option> 
                         </select>
                      </div>
                    </div>
                    

                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="textinput">Final_Status </label>
                      <div class="col-sm-10">
                        <select class="form-control" name="final_status">
                            <option value="0" <?php if($status_Id=="") echo 'selected="selected"'; ?> disabled="">-Final Status-</option>
                            <option value="Positive" <?php if($status_Id=="Positive") echo 'selected="selected"'; ?>>Positive</option>
                            <option value="Converted" <?php if($status_Id=="Converted") echo 'selected="selected"';?>>Converted</option>
                            <option value="Closed" <?php if($status_Id=="Closed") echo 'selected="selected"'; ?>>Closed</option>
                            <option value="Open" <?php if($status_Id=="Open") echo 'selected="selected"'; ?>>Open</option>
                            <option value="Fake Inquirey" <?php if($status_Id=="Fake Inquirey") echo 'selected="selected"'; ?>>Fake Inquirey</option>
                         </select>
                      </div>
                    </div>

                    <div class="form-group">
                       <button value="submit" class="form-control"  name="update_button"  class="btn btn-default btn-hover-green">Update</button>
                    </div>
                  </fieldset>  
                 </form>
            
    </div>
  </div>
  </div>
</div>                   
</div>

<div class="col-md-1 col-sm-1 col-xs-12">   
</div>
<?php include "footer.php"; ?>
<script type="text/javascript">
  function TDate()
   {
      var UserDate = document.getElementById("userdate").value;
      var ToDate = new Date();

      if (new Date(UserDate).getTime() <= ToDate.getTime())
       {
            alert("The Date must be Bigger or Equal to today date");
            return false;
       }
      return true;
   }
</script>

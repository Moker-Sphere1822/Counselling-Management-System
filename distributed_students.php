
<?php include "header.php"; ?>

<div class="col-lg-9 col-md-9 col-sm-8 col-xs-11 backgrounddesign" style="margin-left: 15px;">
	    <div class="row">
		    <h3 style="margin-left:15px;color: #337ab7;"><i>Distribute Inquires Here</i></h3>
	    </div>
    
        <div class="row">
		        <div class="col-md-12">
                  <div class="table-responsive">           
                   <table id="datatable" class="table table-striped table-bordered tabledata" cellspacing="0" width="100%">
    				<thead>
						<tr>
						<?php
						if($role=='admin')
			                {
			                    ?>	
									<th>Enquiry_Id</th>
									<th>Student Name</th>
									<th>Course</th>
									<th>Mobile</th>
									<th>Email_Id</th>
									<th>Branch</th>
									<th>City</th>
									<th>State</th>
									<th>Date</th>
									<th>Source</th>
									<th>Delete</th>
									<th>Select</th>
						<?php
                            }
                            elseif($role=='Subadmin-gn' || $role=='Subadmin-r')
                            {
                            	?>
                            	    <th>L_ID</th>
									<th>E_ID</th>
									<th>Assign By</th>
									<th>Student Name</th>
									<th>Course</th>
									<th>Mobile</th>
									<th>Branch</th>
		                            <th>City</th>
		                            <th>State</th>
		                            <th>Select</th>
		                <?php            
                            }	
								?>	
						</tr>
					</thead>

					<tbody>

						<?php 
                               include 'database/config.php';
			                   if($role=='admin')
			                    {
			                      
			                               $qry5="SELECT * FROM `tbl_lead_management` WHERE flag=0";
			                               $inquires=mysqli_query($connect,$qry5);

			                               if ($inquires->num_rows > 0) 
			                               {
			                                    while($allinquires = $inquires->fetch_assoc())
			                                     {
			                                       ?>
			                                         <tr>
															<td><?php echo $allinquires['E_ID']; ?></td>
															<td><?php echo $allinquires['Student_Name']; ?></td>
															<td><?php echo $allinquires['Course']; ?></td>
															<td><?php echo $allinquires['Mobile_no']; ?></td>
															<td><?php echo $allinquires['Email_id']; ?></td>
															<td><?php echo $allinquires['Branch']; ?></td>
															<td><?php echo $allinquires['City']; ?></td>
															<td><?php echo $allinquires['State']; ?></td>
															<td><?php echo $allinquires['Date']; ?></td>
															<td><?php echo $allinquires['Source']; ?></td>
								                            <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><i class="fa fa-trash"></i></span></button></p></td>
								                           <td><input type="checkbox" data-id="<?php echo $allinquires['E_ID']; ?>" class="eidClass"></td>
									                     
													</tr>   
			                                       <?php
			                                     }
			                               }
			                               else 
			                               {
			                                  echo "0 results";
			                               }
			                             
			                    }
			                    elseif($role=='Subadmin-gn' || $role=='Subadmin-r')
			                    {

			                               $qry14="select ifnull(tld.L_ID,'')L_ID,
			                                         tld.E_ID,
			                                         tld.U_ID,
			                                         tld.Transfer_by,
			                                         tld.flag,  
			                                         tlm.Student_Name,
			                                         tlm.Course,
			                                         tlm.Mobile_no,
			                                         tlm.Branch,
			                                         tlm.City,
			                                         tlm.State
			                                         from tbl_lead_distribution tld inner join tbl_lead_management tlm on tld.E_ID=tlm.E_ID where U_ID='$username'";
			                               $inquires1=mysqli_query($connect,$qry14);

			                               if ($inquires1->num_rows > 0) 
			                               {
			                                    while($allAssign1 = $inquires1->fetch_assoc())
			                                     {
			                                     	 $hello=$allAssign1['Transfer_by']; 
			                                       ?>
			                                         <tr>
			                                         	        <td><?php echo $allAssign1['L_ID']; ?></td>
                                                                <td><?php echo $allAssign1['E_ID']; ?></td>
                												
                												<?php
					                                                 $qry22="select Name from tbl_userinfo where U_ID='$hello'";
					                                                 $Assigned_by_name1=mysqli_query($connect,$qry22);
					                                                 if($userName=mysqli_fetch_assoc($Assigned_by_name1))
					                                                  {
					                                                    ?>
					                                                        <td><?php echo $userName['Name']; ?></td>
					                                                    <?php 
					                                                  }
				                                                ?>
                												<td><?php echo $allAssign1['Student_Name']; ?></td>
                												<td><?php echo $allAssign1['Course']; ?></td>
                												<td><?php echo $allAssign1['Mobile_no']; ?></td>
                												<td><?php echo $allAssign1['Branch']; ?></td>
                												<td><?php echo $allAssign1['City']; ?></td>
                												<td><?php echo $allAssign1['State']; ?></td>
       								                       <?php    
									                         if($role=='Subadmin-gn')
									                         {
									                         	?>
	                                                                <td><input type="button" data-title="Transfer_lead" data-toggle="modal"  data-target="#Transfer_leads"  value="Transfer" id="<?php echo $allAssign1['E_ID']; ?>" class="btn-primary Transfer_leads"></td></td>
	                                                            <?php  
									                         }
									                         else
									                         {
									                         ?>   
									                             <td><input type="checkbox" data-id="<?php echo $allAssign1['E_ID']; ?>" class="eidClass"></td>
									                          <?php
									                         }
								                       ?>  
													 </tr>   
			                                       <?php
			                                     }
			                               }
			                               else 
			                               {
			                                  echo "0 results";
			                               }  
			                    }     
						     ?>
						     <tr>
						     	<td colspan="12">
						     	  <div>
						     	  <?php
						     	  if($role=='admin' or $role=='Subadmin-r')
						     		{
						     		  ?>	
	                                    <label style="float: right;"> 
							     		<select  class="form-control" style="float: right;" id="custID">
	                                     <option disabled selected>-Distribute To-</option>
							     		 <?php	
							     		  if($role=='admin')
							     		  {
							     		  	$qry6="SELECT * FROM `tbl_userinfo`";
							     		  }
							     		  elseif($role=='Subadmin-r')
							     		  {
							     		  	$qry6="SELECT * FROM `tbl_userinfo` WHERE role IN('Teamuser') and Team_info IN('RB online Team')";
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
						     		</label>
						           <?php
						           }
						         ?>		
						     	  </div> 	
						     	</td>
						     </tr>
						  <?php
						    if($role=='admin' or $role=='Subadmin-r')
						     	{
						         ?>  
								     <tr>
								     	<td colspan="12">
								             <button type="button" class="btn btn-primary submitBtn3" id="submithere" style="float: right;">Submit</button>
								     	</td>
								     </tr>
							  <?php
							 }
						  ?>	     
					</tbody>
				</table>
				


       	</div>
	</div>
</div>
<!--this model is for subadmin-gn transfer leads-->
<div class="modal fade" id="Transfer_leads" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header" style="background-color:#337ab7;">
      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
      <h3 class="modal-title"  id="lineModalLabel" style="color: white;">Transfer Lead To Ratibad</h3>
    </div>
    <div class="modal-body">
            <form class="form-horizontal" method="post" action="database/transfer_to_ratibad.php">
              <fieldset>
                    <!-- Text input-->
                     <div class="form-group">
                       <label class="col-sm-2 control-label" for="textinput">E_ID:</label>
                       <div class="col-sm-10">
                           <input type="text" name="enquiry_id" id="remarkValue" value="<?php echo $tran_id ?>"  class="form-control">
                          <!--<input type="hidden" name="e_id" value="<?php echo $en_id; ?>" class="form-control" >-->
                       </div>
                     </div> 

                    <div class="form-group">
                       <label class="col-sm-2 control-label" for="textinput">Remark 1:</label>
                       <div class="col-sm-10">
                           <input type="text" name="remark1" placeholder="Remark one" class="form-control">
                          <!--<input type="hidden" name="e_id" value="<?php echo $en_id; ?>" class="form-control" >-->
                       </div>
                     </div>  
                     
                     <div class="form-group">
                         <label class="col-sm-2 control-label" for="textinput">Transfer Reason:</label>
                         <div class="col-sm-10">
                             <textarea type="text" rows="5" name="transferreason" placeholder="Transfer Reason"  class="form-control"></textarea>
                         </div>
                      </div>                 
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="textinput">Transfer To:</label>
		                    <div class="col-sm-10">
		                        <select class="form-control" name="userName">
		                        <?php	
                                    $qry6="SELECT * FROM `tbl_userinfo` WHERE role IN('Subadmin-r')";
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

                    <div class="form-group">
                        <button value="submit" class="form-control"  name="update_button"  class="btn btn-default btn-hover-green">Transfer</button>
                    </div>
                  </fieldset>  
                 </form>
            
    </div>
  </div>
  </div>
</div>                   
</div>
<!--end this model is for subadmin-gn transfer leads-->

<!--this is for delete inquiry-->       
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog">
       <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
            </div>
          <div class="modal-body"> 
	         <div class="alert alert-danger"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
             </span> Are you sure you want to delete this Record?</div>
	       
	      </div>
	         <div class="modal-footer ">
	           <button type="button" class="btn btn-success" ><i class="fa fa-check"></i> Yes</button>
	           <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i></span> No</button>
	         </div>
	      </div> 
        </div>
    </div>                        
</div>
<!--end this is for delete inquiry-->
<div class="col-md-1 col-sm-1 col-xs-12"></div>

   
<?php include "footer.php"; ?>
<script type="text/javascript">
	$(document).on('click','.Transfer_leads',function(){
		var id = $(this).attr('id');
		$('#remarkValue').attr('value',id);
	});
	$(document).on('click','#submithere',function()
	 {       
	 		//$('.error_class').html('');
			var custID = $('#custID option:selected').val();
			
			var eid = [];
			$(".eidClass").each(function()
			{
				if ($(this).prop('checked'))
				{
					eid.push($(this).attr('data-id'));

				}
		    });
	$.ajax({
			type: "POST",
			url:'database/distribute_lead.php',			
			data: {'custID':custID,'eid':eid},
			dataType: 'JSON',
			beforeSend: function () 
            {
            	  $('.submitBtn3').prop('disabled',true);
                  $('.tabledata').css('opacity', '.5');
            },
			success: function (data) 
			{	
				console.log(data);
				if(data.status=='success')
				{   
				    
				    
              		alert("Data Distributed Successfully!");
              		setTimeout(function(){ location.reload() });
					
				}
			},
			error: function (xhr)
			{
                    
                    setTimeout(function(){ location.reload() });
              	    $('.submitBtn3').prop('disabled',false);
				    alert("Somthing went wrong.","An error occured: " + xhr.status + " " + xhr.statusText);
			}
		});
		return false;
			
	});		
</script>
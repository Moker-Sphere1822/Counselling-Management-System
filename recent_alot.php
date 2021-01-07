<?php include "header.php"; ?>

<div class="col-lg-10 col-md-9 col-sm-8 col-xs-12 backgrounddesign" style="margin-top: 0px!important;">
	<div class="row">
		
	</div>
    
        <div class="row">
		
<div class="col-md-12">           
 <div class="table-responsive">            
   <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
    				<thead>
						<tr>
							<th>L_ID</th>
							<th>E_ID</th>
							<th>Assign By</th>
							<th>Student Name</th>
							<th>Course</th>
							<th>Mobile</th>
							<th>Branch</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Date</th>
                            <th>Lead_Alloted_Date</th>
                            <th>Update</th>
						</tr>
					</thead>
					<tbody>
						<?php 
                               include 'database/config.php';
                               $qry9="select ifnull(tld.L_ID,'')L_ID,
                                             tld.E_ID,
                                             tld.U_ID,
                                             tld.Transfer_by,
                                             tld.flag,
                                             tld.Lead_allotment_Date,  
                                             tlm.Student_Name,
                                             tlm.Course,
                                             tlm.Mobile_no,
                                             tlm.Branch,
                                             tlm.City,
                                             tlm.State,
                                             tlm.Date from tbl_lead_distribution tld inner join tbl_lead_management tlm on tld.E_ID=tlm.E_ID where U_ID='$username'";
                               $Assign=mysqli_query($connect,$qry9);

                               if ($Assign->num_rows > 0) 
                               {
                                    while($allAssign = $Assign->fetch_assoc())
                                     {
                                      $hello=$allAssign['Transfer_by'];
                                     	$flag=$allAssign['flag'];
                                     	 if($flag==1)
                                     	  {
                                            ?>   
                                             <tr>
                                                      <td><?php echo $allAssign['L_ID']; ?></td>
                              												<td><?php echo $allAssign['E_ID']; ?></td>
                              												
                              												<?php
                                                         $qry21="select Name from tbl_userinfo where U_ID='$hello'";
                                                         $Assigned_by_name1=mysqli_query($connect,$qry21);
                                                         if($userName=mysqli_fetch_assoc($Assigned_by_name1))
                                                          {
                                                            ?>
                                                                <td><?php echo $userName['Name']; ?></td>
                                                            <?php 
                                                          }
                                                      ?>
                              												<td><?php echo $allAssign['Student_Name']; ?></td>
                              												<td><?php echo $allAssign['Course']; ?></td>
                              												<td><?php echo $allAssign['Mobile_no']; ?></td>
                              												<td><?php echo $allAssign['Branch']; ?></td>
                              												<td><?php echo $allAssign['City']; ?></td>
                              												<td><?php echo $allAssign['State']; ?></td>
                              												<td><?php echo $allAssign['Date']; ?></td>
                              												<td><?php echo date('h:i A d:m:Y',strtotime($allAssign['Lead_allotment_Date'])); ?></td>
              					                           <td><a href="edit_inquires.php?id=<?php echo $allAssign['E_ID']; ?>"><button  class="btn btn-primary btn-xs" ><i class="fa fa-pencil"></i>Edit</button></a></td>
              										           </tr>   
                                         <?php
                                        }
                                     }
                               }
                               else 
                               {
                                  echo "0 results";
                               }
                             ?>					
					</tbody>
				</table>

	        </div>
	    </div>
	</div>
</div>


    
    
    
   
</div>

<div class="col-md-1 col-sm-1 col-xs-12">   
</div>

<?php include "footer.php"; ?>
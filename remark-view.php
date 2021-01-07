<?php include "header.php";
if($role=='admin')
{
 ?>

<div class="col-lg-10 col-md-9 col-sm-8 col-xs-12 backgrounddesign" style="margin-top: 0px!important;">
	<div class="row" style="margin-bottom: 10px;margin-top: 5px;">
         		   <div class="search-box">
                    <div class="col-md-3">
                        <h4 ><i>Search Remarks : </i></h4>
                    </div>
                    <div class="col-md-7">
                        <input type="text" id="myInput" onkeyup="myFunction()" class="form-control" placeholder="Search all">
                        <script>
                            $(document).ready(function () 
                            {
                                $("#myInput").on("keyup", function ()
                                 {
                                    var value = $(this).val().toLowerCase();
                                    $("#myTable tr").filter(function ()
                                     {
                                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                                    });
                                });
                            });
                        </script>
                    </div> 
  
            </div>
             
	</div>
<div class="row">
   <div class="col-md-12">       
     <div class="table-responsive">            
      <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
    				<thead>
						<tr>
              							<th>L_ID</th>
              							<th>E_ID</th>
              							<th>Assign_To</th>
              							<th>Student_Name</th>
              							<th>Course</th>
			                            <th>R1</th>
			                            <th>R2</th>
			                            <th>R3</th>
			                            <th>R4</th>
                                  <th>Final Status</th>
			                          
						</tr>
					</thead>
					<tbody id="myTable">
						<?php 
                               include 'database/config.php';
                               $qry9="select ifnull(tld.L_ID,'')L_ID,
                                             tld.E_ID,
                                             tld.U_ID,
                                             tlm.Student_Name,
                                             tlm.Course,
                                             tld.R1,
                                             tld.R2,
                                             tld.R3,
                                             tld.R4,
                                             tld.status from tbl_lead_distribution tld inner join tbl_lead_management tlm on tld.E_ID=tlm.E_ID";
                               $Assign=mysqli_query($connect,$qry9);

                               if ($Assign->num_rows > 0) 
                               {
                                    while($allAssign = $Assign->fetch_assoc())
                                     {
                                       $userName_assign=$allAssign['U_ID'];
                                       ?>
                                         <tr>
                        												
                        						<td><?php echo $allAssign['L_ID']; ?></td> <td><?php echo $allAssign['E_ID']; ?></td>
                                               <?php
                                                 $qry16="select Name from tbl_userinfo where U_ID='$userName_assign'";
                                                 $Assigned_by_name1=mysqli_query($connect,$qry16);
                                                 if($userName=mysqli_fetch_assoc($Assigned_by_name1))
                                                    {
                                                       ?>  
                        					    <td><?php echo $userName['Name'];?></td>
                                                        <?php
                                                     }
                                                  ?>       
                                                <td><?php echo $allAssign['Student_Name']; ?></td>
                        						<td><?php echo $allAssign['Course']; ?></td>
                        						<td><?php echo $allAssign['R1']; ?></td>
                        						<td><?php echo $allAssign['R2']; ?></td>
                        						<td><?php echo $allAssign['R3']; ?></td>
                        						<td><?php echo $allAssign['R4']; ?></td>
                                    <td><?php echo $allAssign['status']; ?></td>
                        					</tr>   
                                       <?php
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
<?php 
}
include "footer.php"; ?>
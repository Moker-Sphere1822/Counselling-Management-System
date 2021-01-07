<?php include "header.php"; ?>
<div class="col-lg-10 col-md-9 col-sm-8 col-xs-12">
  <div class="table-responsive backgrounddesign" style="border:1px solid #ccc;">
  	<?php
 if($role=='admin')
 {?> 	
  	<section id="counter" class="sec-padding backgrounddesign">
                                	<h4>GN Online Team</h4>
    </section>
  <?php
  }
 ?> 
				<table class="table table-striped table-bordered">
				  <thead style="background-color: #337ab7;">
				    <tr style="color: white;">
				      <th>Name</th>
				      <th>Alloted Leads</th>
				      <th>Positive</td>
				      <th>Closed</th>
				      <th>Converted</th>
				      <th>Open</th>
				      <th>Visit</th>
				     
				    </tr>
				  </thead>
				  <tbody>
				  <?php 
				    include "database/config.php";
				    if($role=='admin')
				    {	
				     $qry30="SELECT U_ID,
								   COUNT(*) 'distributed_leads',
							       COUNT(IF(visit='yes',1, NULL)) 'visit',
							       COUNT(IF(status='Positive',1, NULL)) 'Positive',
							       COUNT(IF(status='Converted',1, NULL)) 'Converted',
							       COUNT(IF(status='Closed',1, NULL)) 'Closed',
							       COUNT(IF(status='Open',1, NULL)) 'Open'
							FROM tbl_lead_distribution where U_ID IN(select U_ID from tbl_userinfo where Team_info='GN online Team') group by U_ID;";
					}
					elseif($role=='Subadmin-r')
					{
					  $qry30="SELECT U_ID,
								   COUNT(*) 'distributed_leads',
							       COUNT(IF(visit='yes',1, NULL)) 'visit',
							       COUNT(IF(status='Positive',1, NULL)) 'Positive',
							       COUNT(IF(status='Converted',1, NULL)) 'Converted',
							       COUNT(IF(status='Closed',1, NULL)) 'Closed',
							       COUNT(IF(status='Open',1, NULL)) 'Open'
							FROM tbl_lead_distribution where U_ID IN(select U_ID from tbl_userinfo where Team_info='RB online Team') group by U_ID;";	
					}		
					$row=mysqli_query($connect,$qry30);
					 if ($row->num_rows > 0) 
			                {
			                while($data = $row->fetch_assoc())
			                   { 
			                     $userName_assign=$data['U_ID'];	
			                   	 ?>
								    <tr>
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
									      <td><?php echo $data['distributed_leads']; ?></td>
									      <td><?php echo $data['Positive']; ?></td>
									      <td><?php echo $data['Closed']; ?></td>
									      <td><?php echo $data['Converted']; ?></td>
									      <td><?php echo $data['Open']; ?></td>
									      <td><?php echo $data['visit']; ?></td>
									    
								    </tr>
								 <?php
								}
							}
						?>		    
				  </tbody>
				   <?php
			         if($role=='Subadmin-r')
			            {
				               
						        $qry22="
									SELECT COUNT(*) 'distributed_leads',
									       COUNT(IF(visit='yes',1, NULL)) 'visit',
									       COUNT(IF(status='Positive',1, NULL)) 'Positive',
									       COUNT(IF(status='Converted',1, NULL)) 'Converted',
									       COUNT(IF(status='Closed',1, NULL)) 'Closed',
									       COUNT(IF(status='Open',1, NULL)) 'Open'			
									FROM tbl_lead_distribution where U_ID IN(select U_ID from tbl_userinfo where Team_info='RB online Team')";	
								
								
						$lead_info=mysqli_query($connect,$qry22);
						if($lead_info_all=mysqli_fetch_assoc($lead_info))
	                      {	
	                         $distributed_leads=$lead_info_all['distributed_leads'];
	                         $visit=$lead_info_all['visit'];
	                         $Positive=$lead_info_all['Positive'];
	                         $Converted=$lead_info_all['Converted']; 
	                         $Closed=$lead_info_all['Closed'];
	                         $Open=$lead_info_all['Open'];

	                        
	                      }	
	                      
                    ?>
				  <tr style="background-color:#FFEFD5;color:black; ">
				  	<th>Total</th>
				  	<th><?php echo $distributed_leads; ?></th>
				  	<th><?php echo $Positive; ?></th>
				  	<th><?php echo $Closed; ?></th>
				  	<th><?php echo $Converted; ?></th>
				  	<th><?php echo $Open; ?></th>
				  	<th><?php echo $visit; ?></th>
				  </tr>
				<?php } ?>
				</table>

<?php
 if($role=='admin')
 {?> 	
  	<section id="counter" class="sec-padding backgrounddesign">
                                	<h4>RB Online Team</h4>
    </section>
   

				<table class="table table-striped table-bordered">
				  <thead style="background-color: #337ab7;">
				    <tr style="color: white;">
				      <th>Name</th>
				      <th>Alloted Leads</th>
				      <th>Positive</td>
				      <th>Closed</th>
				      <th>Converted</th>
				      <th>Open</th>
				      <th>Visit</th>
				     
				    </tr>
				  </thead>
				  <tbody>
				  <?php 
				    if($role=='admin')
				    {	
				     $qry30="SELECT U_ID,
								   COUNT(*) 'distributed_leads',
							       COUNT(IF(visit='yes',1, NULL)) 'visit',
							       COUNT(IF(status='Positive',1, NULL)) 'Positive',
							       COUNT(IF(status='Converted',1, NULL)) 'Converted',
							       COUNT(IF(status='Closed',1, NULL)) 'Closed',
							       COUNT(IF(status='Open',1, NULL)) 'Open'
							FROM tbl_lead_distribution where U_ID IN(select U_ID from tbl_userinfo where Team_info='RB online Team') group by U_ID;";
					}		
					$row=mysqli_query($connect,$qry30);
					 if ($row->num_rows > 0) 
			                {
			                while($data = $row->fetch_assoc())
			                   { 
			                     $userName_assign=$data['U_ID'];	
			                   	 ?>
								    <tr>
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
									      <td><?php echo $data['distributed_leads']; ?></td>
									      <td><?php echo $data['Positive']; ?></td>
									      <td><?php echo $data['Closed']; ?></td>
									      <td><?php echo $data['Converted']; ?></td>
									      <td><?php echo $data['Open']; ?></td>
									      <td><?php echo $data['visit']; ?></td>
									    
								    </tr>
								 <?php
								}
							}
						?>		    
				  </tbody>
				   <?php
			         if($role=='admin')
			            {
				               $qry22="
									SELECT COUNT(*) 'distributed_leads',
									       COUNT(IF(visit='yes',1, NULL)) 'visit',
									       COUNT(IF(status='Positive',1, NULL)) 'Positive',
									       COUNT(IF(status='Converted',1, NULL)) 'Converted',
									       COUNT(IF(status='Closed',1, NULL)) 'Closed',
									       COUNT(IF(status='Open',1, NULL)) 'Open'			
									FROM tbl_lead_distribution ";
						}			
								
						$lead_info=mysqli_query($connect,$qry22);
						if($lead_info_all=mysqli_fetch_assoc($lead_info))
	                      {	
	                         $distributed_leads=$lead_info_all['distributed_leads'];
	                         $visit=$lead_info_all['visit'];
	                         $Positive=$lead_info_all['Positive'];
	                         $Converted=$lead_info_all['Converted']; 
	                         $Closed=$lead_info_all['Closed'];
	                         $Open=$lead_info_all['Open'];

	                        
	                      }	
	                      
                    ?>
                    <tr><td></td></tr>
				  <tr style="background-color:#FFEFD5;color:black; ">
				  	<th>Total</th>
				  	<th><?php echo $distributed_leads; ?></th>
				  	<th><?php echo $Positive; ?></th>
				  	<th><?php echo $Closed; ?></th>
				  	<th><?php echo $Converted; ?></th>
				  	<th><?php echo $Open; ?></th>
				  	<th><?php echo $visit; ?></th>
				  </tr>
				</table>
<?php
  }
 ?>
</div>               				                       
</div>

<div class="col-md-1 col-sm-1 col-xs-12">   
</div>

<?php include "footer.php"; ?>
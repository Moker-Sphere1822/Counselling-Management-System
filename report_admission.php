<?php include "header.php"; 
if($role=='admin')
{
?>
<div class="col-lg-10 col-md-9 col-sm-8 col-xs-12">
    <div class="row">
            <div class="col-md-12 col-md-offset-0  backgrounddesign">
            	<a href="Register_admission_detail.php"><button class="btn btn-primary">Register Admission Detail</button></a>
            	<hr>
                      <div class="card mb-4">
                <div class="card-body">
                    <!-- Grid row -->
                    <div class="row">
                        <!-- Grid column -->
                        <div class="col-md-12">
                           <!-- <h2 class="pt-3 pb-4 text-center font-bold font-up deep-purple-text">Search within table</h2>-->
                            <div class="input-group md-form form-sm form-2 pl-0">
                                <input class="form-control my-0 py-1 pl-3 purple-border" type="text" placeholder="Search something here..." aria-label="Search">
                                <span class="input-group-addon waves-effect purple lighten-2" id="basic-addon1"><a><i class="fa fa-search white-text" aria-hidden="true"></i></a></span>
                            </div>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                    <!--Table-->
                  <div class="table-responsive">  
                    <table class="table table-striped" style="margin-top: 5px;">
                        <!--Table head-->
                        <thead>
                            <tr style="background-color: lightgrey;">
                                <th>#</th>
                                <th>First Name</th>
                                <th>College</th>
                                <th>Course</th>
                                <th>Branch</th>
                                <th>Board</th>
                                <th>Converted By</th>
                                <th>View</th>
                            </tr>
                        </thead>
                        <!--Table head-->
                        <!--Table body-->
                        <tbody>
                         <?php
                          include "database/config.php";
                          $qry35="select *from tbl_student_details";
                          $student_info=mysqli_query($connect,$qry35);

                         if ($student_info->num_rows > 0) 
                            {
                              while($stu_info = $student_info->fetch_assoc())
                                {
                                   ?>

                                            <!--Name,
                                            inquiry_mode,
                                            Aadhar_number,
                                            mobile_number,
                                            inquiry_date,
                                            college,
                                            course,
                                            branch,
                                            Jee,
                                            board,
                                            visit_date,
                                            state,
                                            location,
                                            converted_by,
                                            registration_date,
                                            scholarship_form,
                                            hostel_status,
                                            fees_commitment,
                                            total_fees,
                                            deposit_amount,
                                            brokage_amount,
                                            Tc_migration,
                                            tc_migration_account,
                                            document_verification,
                                            first_installment,
                                            second_installment,
                                            admission_status_dte)";-->  
                            <tr>
                                <th scope="row"><?php echo $stu_info['S.no.']; ?></th>
                                <td><?php echo $stu_info['Name']; ?></td>
                                <td><?php echo $stu_info['college']; ?></td>
                                <td><?php echo $stu_info['course']; ?></td>
                                <td><?php echo $stu_info['branch']; ?></td>
                                <td><?php echo $stu_info['board']; ?></td>
                                <th><?php echo $stu_info['converted_by']; ?></th>
                                <td> <button class="btn btn-xs btn-info add_serial_no" id="<?php echo $stu_info['S.no.']; ?>" data-toggle="modal" data-target="#modalForm1">view</button></td>
                            </tr>
                            <?php
                        }
                    }
                 ?>   
                        </tbody>
                        <!--Table body-->
                    </table>
                    <!--Table-->
                  </div>  


        <!-- Modal for show students info -->
        <div class="modal fade" id="modalForm1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel"></h4>
                    </div>
                    
                    <!-- Modal Body -->
                    <div class="modal-body">
                        <p class="statusMsg1"></p>
                        <div class="table-responsive">   
                         
                      </div>
                    </div>
                    
                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!--End Model-->
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
<script type="text/javascript">
    $(document).on('click','.add_serial_no',function()
    {
        var id = $(this).attr('id');
        $('#records').html(id);
    
     $("#getusers").on('click', function(){

  
});})
</script>        





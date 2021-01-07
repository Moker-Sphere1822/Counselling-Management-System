<?php include "header.php"; 
if($role=='admin')
{
?>
<div class="col-lg-10 col-md-9 col-sm-8 col-xs-12">
    <div class="row">
            <div class="col-md-10 col-md-offset-1  backgrounddesign">
                <center><legend style="font-size: 30px;">Register</legend>  </center>
            	<a href="Admission_Report.php"><button class="btn btn-success">Admission Details</button></a>
                <hr>
                <form role="form" method="POST" action="database/register_admission_details.php" style="border-radius:0 !important;">

                    <fieldset>
                    <div class="form-group col-md-6">
                            <label for="first_name">Name</label>
                            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="mode_of_inquiry">Mode of Inquiry</label>
                            <input type="text" class="form-control" name="mode_of_inquiry" id="" placeholder="Mode of Inquiry">
                        </div>
                        
                         <div class="form-group col-md-6">
                            <label for="Aadhar_number">Registered Aadhar Number</label>
                            <input type="number" class="form-control" name="Aadhar_number" id="Aadhar_number" placeholder="Aadhar Number">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="mobile_number">Mobile Number</label>
                            <input type="number" class="form-control" name="mobile_number" id="mobile_number" placeholder="Mobile Number">
                        </div>
                         
                        <div class="form-group col-md-4">
                            <label for="state_name">State</label>
                            <input type="text" class="form-control" name="state_name" id="State" placeholder="State">
                       </div>

                       <div class="form-group col-md-4">
                            <label for="Location">Location</label>
                            <input type="text" class="form-control" name="Location" id="" placeholder="Location">
                        </div> 
                        
                        <div class="form-group col-md-4">
                            <label for="JEE">JEE Marks</label>
                            <input type="text" class="form-control" name="jee_marks"  placeholder="JEE">
                        </div>   
                         <div class="form-group col-md-4">
                            <label for="College">College</label>
                            <select class="form-control" name="college_name">
                            	<option>SISTec-GN</option>
                            	<option>SISTec-R</option>
                            	<option>SISTec-E</option>
                            </select>
                          </div>

                        <div class="form-group col-md-4">
                            <label for="Course">Course</label>
                             <select class="form-control" name="Course_name">
                            	<option>B-Tech</option>
                            	<option>M-Tech</option>
                            	<option>Pharmacy</option>
                            	<option>MBA</option>
                            </select>                             
                        </div>

                        <div class="form-group col-md-4">
                            <label for="Branch">Branch</label>
                              <select class="form-control" name="Branch_name">
                            	<option>Computer Science</option>
                            	<option>Civil Engineering</option>
                            	<option>Mechanical Engineering</option>
                            	<option>Electrical Engineering</option>
                            	<option>Pharmacy</option>
                            	<option>MBA</option>
                            	<option>M.Tech</option>
                            </select>
                        </div>
                        
                        <div class="form-group col-md-4">
                            <label for="Board">Board</label>
                            <input type="text" class="form-control" name="board_name"  placeholder="Board">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="Inquiry_date">Inquiry Date</label>
                            <input type="date" class="form-control" name="Inquiry_date"  >
                        </div>

                        <div class="form-group col-md-4">
                            <label for="Visit_date">Visit Date</label>
                            <input type="date" class="form-control" name="Visit_date" >
                        </div>
                    
                        
                        <div class="form-group col-md-4">
                            <label for="Team_name">Team Name</label>
                            <select name="Team_name" class="form-control">
                                <option>SISTec Online Team-GN</option>
                                <option>SISTec Online Team-RB</option>
                            </select>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="Inquiry_date">Converted By</label>
                            <input type="text" class="form-control" name="Converted_by"  placeholder="Converted By" >
                        </div>

                        <div class="form-group col-md-4">
                            <label for="Registration_date">Registration Date</label>
                            <input type="date" class="form-control" name="Registration_date" >
                        </div>


                        <div class="form-group col-md-4">
                            <label for="Scholarship_form">Scholarship Form</label>
                            <select class="form-control" name="Scholarship_form">
                            	<option>Yes</option>
                            	<option>NO</option>
                            </select>
                        </div>
                       
                        <div class="form-group col-md-4">
                            <label for="Hostel_status">Hostel Status</label>
                            <select class="form-control" name="Hostel_status">
                            	 <option>Yes</option>
                                 <option>No</option>
                            </select>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="Fees_commitment">Fees Commitment</label>
                            <input type="text" class="form-control" name="Fees_commitment" placeholder="Fees Commitment">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="Total Fees">Total Fees</label>
                            <input type="number" class="form-control" name="total_fees"  placeholder="Total Fees">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="Deposit_amount">Deposit Amount</label>
                            <input type="number" class="form-control" name="Deposit_amount"  placeholder="Deposit Amount" >
                        </div>

                        <div class="form-group col-md-4">
                            <label for="Brokrage Amount">Brokrage Amount</label>
                            <input type="number" class="form-control" name="Brokrage_amount" placeholder="Brokrage Amount">
                        </div>

                         <div class="form-group col-md-4">
                            <label for="Tc/Migration">TC/Migration</label>
                            <select class="form-control" name="tc_migration">
                            	<option>Yes</option>
                            	<option>NO</option>
                            </select>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="TC/Migration">TC/Migration submitted to accounts</label>
                            <select class="form-control" name="tc_migration_account">
                            	<option>Yes</option>
                            	<option>NO</option>
                            </select>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="Document Verification Form">Document Verification Form</label>
                            <input type="text" class="form-control" name="Document_verification">
                        </div>
                        
                         <div class="form-group col-md-4">
                            <label for="First Installation">First Installment</label>
                            <input type="number" class="form-control" name="First_installment" >
                        </div>

                        <div class="form-group col-md-4">
                            <label for="Second_installment">Second Installment</label>
                            <input type="number" class="form-control" name="Second_installment" >
                        </div>

                        <div class="form-group col-md-4">
                            <label for="Admission_Status">Admission Status from DTE</label>
                            <select class="form-control" name="Admission_Status">
                            	<option>Yes</option>
                            	<option>NO</option>
                            </select>
                        </div>
                
	                    <div class="form-group">
	                        <div class="col-md-12">
	                            <button type="submit" name="Register_all_data" class="btn btn-primary">
	                                Register
	                            </button>
	                        </div>
	                    </div>
                 </form>
            </div>
       </div>		                       
</div>

<div class="col-md-1 col-sm-1 col-xs-12">   
</div>

<?php
}
 include "footer.php"; ?>
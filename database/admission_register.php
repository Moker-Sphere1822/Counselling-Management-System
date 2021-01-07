<?php
include "config.php";

if (isset($_POST['Register_all_data']))
{
  $first_name=$_POST['first_name'];	
  $mode_of_inquiry=$_POST['mode_of_inquiry'];
  $Aadhar_number=$_POST['Aadhar_number'];
  $mobile_number=$_POST['mobile_number'];
  $state_name=$_POST['state_name'];
  $Location=$_POST['Location'];
  $Team_name=$_POST['Team_name'];
  $college_name=$_POST['college_name'];
  $Course_name=$_POST['Course_name'];
  $Branch_name=$_POST['Branch_name'];
  $board_name=$_POST['board_name'];
  $Inquiry_date=$_POST['Inquiry_date'];
  $Visit_date=$_POST['Visit_date'];
  $jee_marks=$_POST['jee_marks'];
  $Converted_by=$_POST['Converted_by'];
  $Registration_date=$_POST['Registration_date'];
  $Scholarship_form=$_POST['Scholarship_form'];
  $Hostel_status=$_POST['Hostel_status'];
  $Fees_commitment=$_POST['Fees_commitment'];
  $total_fees=$_POST['total_fees'];
  $Deposit_amount=$_POST['Deposit_amount'];
  $Brokrage_amount=$_POST['Brokrage_amount'];
  $tc_migration=$_POST['tc_migration'];
  $tc_migration_account=$_POST['tc_migration_account'];
  $Document_verificatio=$_POST['Document_verification'];
  $First_installment=$_POST['First_installment'];
  $Second_installment=$_POST['Second_installment'];
  $Admission_Status=$_POST['Admission_Status'];

echo $qry31="insert into tbl_student_details(
                                            Name,
                                            inquiry_mode,
                                            Aadhar_number,
                                            mobile_number,
                                            inquiry_date,
                                            college,course,
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
                                            admission_status_dte,
                                            Team_name) 
                                            values('$first_name','$mode_of_inquiry','".$Aadhar_number."','".$mobile_number."','".$Inquiry_date."','$college_name','$Course_name','$Branch_name','".$jee_marks."','$board_name','".$Visit_date."','$state_name','$Location','$Converted_by','".$Registration_date."','$Scholarship_form','$Hostel_status','$Fees_commitment','".$total_fees."','".$Deposit_amount."','".$Brokrage_amount."','$tc_migration','$tc_migration_account','$Document_verificatio','".$First_installment."','".$Second_installment."','$Admission_Status','$Team_name')";

           $account_information=mysqli_query($connect,$qry31);

         if ($account_information === TRUE) 
         {
           ?>
              <script type="text/javascript">
                  alert("New record created successfully");
                  window.open("../Admission_Report.php");
              </script>
           <?php
         }
        else 
         {
           ?>
              <script type="text/javascript">
                  alert("somthing Went wrong");
                  window.open("../Register_admission_detail.php");
              </script>
           <?php

         }
}  
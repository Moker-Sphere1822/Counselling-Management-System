<?php include "header.php";
 if($role=='admin')
 {
 ?>
<?php
include "database/config.php";
  $msg='';	
if(isset($_POST['Addinquiry']))
{
 
   $Name=$_POST['inputname'];
   $Course=$_POST['Course'];
   $Mobile=$_POST['inputmobileno'];
   $Email=$_POST['inputemail'];
   $Branch=$_POST['Branch'];
   $City=$_POST['city'];
   $State=$_POST['inputstate'];
   $Date=$_POST['inputDate'];
   $Source=$_POST['inputesorce'];

   $query28="INSERT INTO `tbl_lead_management`(`E_ID`, `Student_Name`, `Course`, `Mobile_no`, `Email_id`, `Branch`, `City`, `State`, `Date`, `Source`) VALUES (null,'$Name','$Course',$Mobile,'$Email','$Branch','$City','$State','$Date','$Source')";
   $row=mysqli_query($connect,$query28);
   if ($row === TRUE) 
   {
      $msg="New record created successfully.";
   } 
   else
   {
   	  $msg="something went wrong.";
   }
}
?>
<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 " style="margin-top: 10px;margin-left: 0px;">
<div class="row">
		    <h3 style="margin-left:100px;" class="text-primary"><i><strong>Add Manual Inquiry</strong></i></h3>
</div>
<hr>
<div class="bs-example">
    <form class="form-horizontal" method="post" action="uploadManualInquiry.php">
    	<span style="margin-left: 170px;color: green;"><?php echo $msg ?></span>
        <fieldset>
            <div class="form-group">
                <label for="inputname" class="control-label col-xs-2">Student Name</label>
                <div class="col-xs-10">
                    <input type="text" class="form-control" name="inputname" placeholder="Student Name">
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
                   	    <option>MBA</option>
                   	    <option>M.Tech</option>
                   </select>
                </div>
            </div>

            <div class="form-group">
                <label for="inputPassword" class="control-label col-xs-2">Mobile Number</label>
                <div class="col-xs-10">
                    <input type="Number" class="form-control" name="inputmobileno" placeholder="Mobile Number">
                </div>
            </div>

             <div class="form-group">
                <label for="inputemail" class="control-label col-xs-2">Email</label>
                <div class="col-xs-10">
                    <input type="email" class="form-control" name="inputemail" placeholder="Email">
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
            
              <div class="form-group">
                <label for="inputcity" class="control-label col-xs-2">City</label>
                <div class="col-xs-10">
			          <input type="text" class="form-control" name="city" placeholder="City">
			    </div>
            </div>

             <div class="form-group">
                <label for="inputstate" class="control-label col-xs-2">City</label>
                 <div class="col-xs-10">
			          <input type="text" class="form-control" name="inputstate" placeholder="State">
			      </div>
            </div>

	         <div class="form-group">
                <label for="inputdate" class="control-label col-xs-2">Date</label>
                <div class="col-xs-10">
                    <input type="date" class="form-control" name="inputDate">
                </div>
            </div>
            <div class="form-group">
                <label for="inputesorce" class="control-label col-xs-2">Source</label>
                <div class="col-xs-10">
                    <input type="text" class="form-control" name="inputesorce" placeholder="Source">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-offset-2 col-xs-10">
                    <button type="submit" name="Addinquiry" class="btn btn-primary">Add Inquiry</button>
                </div>
            </div>

            

        </fieldset>
    </form>
</div>				                       
</div>

<div class="col-md-2 col-sm-1 col-xs-12">   
</div>

<?php } include "footer.php"; ?>
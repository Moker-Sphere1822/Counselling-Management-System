<?php include "header.php"; ?>
<?php

include "database/config.php";
if (count($_POST) > 0) 
{
    $result = mysqli_query($connect, "SELECT *from tbl_userinfo WHERE U_ID='$username'");
    $row = mysqli_fetch_array($result);
    if ($_POST["current_pass"] == $row["Password"]) 
    {
        mysqli_query($connect, "UPDATE tbl_userinfo set Password='" . $_POST["newpass"] . "' WHERE U_ID='$username'");
        $message = "Password Changed";
    } else
        $message = "Current Password is not correct";
}
?>
<style type="text/css">
.pass_show{position: relative} 

.pass_show .ptxt 
{ 

position: absolute; 

top: 50%; 

right: 10px; 

z-index: 1; 

color: #f36c01; 

margin-top: -10px; 

cursor: pointer; 

transition: .3s ease all; 

} 

.pass_show .ptxt:hover{color: #333333;} 
</style>

<div class="col-lg-10 col-md-9 col-sm-8 col-xs-12">

	<div class="row backgrounddesign" style="margin-left: 0px;margin-right: 0px;">
		<div class="col-sm-8" style="margin-top: 20px;">
          <form name="frmChange" method="post" action="changepassword.php">  
            <div class="message"><?php if(isset($message)) { echo $message; } ?></div>
		    <label>Current Password</label>
		    <div class="form-group pass_show"> 
                <input type="password" name="current_pass" class="form-control" class="txtField"   placeholder="Current Password" required="required"> 
            </div> 
		       <label>New Password</label>
            <div class="form-group pass_show"> 
                <input type="password" name="newpass" id="txtPassword" class="form-control" class="txtField" placeholder="New Password" required="required"> 
               
            </div> 
		       <label>Confirm Password</label>
            <div class="form-group pass_show"> 
               <input type="password" name="confirmpass" id="txtConfirmPassword" class="form-control" class="txtField"  placeholder="Confirm Password" required="required"> 
               
            </div> 
             <div class="form-group"> 
                <button type="submit" name="submit" onclick="return Validate()" class="btn btn-success" value="Submit" class="btnSubmit">Change Password</button> 
            </div>             
          </form>  
		</div>  
	</div>
                       
</div>

<div class="col-md-1 col-sm-1 col-xs-12">   
</div>

<?php include "footer.php"; ?>
<script type="text/javascript">
      
$(document).ready(function(){
$('.pass_show').append('<span class="ptxt">Show</span>');  
});
  

$(document).on('click','.pass_show .ptxt', function(){ 

$(this).text($(this).text() == "Show" ? "Hide" : "Show"); 

$(this).prev().attr('type', function(index, attr){return attr == 'password' ? 'text' : 'password'; }); 

});  



 function Validate() {
        var password = document.getElementById("txtPassword").value;
        var confirmPassword = document.getElementById("txtConfirmPassword").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }

</script>


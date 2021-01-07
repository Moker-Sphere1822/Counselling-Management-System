<?php include "header.php"; if($role=="admin"){?>


<div class="col-lg-10 col-md-9 col-sm-8 col-xs-12">
  <section class="our-webcoderskull padding-lg backgrounddesign">
      <div class="row heading heading-icon">
          <h1 style="color:grey;margin-left: 10px;"><i>Our Team</i></h1>
          <hr>
      </div>

        <div class="btn-toolbar"  style="margin-bottom:10px;">
              <button class="btn btn-xm btn-primary"  data-toggle="modal" data-target="#modalForm"><i class="fa fa-plus"></i> Add New Member</button>
              <button class="btn btn-xm btn-danger" data-toggle="modal" data-target="#modalForm1">Delete</button>
        </div>
        <br>
         

        <!-- Modal for Delete Member -->
        <div class="modal fade" id="modalForm1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Delete Member</h4>
                    </div>
                    
                    <!-- Modal Body -->
                    <div class="modal-body">
                        <p class="statusMsg1"></p>
                        <div class="table-responsive">
                        <form role="form">
                         <table class="table table-boredered">
                          <tr>
                            <th>Email</th>
                            <th>Name</th>
                            <th>Role</th>
                            <th>Select</th>
                          </tr>
                                                 
                            <?php 
                               include 'database/config.php';
                               $qry4="SELECT * FROM `tbl_userinfo`";
                               $allusers=mysqli_query($connect,$qry4);

                               if ($allusers->num_rows > 0) 
                               {
                                    while($users = $allusers->fetch_assoc())
                                     {
                                       ?>
                                         <tr id="<?php echo $users["U_ID"];?>"> 
                                           <td><?php echo $users['Name']."<br>"; ?></td>
                                           <td><?php echo $users['U_ID']."<br>"; ?></td>
                                           <td><?php echo $users['Role']."<br>"; ?></td>
                                           <td><input type="checkbox" name="user_id[]" class="delete_user" value="<?php echo $users["U_ID"];?>"></td>
                                        </tr> 
                                       <?php
                                     }
                               }
                               else 
                               {
                                  echo "0 results";
                               }
                             ?>
                          
                         </table>
                            
                        </form>
                      </div>
                    </div>
                    
                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" name="btn_delete" id="btn_delete" class="btn btn-success submitBtn1">Delete</button>
                    </div>
                </div>
            </div>
        </div>

        <!--End Model-->



        <!-- Modal for Add Memeber -->
        <div class="modal fade" id="modalForm" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Add New Member</h4>
                    </div>
                    
                    <!-- Modal Body -->
                    <div class="modal-body">
                        <p class="statusMsg"></p>
                        <form role="form">

                            <div class="form-group">
                                <label for="inputEmail">Email</label>
                                <input type="text" class="form-control" id="inputEmail" placeholder="Enter your email"/>
                            </div>

                            <div class="form-group">
                                <label for="inputName">Name</label>
                                <input type="text" class="form-control" id="inputName" placeholder="Enter your name"/>
                            </div>

                            <div class="form-group">
                                <label for="inputdpt">Department</label>
                                <input type="text" class="form-control" id="inputdpt" placeholder="Enter Department"/>
                            </div>

                             <div class="form-group">
                                <label for="inputrole">Role</label>
                                <select class="form-control" id="inputrole">
                                   <option disabled selected>--Role--</option>
                                   <option>Subadmin-gn</option>
                                   <option>Subadmin-r</option>
                                   <option>Teamuser</option>
                                </select>
                             </div>

                             <div class="form-group">
                                <label for="inputstatus">Status</label>
                                <select class="form-control" id="inputstatus">
                                   <option disabled selected>--Status--</option>
                                   <option value="1">Active</option>
                                   <option value="2">Unactive</option>
                                </select>
                             </div>
                             
                             <div class="form-group">
                               <label for="inputpswd">Password</label>
                               <input type="password" class="form-control" id="inputpswd" placeholder="Enter password">
                             </div>

                             <div class="form-group">
                               <label for="inputcampus">Campus</label>
                               <select class="form-control" id="inputcampus">
                                 <option disabled selected>-Campus-</option>
                                 <option>SISTec-GN</option>
                                 <option>SISTec-R</option>
                               </select>
                             </div>

                             <div class="form-group">
                               <label for="inputteaminfo">Team Information</label>
                               <select class="form-control" id="inputteaminfo">
                                 <option disabled selected>-Team Info-</option>
                                 <option>GN online Team</option>
                                 <option>RB online Team</option>
                               </select>
                             </div>
                            
                        </form>
                    </div>
                    
                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary submitBtn"  id="addmember" >SUBMIT</button>
                    </div>
                </div>
            </div>
        </div>

        <!--End Model-->

    <?php 
    $query="SELECT U_ID, profile_image,Name,Department,Role,Status FROM tbl_userinfo";
    $row = mysqli_query($connect,$query);
  	if(mysqli_num_rows($row)>0)
      {		
          $value2=array();
      		$i=0;
      		while ($value3=mysqli_fetch_assoc($row))
           {
      			if ($value3['profile_image']=='')
            {
      				$value2[$i]['profile_image']='default.png';
      			}
            else
            {
      				$value2[$i]['profile_image']=$value3['profile_image'];
      			}
            $value2[$i]['Name']=$value3['Name'];
            $value2[$i]['U_ID']=$value3['U_ID'];
            $value2[$i]['Role']=$value3['Role'];
            $value2[$i]['status']=$value3['Status'];
      			$value2[$i]['Department']=$value3['Department'];

      			$i++;
      		}
      		$value2 = json_decode(json_encode($value2),true);
      		$u=1;
      		$count=0;
      		foreach ($value2 as $key) 
          {

      			if ($u==1)
            {
      				$u=0;
      				echo '<ul class="row">';
      			}
            
      			$count++;
            $status=' Not Active';
            if($key['status']==1)
            {
              $status='Active';
            }

      			echo '<li class="col-12 col-md-6 col-lg-3">
					          <div class="cnt-block equal-hight" style="height: 349px;">
					            <figure><img src="profile_images/'.$key['profile_image'].'" class="img-responsive" alt=""></figure>
					            <h3><a href="#">'.$key['Name'].'</a></h3>
                      <p>Role - '.$key['Role'].'</p>
                      <button class="btn btn-xs removeItem" data-id="'.$key['U_ID'].'" data-status="'.$key['status'].'">'.$status.'</button>
					          </div>
					      </li>
					 ';
					 if (($count/4)==0) {
					 	$u=1;
					 echo "</ul>";
					 }
      		}
      			if (($count/4)!=0) {
					 echo "</ul>";
					 }

      }

    ?>
</section>                       
</div>

<div class=" col-md-1 col-sm-1 col-xs-12">   
</div>

<?php 
}
include "footer.php"; ?>
<script type="text/javascript">
    
$('.removeItem').click(function(event) 
{     
    var id=''; 
    var status=''; 
    if (confirm('Are you sure you want to Change Status?')) 
    {
        id= $(this).attr('data-id');     
        status= $(this).attr('data-status');     
        $.ajax({
            type: "POST",
            url: './database/active_unactive.php',
            data: 'status='+status+'&active1='+id,
            success: function (msg) 
            {
               if(msg=='ok')
               {
                   setTimeout(function(){ location.reload(); }, 100); 
               }
            }
        });
    }
}); 

   $(document).on('click','#addmember',function(){
    //var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    var email = $('#inputEmail').val();
    var name = $('#inputName').val();
    var dept= $('#inputdpt').val();
    var role= $('#inputrole').val();
    var status= $('#inputstatus').val();
    var pswd = $('#inputpswd').val();
    var campus= $('#inputcampus').val();
    var teaminfo= $('#inputteaminfo').val();

    if(email.trim() == '' )
    {
        alert('Please enter your email.');
        $('#inputEmail').focus();
        return false;
    }
    else if(name.trim() == '' )
    {
        alert('Please enter your Name.');
        $('#inputdpt').focus();
        return false;
    }
    else if(dept.trim() == '' )
    {
        alert('Please enter your Department.');
        $('#inputdpt').focus();
        return false;
    }
    else if(role.trim() == '' )
    {
        alert('Please enter Role.');
        $('#inputrole').focus();
        return false;
    }
    else if(status.trim() == '' )
    {
        alert('Please enter status.');
        $('#inputstatus').focus();
        return false;
    }
    else if(pswd.trim() == '' )
    {
        alert('Please enter Password.');
        $('#inputpswd').focus();
        return false;
    }
    else if(campus.trim() == '' )
    {
        alert('Please select Your campus.');
        $('#inputcampus').focus();
        return false;
    }
    else
    {
        $.ajax({
            type:'POST',
            url:'./database/addmember.php',
            data:'addnewuser='+1+'&name='+name+'&email='+email+'&dept='+dept+'&role='+role+'&status='+status+'&pswd='+pswd+'&campus='+campus+'&teaminfo='+teaminfo,
            beforeSend: function () 
            {
                $('.submitBtn').attr("disabled","disabled");
                $('.modal-body').css('opacity', '.5');
            },
            success:function(msg)
            {
                if(msg == 'ok')
                {
                    $('#inputName').val('');
                    $('#inputEmail').val('');
                    $('#inputdpt').val('');
                    $('#inputrole').val('');
                    $('#inputstatus').val('');
                    $('#inputpswd').val('');
                    $('#inputcampus').val('');
                    $('#inputteaminfo').val('');
                    $('.statusMsg').html('<span style="color:green;">Your New Member Is Created.</span>');
                    setTimeout(function(){ location.reload(); }, 100); 
                }
                else
                {
                    $('.statusMsg').html('<span style="color:red;">Already Have an account !Please change Email.</span>');
                }
                $('.submitBtn').removeAttr("disabled");
                $('.modal-body').css('opacity', '');
            }
        });
    }
});

 
 
 $(document).ready(function()
 {
 
  $('#btn_delete').click(function()
  {
  
  if(confirm("Are you sure you want to delete this?"))
  {
    var id = [];  
    $(':checkbox:checked').each(function(i)
    {
      id[i] = $(this).val();
    });
   
   if(id.length === 0)
   {
     alert("Please Select atleast one checkbox");
   }
   else
   {
    $.ajax({
     url:'./database/deletemember.php',
     method:'POST',
     data:{id:id},
     beforeSend: function () 
            {

                $('.submitBtn1').attr("disabled","disabled");
                $('.modal-body').css('opacity', '.5');
            },
     success:function(msg)
     {
      if(msg=='ok')
       {  
          setTimeout(function(){ location.reload(); }, 100);           
          $('.statusMsg1').html('<span style="color:green;">Team Memeber is deleted.</span>');       
          
       }   
       else
       {  
                     
          $('.statusMsg1').html('<span style="color:red;">Something Went Wrong.</span>');       
          
       }   

       $('.submitBtn1').removeAttr("disabled");
       $('.modal-body').css('opacity', '');

     }
     
    });
   }
   
  }
  else
  {
   return false;
  }
 });
 
});   
</script>


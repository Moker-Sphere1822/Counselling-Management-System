<?php include "header.php"; if($role=='admin'){ ?>
<?php
   $output = '';

	if(isset($_POST["import"]))
		{

			  $fileName=$_FILES["excel"]["name"];
			  $extension = explode(".",$fileName); 
			  $count = count($extension);

			  $allowed_extension = array("xls", "xlsx", "csv"); 
			  if (count($extension)) 
			   {
			     if(in_array($extension[$count-1], $allowed_extension))
			       {
			            $file = $_FILES["excel"]["tmp_name"]; 
			          
			            include("php/PHPExcel/IOFactory.php"); 
			            $objPHPExcel = PHPExcel_IOFactory::load($file); 
                        $output .= "<div class='table-responsive'>"; 
						$output .= "<label class='text-success'>Data Inserted Successfully..</label><br /><table class='table table-bordered table-Striped w-auto'>";
						$output .= "<tr>";
							   $output .= "<th>Name</th>";
							   $output .= "<th>Course</th>";
							   $output .= "<th>Branch</th>";
							   $output .= "<th>Mobile</th>";
							   $output .= "<th>State</th>";
							   $output .= "<th>City</th>";
							   $output .= "<th>Date</th>";
							   $output .= "<th>Source</th>";
							   $output .= "<th>Email Id</th>";
						$output .= "</tr>";
					  foreach ($objPHPExcel->getWorksheetIterator() as $worksheet)
					  {
					      $highestRow = $worksheet->getHighestRow();
						   for($row=2; $row<=$highestRow; $row++)
						   {
							    $output .= "<tr>";

								    $Name = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(0, $row)->getValue());
								    $Course = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
								    $Branch = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(2, $row)->getValue());
								    $Mobile = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(3, $row)->getValue());
								    $State = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(4, $row)->getValue());
								    $City = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(5, $row)->getValue());
								    $Date = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(6, $row)->getValue());
								    $Source = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(7, $row)->getValue());
								    $Email = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(8, $row)->getValue());
								    //$query = "INSERT INTO tbl_excel(excel_name, excel_email) VALUES ('".$name."', '".$email."')";
                                   
                                      
                                    


								    $query="INSERT INTO `tbl_lead_management`(`E_ID`, `Student_Name`, `Course`, `Mobile_no`, `Email_id`, `Branch`, `City`, `State`, `Date`, `Source`) VALUES (null,'".$Name."','".$Course."',$Mobile,'".$Email."','".$Branch."','".$City."','".$State."','".$Date."','".$Source."')";
                                      
								    
                                    
                                    mysqli_query($connect,$query);
                                    
                                   							                
							       

								    $output .= '<td>'.$Name.'</td>';
								    $output .= '<td>'.$Course.'</td>';
								    $output .= '<td>'.$Branch.'</td>';
								    $output .= '<td>'.$Mobile.'</td>';
								    $output .= '<td>'.$State.'</td>';
								    $output .= '<td>'.$City.'</td>';
								    $output .= '<td>'.$Date.'</td>';
								    $output .= '<td>'.$Source.'</td>';
								    $output .= '<td>'.$Email.'</td>';
								$output .= '</tr>';
						   }
			         } 
			         $output .= '</table>';
			         $output .= "</div>";
                   }
			      else
			      {
			        $output = '<label class="text-danger">Invalid File</label>';
			      }
			  }
		}	  
?>

<div class="col-lg-10 col-md-9 col-sm-8 col-xs-12">
	<div class="backgrounddesign">
        <h3 align="center">Upload Enqueries</h3><br />
        <form method="post" enctype="multipart/form-data" align="center">

            <label class="form-control">Select Excel File<input type="file" name="excel"  style="display: none;" /></label>
            <br />
            <input type="submit" name="import" class="btn btn-info" value="Import" />
        </form>
	   <br />
	   <br />
	   <?php
	      echo $output;
	   ?>
   </div>
</div>

<div class="col-md-1 col-sm-1 col-xs-12">
</div>
<?php } include "footer.php"; ?>
<?php
$connect = mysqli_connect("localhost", "root", "", "excel");
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

					$output .= "<label class='text-success'>Data Inserted</label><br /><table class='table table-bordered'>";
					  foreach ($objPHPExcel->getWorksheetIterator() as $worksheet)
					  {
					      $highestRow = $worksheet->getHighestRow();
						   for($row=2; $row<=$highestRow; $row++)
						   {
							    $output .= "<tr>";
							    $name = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(0, $row)->getValue());
							    $email = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
							    $query = "INSERT INTO tbl_excel(excel_name, excel_email) VALUES ('".$name."', '".$email."')";
							    mysqli_query($connect, $query);
							    $output .= '<td>'.$name.'</td>';
							    $output .= '<td>'.$email.'</td>';
							    $output .= '</tr>';
						   }
			         } 
			         $output .= '</table>';
                   }
			      else
			      {
			        $output = '<label class="text-danger">Invalid File</label>';
			      }
			  }
		}	  
?>

<html>
 <head>
  <title>Import Excel to Mysql using PHPExcel in PHP</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
  <style>
  body
  {
   margin:0;
   padding:0;
   background-color:#f1f1f1;
  }
  .box
  {
   width:700px;
   border:1px solid #ccc;
   background-color:#fff;
   border-radius:5px;
   margin-top:100px;
  }
  
  </style>
 </head>
 <body>
  <div class="container box">
   <h3 align="center">Import Excel to Mysql using PHPExcel in PHP</h3><br />
   <form method="post" enctype="multipart/form-data">
    <label>Select Excel File</label>
    <input type="file" name="excel" />
    <br />
    <input type="submit" name="import" class="btn btn-info" value="Import" />
   </form>
   <br />
   <br />
   <?php
      echo $output;
   ?>
  </div>
 </body>
</html>
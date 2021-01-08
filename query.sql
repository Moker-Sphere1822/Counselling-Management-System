  --                                    creating table 1

DROP TABLE IF EXISTS `cms_student_distribution`;
CREATE TABLE `cms_student_distribution` (
  `L_ID` int(10) NOT NULL AUTO_INCREMENT,
  `E_ID` int(10) NOT NULL,
  `U_ID` varchar(50) NOT NULL,
  `Response1` varchar(50) DEFAULT NULL,
  `Response2` varchar(50) DEFAULT NULL,
  `Response3` varchar(50) DEFAULT NULL,
  `Response4` varchar(50) DEFAULT NULL,
  `10th` varchar(5) DEFAULT NULL,
  `12th` varchar(5) DEFAULT NULL,
  `board` varchar(50) DEFAULT NULL,
  `visit` varchar(50) DEFAULT 'No',
  `Lead_allotment_Date` datetime NOT NULL,
  `visit_date` date DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `Transfer_by` varchar(50) DEFAULT NULL,
  `Reason_of_transfer` varchar(100) DEFAULT NULL,
  `flag` int(2) DEFAULT '0',
  `whatsapp_no` bigint(20) DEFAULT NULL,
  `pcontact` varchar(11) NOT NULL,
  `photo` varchar(50) ,
  PRIMARY KEY (`L_ID`),
  KEY `E_ID` (`E_ID`),
  KEY `U_ID` (`U_ID`),
  KEY `E_ID_2` (`E_ID`),
  KEY `E_ID_3` (`E_ID`)
  );
 
--                                      creating table 2

DROP TABLE IF EXISTS `cms_student_management`;
CREATE TABLE `cms_student_management` (
  `E_ID` int(5) NOT NULL AUTO_INCREMENT,
  `Student_Name` varchar(50) DEFAULT NULL,
  `Course` varchar(50) NOT NULL,
  `Mobile_no` bigint(11) DEFAULT NULL,
  `pcontact` varchar(11) NOT NULL,
  `photo` varchar(50) ,
  `Email_id` varchar(50) NOT NULL,
  `Branch` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `State` varchar(50) NOT NULL,
  `Date` varchar(20) DEFAULT NULL,
  `Source` varchar(50) DEFAULT NULL,
  `flag` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`E_ID`)
);

--                                     creating table 3

DROP TABLE IF EXISTS `cms_student_details`;
CREATE TABLE `cms_student_details` (
  `S.no.` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) DEFAULT NULL,
  `inquiry_mode` varchar(50) DEFAULT NULL,
  `Aadhar_number` bigint(20) DEFAULT NULL,
  `mobile_number` bigint(20) DEFAULT NULL,
  `pcontact` varchar(11) NOT NULL,
  `photo` varchar(50) ,
  `inquiry_date` date DEFAULT NULL,
  `college` varchar(50) DEFAULT NULL,
  `course` varchar(50) DEFAULT NULL,
  `branch` varchar(50) DEFAULT NULL,
  `Jee` int(10) DEFAULT NULL,
  `board` varchar(50) DEFAULT NULL,
  `visit_date` date DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `converted_by` varchar(50) DEFAULT NULL,
  `registration_date` date DEFAULT NULL,
  `scholarship_form` varchar(50) DEFAULT NULL,
  `hostel_status` varchar(50) DEFAULT NULL,
  `fees_commitment` varchar(50) DEFAULT NULL,
  `total_fees` int(10) DEFAULT NULL,
  `deposit_amount` int(10) DEFAULT NULL,
  `brokage_amount` int(10) DEFAULT NULL,
  `Tc_migration` varchar(10) DEFAULT NULL,
  `tc_migration_account` varchar(10) DEFAULT NULL,
  `document_verification` varchar(10) DEFAULT NULL,
  `first_installment` int(10) DEFAULT NULL,
  `second_installment` int(10) DEFAULT NULL,
  `admission_status_dte` varchar(10) DEFAULT NULL,
  `Team_name` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`S.no.`)
);
                                        -- table 4

DROP TABLE IF EXISTS `cms_userinfo`;
CREATE TABLE `cms_userinfo` (
  `username` varchar(30) NOT NULL DEFAULT '',
  `Name` varchar(50) DEFAULT NULL,
  `Department` varchar(50) DEFAULT NULL,
  `Role` varchar(50) DEFAULT NULL,
  `Status` tinyint(1) DEFAULT NULL,
  `Password` varchar(20) NOT NULL,
  `Campus` varchar(50) NOT NULL,
  `Team_info` varchar(50) NOT NULL,
  `profile_image` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`username`),
  KEY `U_ID` (`username`),
  KEY `U_ID_2` (`username`)
);

INSERT INTO `cms_userinfo` (`U_ID`, `Name`, `Department`, `Role`, `Status`, `Password`, `Campus`, `Team_info`, `profile_image`) VALUES
('Rohan@sistec.ac.in',	'Rohan Rajput',	'Computer science',	'admin',	1,	'Rohan123',	'Sistec-gn',	'GN-onlineteam',	'rohan.jpg');
 

                                      --table 5

DROP TABLE IF EXISTS `cms_user_logininfo`;
CREATE TABLE `cms_user_logininfo` (
  `S.no` int(10) NOT NULL AUTO_INCREMENT,
  `U_ID` varchar(50) DEFAULT NULL,
  `login_date_time` datetime DEFAULT NULL,
  `logged_date_time` datetime DEFAULT NULL,
  PRIMARY KEY (`S.no`)
);

 $qry9="UPDATE `tbl_lead_distribution` SET `flag`=0 WHERE U_ID='$user'";
  $qry7="UPDATE `tbl_lead_management` SET `flag`=1 WHERE `E_ID`=$key";
  $qry8="INSERT INTO `tbl_lead_distribution`(`E_ID`, `U_ID`,`Lead_allotment_Date`,`flag`,`Transfer_by`) VALUES($key,'$user',sysdate(),1,'$userName')";
   $qry10="UPDATE `tbl_lead_distribution` SET `E_ID`=$key,`U_ID`='$user',`Lead_allotment_Date`=sysdate(),`flag`=1 WHERE `E_ID`=$key";
    $qry36="update tbl_lead_management set Course='$Course',Branch='$Branch' where E_ID=$en_id";
    	$query="UPDATE tbl_userinfo Set Status=$status Where U_ID='$id'";
      q1 $check="select *from tbl_userinfo where U_ID='$email'";
      $data="insert into tbl_userinfo(U_ID,Name,Department,Role,Status,Password,Campus,Team_info) values('$email','$name','$dept','$role',$status1,'$pswd','$campus','$teaminfo')";
       $qry31="insert into tbl_student_details(
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

$query = "DELETE FROM `cms_userinfo` WHERE U_ID='".$id."
         $qry36="update tbl_lead_management set Course='$Course',Branch='$Branch' where E_ID=$en_id";
         $qry20="update tbl_lead_distribution set R1='$remark1',R2='$remark2',R3='$remark3',R4='$remark4',10th='$percen1',12th='$percen2',board='$board1',visit='$status1',Tentative_visit_date='".$date."',status='$final_status',whatsapp_no='$WhatsApp' where E_ID=$en_id";

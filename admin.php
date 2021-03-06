<?php
	session_start();
 	if(!isset($_SESSION["admin"])){
 		header("location:index.php");
 	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Record Managment</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Farsan|Indie+Flower|Itim|Mina|Sacramento|Nunito" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color:aliceblue;">
	<header class="fixed-top">
		<nav class="navbar navbar-expand-lg navbar-light" style="background: linear-gradient(45deg, #1de099, #1dc8cd);">
  			<a class="navbar-brand" href="#" style="font-family: 'Itim', cursive; font-weight: bold; font-size: 18px;">Student Record Management System</a>
  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  			</button>
		  	<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
			    <ul class="nav justify-content-end" style="padding-right: 100px;font-family: 'Itim', cursive; font-size: 20px;">
			      	<li class="nav-item active">
			        	<a class="nav-link" href="#adminsettings" style="color: #fff;" data-toggle="modal">Settings<span class="sr-only">(current)</span></a>
			      	</li>
			      	<li class="nav-item">
			       		<a class="nav-link" href="logout.php" style="color: #fff;">Logout</a>
			      	</li>
			    </ul>
		  </div>
		</nav>		
	</header>
	<div class="admin_main_div">
		<div class="row" id="admindiv">
			<div class="col-xl-12 col-lg-12col-md-12 col-sm-12 col-12" id="firstdiv">
				<h3 style="padding-top: 40px; font-family: 'Indie Flower', cursive; font-weight:bolder;">Add Student</h3>
				<span class="sectiondivider"></span>
				<div class="row addstudent" data-toggle="collapse" data-target="#addstudentdiv" aria-expanded="true" aria-controls="addstudentdiv" role="button">
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
						<h1><i class="fas fa-graduation-cap"></i></h1>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
						<h5>Click here to add students in the database so that faculty can view the name of the student in order to mark the attendance in the lecture.</h5>
					</div>
				</div>
				<div id="addstudentdiv" class="collapse show" aria-labelledby="firstdiv" data-parent="#admindiv">
					<center>
					<div id="addstudenterror" class="form-group col-lg-6 col-xl-6 col-md-6 col-sm-12 col-12">	
			      	</div>
			      	<form id="addstudentform">
			      		<div class="form-group col-lg-6 col-xl-6 col-md-6 col-sm-12 col-12">
			      			<input class="form-control" type="text" name="studentname" id="studentname" placeholder="Student Name" required>
			      		</div>
			      		<div class="form-group col-lg-6 col-xl-6 col-md-6 col-sm-12 col-12">
			      			<select class="custom-select" name="studentyear" id="studentyear" required>
							  	<option value="default" selected>Select Year</option>
							  	<option value="First">First</option>
							  	<option value="Second">Second</option>
							  	<option value="Third">Third</option>
							  	<option value="Fourth">Fourth</option>
							</select>
			      		</div>
			      		<div class="form-group col-lg-6 col-xl-6 col-md-6 col-sm-12 col-12">
			      			<select class="custom-select" name="studentbranch" id="studentbranch" required>
							  	<option value="default" selected>Select Branch</option>
							  	<option value="CSE">CSE</option>
							  	<option value="ECE">ECE</option>
							  	<option value="EE">EE</option>
							  	<option value="ME">ME</option>
							  	<option value="Civil">Civil</option>
							</select>
			      		</div>
			      		<div class="form-group col-lg-6 col-xl-6 col-md-6 col-sm-12 col-12">
			      			<input class="form-control" type="number" name="studentrollno" id="studentrollno" placeholder="Student Roll Number" required>
			      		</div>
			      	</form>
			      	<button type="submit" title="Add Student" id="addstudentbutton" name="addstudentbutton">Add Student</button>
			      	</center>
			      	<br>
			    </div>
			</div>
			<div class="col-xl-12 col-lg-12col-md-12 col-sm-12 col-12" id="seconddiv">
				<h3 style="padding-top: 40px; font-family: 'Indie Flower', cursive; font-weight:bolder;">Add Faculty</h3>
				<span class="sectiondivider"></span>
				<div class="row addfaculty" data-toggle="collapse" data-target="#addfacultydiv" aria-expanded="false" aria-controls="addfacultydiv" role="button">
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
						<h1><i class="fas fa-user-plus"></i></h1>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
						<h5>Click here to add faculty and assign cridentials for faculty to login and access the system and update the marks of the student as well as the attendance.</h5>
					</div>
				</div>
				<div id="addfacultydiv" class="collapse" aria-labelledby="seconddiv" data-parent="#admindiv">
					<center>
					<div id="addfacultyerror" class="form-group col-lg-6 col-xl-6 col-md-6 col-sm-12 col-12">	
			      	</div>
				      	<form id="addfacultyform">
				      		<div class="form-group col-lg-6 col-xl-6 col-md-6 col-sm-12 col-12">
				      			<input class="form-control" type="text" name="facultyname" id="facultyname" placeholder="Faculty Name" required>
				      		</div>
				      		<div class="form-group col-lg-6 col-xl-6 col-md-6 col-sm-12 col-12">
				      			<input class="form-control" type="email" name="facultyemailid" id="facultyemailid" placeholder="Faculty Email Id" required>
				      		</div>
				      		<div class="form-group col-lg-6 col-xl-6 col-md-6 col-sm-12 col-12">
				      			<input class="form-control" type="text" name="facultyid" id="facultyid" placeholder="Assign User Id" required>
				      		</div>
				      		<div class="form-group col-lg-6 col-xl-6 col-md-6 col-sm-12 col-12">
				      			<input class="form-control" type="password" name="facultyassignpassword" id="facultyassignpassword" placeholder="Assign Password" required>
				      		</div>
				      	</form>
				      	<button type="submit" title="Add Faculty" id="addfacultybutton" name="addfacultybutton">Add Faculty</button>
			      	</center>
			      	<br>
			    </div>				
			</div>
			<div class="col-xl-12 col-lg-12col-md-12 col-sm-12 col-12" id="thirddiv">
				<h3 style="padding-top: 40px; font-family: 'Indie Flower', cursive; font-weight:bolder;">View Records</h3>
				<span class="sectiondivider"></span>
				<div class="row viewrecords" data-toggle="collapse" data-target="#viewrecordsdiv" aria-expanded="false" aria-controls="viewrecordsdiv" role="button">
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
						<h1><i class="fas fa-user-plus">&nbsp;</i><i class="fas fa-search"></i></h1>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
						<h5>Click here to view the status of the student, check the attendance by applying date filter and check the progress of the student in their acedemics. Printing the list and malilng to the concerns is also available.</h5>
					</div>
				</div>
				<div id="viewrecordsdiv" class="collapse" aria-labelledby="thirddiv" data-parent="#admindiv">
					<center>
						<div id="viewrecorderror" class="form-group col-lg-6 col-xl-6 col-md-6 col-sm-12 col-12">	
			      		</div>
				      	<form id="viewrecordform">
				      		<div class="form-group col-lg-6 col-xl-6 col-md-6 col-sm-12 col-12">
				      			<select class="custom-select" name="recordyear" id="recordyear">
								  	<option selected value="default">Select Year</option>
								  	<option value="First">First</option>
								  	<option value="Second">Second</option>
								  	<option value="Third">Third</option>
								  	<option value="Fourth">Fourth</option>
								</select>
				      		</div>
				      		<div class="form-group col-lg-6 col-xl-6 col-md-6 col-sm-12 col-12">
				      			<select class="custom-select" name="recordbranch" id="recordbranch">
								  	<option selected value="default">Select Branch</option>
								  	<option value="CSE">CSE</option>
								  	<option value="ECE">ECE</option>
								  	<option value="EE">EE</option>
								  	<option value="ME">ME</option>
								  	<option value="Civil">Civil</option>
								</select>
				      		</div>
				      	</form>
				      	<button type="submit" title="View Attendance" id="viewattendancebutton" name="viewattendancebutton">View Attendance
				      	</button>&nbsp;&nbsp;
				      	<button type="submit" title="View Marks" id="viewmarksbutton" name="viewmarksbutton">View Marks
				      	</button>
			      	</center>
			      	<br>
			    </div>
			</div>
		</div>
	</div>
	<footer class="sticky-bottom">
		<div class="site_footer">
			<center>
				<p class="copyrighttext" style="padding-bottom: 20px; margin-bottom: 0px;">
					&copy; THDC IHET || <?php echo date('Y');?> || <a href="#developermodal" data-toggle="modal">Team</a>
				</p>
			</center>
		</div>
	</footer>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="main.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
	getfeedback();
	function getfeedback(){
		var action = "showmsgs";
		$.ajax({
			type:"POST",
			url:"ajax.php",
			data: {action:action},
			success:function(result){
				// console.log(result);
				document.getElementById("feedbacks").innerHTML=result;
			}
		});
	}
</script>



<!-- Modal -->
<div class="modal fade" id="adminsettings" tabindex="-1" role="dialog" aria-labelledby="adminsettingsTitle" aria-hidden="true" style="background: linear-gradient(45deg, #1de099, #1dc8cd);">
 	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    	<div class="modal-content">
      		<div class="modal-header  modalstyle">
	        	<h5 class="modal-title" id="adminsettingsmodaltitle">Manage Account</h5>
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          	<span aria-hidden="true">&times;</span>
	        	</button>
      		</div>
      		<div class="modal-body">
      			<div class="row">
      				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
      					<p class="modal-title" style="color: teal; font-size: 20px;">Change Password</p>
      					<div id="adminchangepassmsg">
      						
      					</div>
		        		<form id="changeadminpassform">
		        			<input type="hidden" name="uid" id="uid" value="<?php echo $_SESSION["admin"];?>">
		        			<div class="form-group">
		        				<input class="form-control" type="password" name="adminpreviouspass" id="adminpreviouspass" placeholder="Old Password" required>
		        			</div>
		        			<div class="form-group">
		        				<input class="form-control" type="password" name="adminnewpass" id="adminnewpass" placeholder="New Password" required>
		        			</div>
		        			<button type="button" class="btn btn-success btn-sm" id="changeadminpass">Change password</button>
		        		</form>
		        		<br><br>
      				</div>
      				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
      					<p class="modal-title" style="color: teal; font-size: 20px;">Last Login Details</p>
      					<br>
      					<div id="lastlogin">
      						
      					</div>
      					<br>
      					<p class="modal-title" style="color: teal; font-size: 20px;">Is acedemic session is end ?</p>
      					<button type="button" class="btn btn-success btn-sm" id="endofsession">Yes</button>
      					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      					<button type="button" class="btn btn-success btn-sm" id="noend" data-dismiss="modal">No</button>
      				</div>
      			</div>
      			<div class="row">
      				<div class="modal-title col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="color: teal; font-size: 20px;">
      					<p>Feedbacks / Messeges</p>
      				</div>
      			</div>
      			<div class="row text-center" style="margin-right: 5px; margin-left: 5px;">
      				<div data-spy="scroll" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" id="feedbacks" data-offset="0">
      					
      				</div>
      			</div>
      		</div>
      		<div class="modal-footer modalstyle">
        		<button type="button" class="btn btn-danger dismissbtn" data-dismiss="modal">Close</button>
      		</div>
    	</div>
  	</div>
</div>
<div class="modal fade" id="developermodal" tabindex="-1" role="dialog" aria-labelledby="developermodalTitle" aria-hidden="true" style="background: linear-gradient(45deg, #1de099, #1dc8cd);">
 	<div class="modal-dialog modal-dialog-centered" role="document">
    	<div class="modal-content">
      		<div class="modal-header modalstyle">
	        	<h5 class="modal-title" id="developermodaltitle">Developers</h5>
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          	<span aria-hidden="true">&times;</span>
	        	</button>
      		</div>
      		<div class="modal-body">
      			<div class="container-fluid">
	      			<div class="row">
	      				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
	      				<center>
		      				<h3 style="padding-top: 40px; font-family: 'Indie Flower', cursive; font-weight:bolder;">Guide</h3>
							<span class="sectiondivider"></span>
							<img src="images/pspandey.jpg" class="img-thumbnail rounded-circle">
							<p class="foocolext">Mr. P. S. Pandey<br>Assitant Prof. ECE Dept.</p>
						</center>
						</div>
	      			</div>
	      			<center>
	      			<h3 style="padding-top: 40px; font-family: 'Indie Flower', cursive; font-weight:bolder;">Students</h3>
					<span class="sectiondivider"></span>
					</center>
	      			<div class="row">
	      				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
	      					<center>
		      					<img src="images/ankuj.jpg" class="img-thumbnail rounded-circle">
								<p class="foocolext">Ankuj Bisht</p>
							</center>
	      				</div>
	      				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
	      					<center>
		      					<img src="images/nidhi.jpeg" class="img-thumbnail rounded-circle">
								<p class="foocolext">Nidhi Gagat</p>
							</center>
	      				</div>
	      				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
	      					<center>
		      					<img src="images/vkg.jpeg" class="img-thumbnail rounded-circle">
								<p class="foocolext">Vivek Kumar Gupta</p>
							</center>
	      				</div>
	      			</div>
      			</div>
      		</div>
      		<div class="modal-footer modalstyle">
        		<button type="button" class="btn btn-danger dismissbtn" data-dismiss="modal">Close</button>
      		</div>
    	</div>
  	</div>
</div>
<div class="modal fade" id="attendancemodal" tabindex="-1" role="dialog" aria-labelledby="attedanceTitle" aria-hidden="true" style="background: linear-gradient(45deg, #1de099, #1dc8cd);">
 	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    	<div class="modal-content">
      		<div class="modal-header  modalstyle">
	        	<h5 class="modal-title" id="attedancemodaltitle">Attendance Panel</h5>
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          	<span aria-hidden="true">&times;</span>
	        	</button>
      		</div>
      		<div class="modal-body" id="attendancediv">
      			<div class="form_div my-2 my-lg-0" id="attendanceformdiv">
      				<div class="row" id="subfilterdiv">
	  					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
	  						<p class="text-warning">Select the subject for subject wise attendance status. For checking between two dates use date fillter, and you can set the percentage criteria.</p>
		      				<form class="form-inline my-2 my-lg-0" id="subfilterform">
		      					<select class="custom-select mr-sm-2" name="subselect" id="subselect">
		      						<option>Select a subject to apply filter</option>
		      					</select>
		      				</form> 
		      				<p></p>    						
	  					</div>
	      			</div>
      				<div class="row text-center" id="subfilterdiv">
	  					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
	  						<p class="text-warning">OR</p>    						
	  					</div>
	      			</div>
	      			<div class="row">
		      			<center>
      					<form class="form-inline my-2 my-lg-0" id="filterform">
			      			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			      				<input type="hidden" name="filteryear" id="filteryear" value="">
			      				<input type="hidden" name="filterbranch" id="filterbranch" value="">
			      				<input class="form-control mr-sm-2" title="Enter first date limit" type="date" name="firstdate" id="firstdate" required>
			      				<input class="form-control mr-sm-2" title="Enter second date" type="date" name="seconddate" id="seconddate" max="<?php echo date('y-m-d');?>" required>
	      						<input class="form-control mr-sm-2" type="number" name="percent" id="percent" title="Select Percentage Threshold" max="100" min="0" required>
      							<button class="my-2 my-sm-2 btn-sm dismissbtn" type="button" title="Apply Filter" name="filterbutton" id="filterbutton">Apply Filter</button>
      						</div>
      					</form> 
      					</center>
      				</div>
      			</div>
      			<div class="data_div" id="attendancedatadiv">

      			</div>
      		</div>
      		<div class="modal-footer modalstyle">
        		<button type="button" class="btn btn-danger dismissbtn" data-dismiss="modal">Close</button>
        		<button type="button" class="btn btn-success" id="printstatus">Print</button>
      		</div>
    	</div>
  	</div>
</div>
<div class="modal fade" id="marksmodal" tabindex="-1" role="dialog" aria-labelledby="marksTitle" aria-hidden="true" style="background: linear-gradient(45deg, #1de099, #1dc8cd);">
 	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    	<div class="modal-content">
      		<div class="modal-header  modalstyle">
	        	<h5 class="modal-title" id="marksmodaltitle">Marks Panel</h5>
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          	<span aria-hidden="true">&times;</span>
	        	</button>
      		</div>
      		<div class="modal-body">
      			<div class="row" id="filterdiv">
  					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
	      				<form class="form-inline my-2 my-lg-0" id="subjectfilterform">
	      					<select class="custom-select" name="sbjectselect" id="sbjectselect">
	      						
	      					</select>
	      				</form>     						
  					</div>
      			</div>
      			<div id="marksdiv">
      				
      			</div>
      		</div>
      		<div class="modal-footer modalstyle">
        		<button type="button" class="btn btn-danger dismissbtn" data-dismiss="modal">Close</button>
        		<button type="button" class="btn btn-success" id="printmarksstatus">Print</button>
      		</div>
    	</div>
  	</div>
</div>
<div class="modal fade" id="replymodal" tabindex="-1" role="dialog" aria-labelledby="replymodalTitle" aria-hidden="true" style="background: linear-gradient(45deg, #1de099, #1dc8cd);">
 	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    	<div class="modal-content">
      		<div class="modal-header  modalstyle">
	        	<h5 class="modal-title" id="replymodalmodaltitle">Reply Modal</h5>
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          	<span aria-hidden="true">&times;</span>
	        	</button>
      		</div>
      		<div class="modal-body">
      			<div class="row">
      				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
      					<h4 class="modal-title" style="color: teal; font-size: 20px;">Write a reply</h4>
      					<br>
      					<div id="replymodalmsg">
      						
      					</div>
		        		<form id="replyform">
		        			<div class="form-group">
		        				<input class="form-control" type="text" name="sendersubject" id="sendersubject" readonly>
		        			</div>
		        			<div class="form-group">
		        				<input class="form-control" type="email" name="senderemail" id="senderemail" readonly>
		        			</div>
		        			<div class="form-group">
		        				<textarea class="form-control" rows="4" placeholder="Enter Your reply" id="replymsg" name="replymsg" required></textarea>
		        			</div>
		        			<input type="hidden" name="sendername" id="sendername">
		        			<input type="hidden" name="msgid" id="msgid">
		        			<button type="button" class="btn btn-success btn-sm dismissbtn" id="reply">Reply</button>
		        		</form>
      				</div>
      			</div>
      		</div>
      		<div class="modal-footer modalstyle">
        		<button type="button" class="btn btn-danger dismissbtn" data-dismiss="modal">Close</button>
      		</div>
    	</div>
  	</div>
</div>
</html>
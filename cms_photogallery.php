<!DOCTYPE html>
<html>
	 <?php 
 session_start();
 
 include('config/db.php');
include('include/checkval.php');
 $msg="";
 $title="";
 $_SESSION['email']='rama.a@nic.in';
if(!empty($_SESSION['email'] ))
{

 if(!empty($_POST["btneventsubmit"]))
{
		$eventname=$_POST["txteventname"];
		 $fromdate=$_POST["txtfromdate"];
		 $todate=$_POST["txttodate"];
		
		 
		
		 if(chkalphanum_title($eventname) == '2')
		  $msg.="Check Event Name";
		 if(check($fromdate) == '2')
		   $msg.="Check From Date";
		 if( check($todate)=='2')
			$msg.="Check To Date";
		
		if((chkalphanum_title($eventname) != '2') && (check($fromdate) != '2') && (check($todate) != '2') )
		{		

			echo $str="insert into event_mst (eventname,fromdate,todate,submittedby) values('".$eventname."','".$fromdate."','".$todate."','". $_SESSION['email']."')";
			$execQuery_in=pg_query($connection,$str);
			
			$msg="Success";
		}
		else
		{
		$msg.="Insert Failed";
		}

}
else if(!empty($_POST["btnphotosubmit"]))
{

		$eventname=$_POST["sel_event"];
		 $caption=$_POST["txtphotocaption"];
		
		if (($_FILES['txtupload']['name']!="")){
				// Where the file is going to be stored


				 $target_dir = "upload/";
				 $file = $_FILES['txtupload']['name'];
				 $path = pathinfo($file);
				 $filename = $path['filename'];
				 $ext = $path['extension'];
				 $temp_name = $_FILES['txtupload']['tmp_name'];
				 $path_filename_ext = $target_dir.$caption."_".$filename.".".$ext;
				 $sfile_size =$_FILES['txtupload']['size'];
				//  echo $file_size;exit;die();
					$sfile_ext=strtolower(end(explode('.',$_FILES['txtupload']['name'])));
									  $extensions= array("png","jpeg");
									 
									  if(in_array($sfile_ext,$extensions)=== false){
										 $msg1="extension not allowed, please choose a JPEG or PNG file.";
									  }
									 
									  
									  if($sfile_size > 2097152){
										 $msg1='File size must be excately 2 MB';
									  }
										
				// Check if file already exists
				if (file_exists($path_filename_ext)) { }
				else{

		
								 if(chkalphanum_title($eventname) == '2')
								  $msg.="Check Event Name";
								 if(chkalphanum($caption) == '2')
								   $msg.="Check Photo Caption";
								 
								
								if((chkalphanum_title($eventname) != '2') && (chkalphanum($caption) != '2') )
								{		

									move_uploaded_file($temp_name,$path_filename_ext);
									 $str="insert into photogallery_mst (event_id,title,doc_path,submittedby) values('".$eventname."','".$txtphotocaption."','".$path_filename_ext."','". $_SESSION['email']."')";
									$execQuery_in=pg_query($connection,$str);
									
									$msg="Success";
								}
								else
								{
								$msg.="Insert Failed";
								}
						}
						
				}
				else
				{
				}
				
}
else
{
$msg="";
}


					?>
<!-- Mirrored from theemon.com/t/transport-html/LivePreview/homepage7.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Mar 2020 06:01:54 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>Mercantile Marine Chennai</title>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

		<!-- Google Font -->
		<!-- <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900" rel='stylesheet' type='text/css'>
		<link href="https://fonts.googleapis.com/css?family=Karla:400,700italic,700,400italic" rel='stylesheet' type='text/css'> -->
		
		<!-- Font Awesome -->
	
		<!-- Bootstrap -->
		<link rel="stylesheet" href="assets/css/bootstrap.css" />
<link href="assets/css/fonts/Raleway.css" rel='stylesheet' type='text/css'>
		<link href="assets/css/fonts/italic.css" rel='stylesheet' type='text/css'>
		<!-- REVOLUTION BANNER CSS SETTINGS -->
		<link rel="stylesheet" type="text/css" href="assets/rs-plugin/css/settings.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="assets/css/dropdown.css" />

		<link rel="stylesheet" href="assets/css/owl.carousel.css" />
		<link rel="stylesheet" href="assets/css/flexslider.css" />
		<link href="assets/css/jquery.bxslider.css" rel="stylesheet/less">
		<link rel="stylesheet" href="assets/css/global.css" />
		<link rel="stylesheet" href="assets/css/style.css" />
		<link rel="stylesheet" href="assets/css/homepage7.css" />
		<link rel="stylesheet" href="assets/css/responsive.css" />
		<link href="assets/css/skin.less" rel="stylesheet/less">
		 <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
		 	<link rel="stylesheet" href="assets/css/font-awesome.min.css" />
 <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <!--<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">-->
  <link href="vendor/css/font.css" rel="stylesheet" type="text/css">
		<style>
* {box-sizing: border-box}
body {font-size: 15px;
    line-height: 1.6;
	color: #4ab7e3;
    font-family: 'karla', sans-serif;
    font-weight: 400;
    background: #fdfdfd;}

/* Style the tab */
.cms-tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 30%;
  height: 300px;
}

/* Style the buttons inside the tab */
.cms-tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.cms-tab button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.cms-tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
	float: left;
    padding: 0px 12px;
    width: 100%;
    height: 300px;
}
.abt-banner {
    width: 100%;
    height: 50px;
	}
	.btn-primary {
  color: #fff;
  background-color: #337ab7;
  border-color: #2e6da4;
}
.btn-danger {
  color: #fff;
  background-color: #d9534f;
  border-color: #d43f3a;
}
.card-image {
    width: 200px; // how much you want
    min-height: 100px;
    float: left;
    margin: 10px;
}
</style>
 <script src="js/jquery.min.js"></script>
 <script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
 <script>

$(document).ready(function () {

$(".fa[data-target='#myeditModal']").click(function() {

       var columnHeadings = $("thead th").map(function() {
                 return $(this).text();
              }).get();
       columnHeadings.pop();
       var columnValues = $(this).parent().siblings().map(function() {
                 return $(this).text();
       }).get();

  $.each(columnHeadings, function(i, columnHeader) {
      
	 
  });
 modalForm.append('<div class="form-group"><br/></div><div class="form-group"><div class="row"><div class="col-sm-3"></div><div class="col-sm-7"><input  type="submit" id="btneditsubmit" name="btneditsubmit" class="btn btn-primary" value="Save changes"></input><button type="button" class="btn btn-danger" data-dismiss="modal">Close</button></div></div></div></form>');

  modalBody.append(modalForm);
  
  $('.editmodal-body').html(modalBody);
 
  
 // modalFoot.append('<input  type="submit" id="btneditsubmit" name="btneditsubmit" class="btn btn-primary" value="Save changes"/>');
//$('.editmodal-footer').html(modalFoot);
   
});
$('.editmodal-footer .btn-primary').click(function() {

   $('form[name="modalForm"]').submit();
   $.ajax({  
                     url:"cms_circular_edit.php",  
                     method:"POST",  
                     data:$('#modalForm').serialize(),  
                     beforeSend:function(){  
                         
                     },  
                     success:function(data){  
					
                         
                          $('#myeditModal').modal('hide');  
                          
                     }  
                });  
});

$(".fa[data-target='#myviewModal']").click(function() {
	 var columnHeadings = $("thead th").map(function() {
                 return $(this).text();
              }).get();
       columnHeadings.pop();
       var columnValues = $(this).parent().siblings().map(function() {
                 return $(this).text();
       }).get();

  $.each(columnHeadings, function(i, columnHeader) {
         $("#hid_val").val(columnValues[0]);
			
		});
		 $.ajax({
                            method: 'post',
                            dataType: 'json',
                            url: 'cms_common.php',
                            data: {
                                'id': $("#hid_val").val()
                            },
                            success: function (response, textStatus, jqXHR) {
                                if (!response) {
                                    alert('No client data found.');
                                } else {
								
								var links="";
								links=response;								
								var i=0;
								var rr='<div class="row">';
								
								for(i=0;i<links.length;i++)						
							{
							
											if((i%2)==0)
																		{
																		rr+='</div><div class="row">';
																		}
																	rr+=' <div class="card col-sm-3"> <img class="card-image" src= "'+links[i]["doc_path"]+'"/><div class="card-body">  <h3 class="card-title">'+links[i]["title"]+'</h3>   </div>  </div> ';
																		
                                   
									}
									
                                    $('#photo_card').html(rr); 
                                }
                            },
                            error: function (jqXHR, textStatus, errorThrown) {
                                alert('An error occurred. Please try again.');
                            },
                            cmplete: function (jqXHR, textStatus) {
                                //...
                            }
                        });
		
});

});
</script>
	</head>
	<body class="who-body">

		<!--Wrapper Section Start Here -->
		<div id="wrapper" class="homepage homepage-3 homepage7-wrap">
			<!--header Section Start Here -->
			<header id="header" class="header homepage7-header">
				<!-- primary header Start Here -->
				<!-- primary header Ends Here -->
				<!-- main header Starts Here -->
				<div class="main-header">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-1">
								<a href="index-2.html" class="logo"> <img src="assets/images/logo.gif" alt="" /> </a>

							</div>
							<div class="col-xs-12 col-sm-6">
								<span class="transport">Mercantile Marine Department,Chennai<span></span><p> Ministry of Shipping, Government of India</p></span>

							</div>

							<div class="col-xs-12 hidden-xs col-sm-5">

								<div class="call-us">
											<img src="assets/images/emblem.png" alt="" />
								</div>
							</div>
						</div>
					</div>
				</div>
 				

				<div class="secondary-header">
					<div class="container">
						<div class="row">
							<div class="col-lg-10 col-md-10 col-sm-10 cms-span">
								<span class="">Content Management System(cms)</span>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 logout"><a href="login.php" class="logout"><i class="fa fa-user" aria-hidden="true">  Logout</i></a></div>
						</div>
					</div>
				</div>

				<!-- main header Ends Here -->
			</header>
            


            <div class="about-banner-cms">
						
			</div>

   <section id="section" class="section-cms">
                   

        <div class="section homepage-7 .slides-text">
			<div class="services">
				
					<div class="row">
						<!-- <div class="col-md-1 col-sm-1 col-xs-1"></div> -->
						<div class="col-lg-4">
									<div class="service-quote-wrap">
										<div class="our-service-wrap items">
										
												<?php include "leftmenu.html";?>	
													</div>
										</ul>
										</div>
										
									</div>
                                </div>
                        <div class="col-lg-7">
                            
						
									
								<div class="table-responsive">
								 <div style="float:right">  <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"> </i> Add Event</button> | 
								 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myeditModal"  > <i class="fa fa-plus"> </i> Add Photos</button>									 <span> | </span>
									
									
									 
									 </div>	

								 <div style="padding-bottom:40px;"> <p></p></div>
								  <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">
								<thead>
									  <tr>
									  <th scope="col" style="display:none">id</th>
										<th scope="col">Title</th>
										<th scope="col" style="display:none">Type</th>
										<th scope="col" style="display:none">Release Date</th>										
										<th scope="col" style="display:none">Document</th>
										<th scope="col">Edit</th>
									  </tr>
									
									</thead>
									 <tbody>
									 <?php
									  $sql = "SELECT * From event_mst";
										$query = pg_query($connection, $sql);
										$rowCount = pg_num_rows($query);
										$rr="";
									  while($row = pg_fetch_array($query))
										{
																								
										$rr.='<tr><td style="display:none">'.$row["event_id"].'</td><td>'.$row["eventname"].'</td><td style="text-align:center;">		<i class="fa fa-list" data-toggle="modal" data-target="#myviewModal" contenteditable="false"></i>			<i class="fa fa-edit" data-toggle="modal" data-target="#myeditModal" contenteditable="false"></i>
							</td>	 </tr>';
																					
																		
										}
										echo $rr;
									 ?>	
								   </tbody>
								   </table>                    
								</div>
								
                     
						   
						</div>
        
						
						
						


            </div>
			<div class="col-lg-1"></div>
        </div>
        <!-- /.container-fluid -->

      </div>

     
                    </div>  
                </div>
            </div> 
		</div>
</section>

			<!--Section area ends Here -->
            <!--Footer area starts Here -->
            
			<footer id="footer">
				<!--Footer box starts Here -->
				<div class="footer clearfix">
					<div class="container">
						
						<?php include('footer.php') ?>
					</div>
				</div>
				<!--Footer box ends Here -->
			</footer>
			<!--Footer area ends Here -->
    <!--Wrapper Section Ends Here -->
    
     <div class="modal" id="myModal">
          <div class="modal-dialog">
            <div class="modal-content">
        
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Add New Events/Photogallery</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
        
              <!-- Modal body -->
              <div class="modal-body">
                <form  name="form" method="post" action="cms_photogallery.php" >

						  <div class="form-group">
							<label for="txteventname">Event Name</label>
							<input type="text" class="form-control" id="txteventname" name="txteventname" />
						  </div>
						   <div class="form-group">
							<label for="txtfromdate">Event From Date</label>
							<input type="date" class="form-control" id="txtfromdate" name="txtfromdate" />
							<label for="txttodate">Event To Date</label>
							<input type="date" class="form-control" id="txttodate" name="txttodate" />
						  </div>
						  <!-- <div class="form-group">
							<label for="txtupload">Upload Document</label>
							
							<input type="file" name="txtupload" id="txtupload" accept="application/pdf"></input>
						  </div>-->
						 
						  <input type="submit"  name="btneventsubmit" class="btn btn-primary"/>
						  </form>
				  
              </div>
        
              <!-- Modal footer -->
              <div class="modal-footer">
               
              </div>
        </form>
            </div>
          </div>
        </div>
		<div class="modal" id="myviewModal">
          <div class="modal-dialog">
            <div class="modal-content">
        
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">View Photogallery</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
        
              <!-- Modal body -->
              <div class="modal-body">
               <input type="hidden" id="hid_val" name="hid_val"/>
								<div class="container"> 
									<div class="card-group" id="photo_card"> 
											
														 
									   
									</div> 
					</div> 		
						  <!-- <div class="form-group">
							<label for="txtupload">Upload Document</label>
							
							<input type="file" name="txtupload" id="txtupload" accept="application/pdf"></input>
						  </div>-->
						 
						 
				  
              </div>
        
              <!-- Modal footer -->
              <div class="modal-footer">
               
              </div>
       
            </div>
          </div>
        </div>
		</div>
      <!-- End of Main Content -->
<!--<div class="modal fade" id="myeditModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">-->
<div class="modal" id="myeditModal">

    
   
    <<div class="modal-dialog">
            <div class="modal-content">
        
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Add New Photos</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
            <div class="modal-body">
			<form  name="form" method="post" action="cms_photogallery.php" enctype="multipart/form-data">

						 <div class="form-group">
							<label for="sel_event">Select Event</label>
							<select  class="form-control" id="sel_event" name="sel_event">
								<?php $sql = "SELECT * From event_mst";
										$query = pg_query($connection, $sql);
										$rowCount = pg_num_rows($query);
										$rr="";
									  while($row = pg_fetch_array($query))
										{
																								
										$rr.='<option value="'.$row["event_id"].'">'.$row["eventname"].'</option>';
																					
																		
										}
										echo $rr;
										?>
							 
							</select>
						  </div>
						  
						  <div class="form-group">
							<label for="txtupload">Add Photos</label>
							
							<input type="file" name="txtupload" id="txtupload" accept="image/png, image/jpeg"></input>
						  </div>
						 <div class="form-group">
							<label for="txtphotocaption">Add Photo Caption Name</label>
							<input type="text" class="form-control" id="txtphotocaption" name="txtphotocaption" />
						  </div>
						  <input type="submit"  name="btnphotosubmit" class="btn btn-primary"/>
						  </form>
				  </div>
            <div class="editmodal-footer">
               <div> <br/></div>
                
				
            </div>
        </div>
  
</div>
</div>
		<script type="text/javascript" src="assets/js/jquery-1.11.3.min.js"></script>

		<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>








		

	</body>

<!-- Mirrored from theemon.com/t/transport-html/LivePreview/homepage7.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Mar 2020 06:02:02 GMT -->
</html>
<?php
}
else
{
header("Location: login.php"); 
exit();
}

?>
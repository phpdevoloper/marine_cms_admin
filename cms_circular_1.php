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

 if(!empty($_POST["submit"]))
{
 if (($_FILES['txtupload']['name']!="")){
// Where the file is going to be stored

 $target_dir = "upload/";
 $file = $_FILES['txtupload']['name'];
 $path = pathinfo($file);
 $filename = $path['filename'];
 $ext = $path['extension'];
 $temp_name = $_FILES['txtupload']['tmp_name'];
 $path_filename_ext = $target_dir.$filename.".".$ext;
 $file_size =$_FILES['txtupload']['size'];
//  echo $file_size;exit;die();
	$sfile_ext=strtolower(end(explode('.',$_FILES['txtupload']['name'])));
					  $extensions= array("pdf","png");
					 
					  if(in_array($sfile_ext,$extensions)=== false){
						 $msg1="extension not allowed, please choose a JPEG or PNG file.";
					  }
					 
					  
					  if($sfile_size > 2097152){
						 $msg1='File size must be excately 2 MB';
					  }
					
// Check if file already exists
if (file_exists($path_filename_ext)) {
 $msg="";
 }else{
//  move_uploaded_file($temp_name,$path_filename_ext);
 
		 $type=$_POST["sel_type"];
		 $category=$_POST["cat"];
		 $title=$_POST["txttitle"];
		 $reldate=$_POST["txtdate"];
		 $validupto=$_POST["validupto"];
		 
		
		 if(chkalphanum_title($title) == '2')
		  $msg.="Check Title";
		 if(chklen1($type) == '2')
		   $msg.="Check Type";
		 if( chklen3($category)=='2')
			$msg.="Check Category";
		if(check($reldate) == '2')
		  $msg.="Check release Date";
		 if(check($validupto) == '2')
		 $msg.="Check Valid Upto Date";
		if((chkalphanum_title($title) != '2') && (chklen1($type) != '2') && (chklen3($category) != '2') && (check($reldate) != '2') && (check($validupto) !='2'))
		{
			
			move_uploaded_file($temp_name,$path_filename_ext);

			$str="insert into circular_mst (type,category,title,release_dt,dt_upto,doc_path,doc_size,submittedby) values('".$type."','".$category."','".$title."','".$reldate."','".$validupto."','".$path_filename_ext."','".$file_size."','". $_SESSION['email']."')";
			$execQuery_in=pg_query($connection,$str);
			var_dump($str);exit;die();
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
$msg="";
}

}
					?>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>Mercantile Marine Chennai</title>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

		<link rel="stylesheet" href="assets/css/bootstrap.css" />
		<link href="assets/css/fonts/Raleway.css" rel='stylesheet' type='text/css'>
		<link href="assets/css/fonts/italic.css" rel='stylesheet' type='text/css'>
		
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
  var modalBody = $('<div id="modalContent"></div>');

  var modalForm = $('<form role="form" name="modalForm" id="modalForm"  action="cms_circular_edit.php" enctype="multipart/form-data" method="post">');
  $.each(columnHeadings, function(i, columnHeader) {
       var formGroup = $('<div class="form-group"><div class="row">');
	   
       formGroup.append('<div class="col-sm-3"><label for="'+columnHeader+'">'+columnHeader+'</label></div>');
	  if(i==2)
	  formGroup.append('<div class="col-sm-7" ><select  class="form-control" name="'+columnHeader+i+'" name="'+columnHeader+i+'" required><option value=""  disabled >Select</option><option value="C" >Circular</option><option value="N"  >Notifications</option></select></div></div></div>'); 
	   else if(i==3)
	  formGroup.append('<div class="col-sm-7"><select  class="form-control" name="'+columnHeader+i+'" name="'+columnHeader+i+'" required><option value=""  disabled>Select</option><option value="DEC">Deck</option><option value="ENG">Engine</option><option value="SUR">Survey</option><option value="SWO">SWO</option><option value="SEO">SEO</option><option value="SM">SM</option><option value="TEN">Technical News</option><option value="OTH">Others</option></select></div></div></div>'); 
	  else if(i==4)
	  formGroup.append('<div class="col-sm-7"><input type="date" name="'+columnHeader+i+'" id="'+columnHeader+i+'" value="'+columnValues[i]+'"  required></input></div></div></div>'); 
	  else if(i==5)
	  formGroup.append('<div class="col-sm-7"><input type="date" name="'+columnHeader+i+'" id="'+columnHeader+i+'" value="'+columnValues[i]+'"  required></input></div></div></div>');   
	  else if(i==6)
	  formGroup.append('<div class="col-sm-7"><input type="file" name="txtupload_edit" id="txtupload_edit" value="'+columnValues[i]+'" accept="application/pdf"></input></div></div></div>'); 
	   else
       formGroup.append('<div class="col-sm-7"><input class="form-control" name="'+columnHeader+i+'" id="'+columnHeader+i+'" value="'+columnValues[i]+'" pattern="[a-zA-Z0-9\s]+" /></div></div></div>'); 
		 //}
		 console.log(columnHeader+i);
		//  exit();
		
	   modalForm.append(formGroup);
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
                            
								<?php if($msg=="Success"){?>
								<span class="label label-success">	<?php echo $msg;?></span>
								<?php
								}
								else
								{
								?>
								<span class="label label-danger">	<?php echo $msg;?></span>
								<?php
								}
								?>
								<div class="table-responsive">
								 <div style="float:right"> <button type="button" class="btn btn-primary"> <i class="fa fa-list"> </i> List</button>
									 <span> | </span>
									 <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"> </i> Add New</button>
									 </div>	

								 <div style="padding-bottom:40px;"> <p></p></div>
								  <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">
								<thead>
									  <tr>
									  <th scope="col" style="display:none">id</th>
										<th scope="col">Title</th>
										<th scope="col" style="display:none">Type</th>
										<th scope="col" style="display:none">category</th>
										<th scope="col" style="display:none">Release Date</th>
										<th scope="col" style="display:none">Validupto</th>										
										<th scope="col" style="display:none">Document</th>
										<th scope="col">Edit</th>
									  </tr>
									
									</thead>
									 <tbody>
									 <?php
									  $sql = "SELECT * From circular_mst order by release_dt";
										$query = pg_query($connection, $sql);
										$rowCount = pg_num_rows($query);
										$rr="";
									  while($row = pg_fetch_array($query))
										{
																								
										$rr.='<tr><td style="display:none">'.$row["cir_id"].'</td><td>'.$row["title"].'</td><td style="display:none">'.$row["type"].'</td><td style="display:none">'.$row["category"].'</td><td style="display:none">'.$row["release_dt"].'</td><td style="display:none">'.$row["dt_upto"].'</td><td style="display:none">'.$row["doc_path"].'</td><td style="text-align:center;">
								<i class="fa fa-edit" data-toggle="modal" data-target="#myeditModal" contenteditable="false"></i>
							</td>	 </tr>';
																					
																		
										}
									
										echo $rr;
									 ?>
								   </tbody>
								   </table>                    
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
                <h4 class="modal-title">Add New circulars/notifications</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
        
              <!-- Modal body -->
              <div class="modal-body">
               <form  name="form" method="post" action="cms_circulars.php" enctype="multipart/form-data">
			    <div class="form-group">
					<label for="sel_type">Select Type</label>
					<select  class="form-control" id="sel_type" name="sel_type" required>
					  <option value='' selected disabled>Select</option>
					  <option value='C'>Circular</option>
					  <option value='N'>Notifications</option>
					 
					</select>
				  </div>
				  <div class="form-group">
				  <label for="cat">category</label>
					<select  class="form-control" id="cat" name="cat" required>
					  <option value='' selected disabled>Select</option>
					  <option value='DEC'>Deck</option>
					  <option value='ENG'>Engine</option>
					  <option value='SUR'>Survey</option>
					  <option value='SWO'>SWO</option>
					  <option value='SEO'>SEO</option>
					  <option value='SM'>SM</option>
					  <option value='TEN'>Technical News</option>
					  <option value='OTH'>Others</option>
					</select>
				  </div>
				  <div class="form-group">
					<label for="txttitle">Title</label>
					<input type="text" class="form-control" id="txttitle" name="txttitle" pattern="[a-zA-Z0-9\s()\/-]+"  required/>
				  </div>
				   <div class="form-group">
					<label for="txtdate">Date Released</label>
					<input type="date" class="form-control" id="txtdate" name="txtdate"   required/>
				  </div>
				  <div class="form-group">
					<label for="validupto">Validupto</label>
					<input type="date" class="form-control" id="validupto" name="validupto" min=<?php echo date('Y-m-d'); ?>  required/>
				  </div>
				   <div class="form-group">
					<label for="txtupload">Upload Document</label>
					
					<input type="file" name="txtupload" id="txtupload" accept="application/pdf" required></input>
				  </div>
				  <!-- <div class="form-group">
				  <embed src="upload/bootstrap.css" type="application/pdf"   height="700px" width="500">
				  </div> -->
				  
              </div>
              <!-- Modal footer -->
              <div class="modal-footer">
                <input type="submit"  name="submit" class="btn btn-primary"/>
              </div>
        </form>
            </div>
          </div>
        </div>
      <!-- End of Main Content -->
<!--<div class="modal fade" id="myeditModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">-->
<div class="modal" id="myeditModal">

    
   
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
               <h4 class="modal-title" id="myModalLabel">Edit Circular</h4> <button type="button" class="close" data-dismiss="modal"> <span aria-hidden="true" class="">×   </span><span class="sr-only">Close</span>

                </button>
                 
					
				 
            </div>
            <div class="editmodal-body">
			
				  </div>
            <div class="editmodal-footer">
               <div> <br/></div>
                
				
            </div>
        </div>
  
</div>

		<script type="text/javascript" src="assets/js/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="validation.js"></script>

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



//validations


// var input = document.getElementById('txttitle');
// 		input.oninvalid = function(event) {
//     event.target.setCustomValidity('Title should only contain alphanumeric letters.');
// }


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
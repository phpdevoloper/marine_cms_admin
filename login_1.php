<?php
error_reporting(0);
session_start();

?>
<!DOCTYPE html>
<html>
	<?php //include('login_check.php'); 
	
    // Database connection
    include('config/db.php');

    global $wrongPwdErr, $accountNotExistErr, $emailPwdErr, $verificationRequiredErr, $email_empty_err, $pass_empty_err;

    if(isset($_POST['login'])) {
	
	if(($_POST['captcha'] == $_SESSION['vercode']))
{

	
        $email_signin        = $_POST['email_signin'];
        $password_signin     = $_POST['password_signin'];

        // clean data 
        $user_email = filter_var($email_signin, FILTER_SANITIZE_EMAIL);
        $pswd = pg_escape_string($connection, $password_signin);

        // Query if email exists in db
        $sql = "SELECT * From login_mst WHERE email = '{$email_signin}' ";
        $query = pg_query($connection, $sql);
        $rowCount = pg_num_rows($query);

        // If query fails, show the reason 
        if(!$query){
           die("SQL query failed: " . pg_error($connection));
        }

        if(!empty($email_signin) && !empty($password_signin)){
            if(!preg_match("/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{6,20}$/", $pswd)) {
                $wrongPwdErr = '<div class="alert alert-danger">
                        Password should be between 6 to 20 charcters long, contains atleast one special chacter, lowercase, uppercase and a digit.
                    </div>';
            }
            // Check if email exist
            if($rowCount <= 0) {
                $accountNotExistErr = '<div class="alert alert-danger">
                        User account does not exist.
                    </div>';
            } else {
                // Fetch user data and store in php session
                while($row = pg_fetch_array($query)) {
                    $id            = $row['id'];
                    $firstname     = $row['firstname'];
                    $lastname      = $row['lastname'];
                    $email         = $row['email'];
                  //  $mobilenumber   = $row['mobilenumber'];
                    $pass_word     = $row['password'];
                 //   $token         = $row['token'];
                    $is_active     = $row['is_active'];
                }

                // Verify password
               // $password = password_verify($password_signin, $pass_word);
                // Allow only verified user
                if($is_active == 'A') {
                    if($email_signin == $email && $password_signin == $pass_word) {
                       header("Location: ./cms_dashboard.php");
                       
                       $_SESSION['id'] = $id;
                       $_SESSION['firstname'] = $firstname;
                       $_SESSION['lastname'] = $lastname;
                       $_SESSION['email'] = $email;
                     //  $_SESSION['mobilenumber'] = $mobilenumber;
                      // $_SESSION['token'] = $token;

                    } else {
                        $emailPwdErr = '<div class="alert alert-danger">
                                Either email or password is incorrect.
                            </div>';
                    }
                } else {
                    $verificationRequiredErr = '<div class="alert alert-danger">
                            Account verification is required for login.
                        </div>';
                }

            }

        } else {
            if(empty($email_signin)){
                $email_empty_err = "<div class='alert alert-danger email_alert'>
                            Email not provided.
                    </div>";
            }
            
            if(empty($password_signin)){
                $pass_empty_err = "<div class='alert alert-danger email_alert'>
                            Password not provided.
                        </div>";
            }            
        }

    }
	else
	{
	
	 $captchaErr ='<div class="alert alert-danger"> Entered Captcha is incorrect                              
                            </div>';
}
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
		<link href="assets/css/fonts/Raleway.css" rel='stylesheet' type='text/css'>
		<link href="assets/css/fonts/italic.css" rel='stylesheet' type='text/css'>
		<!-- Font Awesome -->
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />

		<!-- Bootstrap -->
		<link rel="stylesheet" href="assets/css/bootstrap.css" />

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
        <link rel="stylesheet" href="assets/css/new-style.css" />

<link rel="stylesheet" href="css/demo-style.css"> 
<!-- Font awosome -->
<link rel="stylesheet" href="css/font-awesome.min.css">  

		<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

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
</style>
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
							<div class="col-lg-2 col-md-2 col-sm-2 logout"><a href="index.php" class="logout"><i class="fa fa-user" aria-hidden="true">  Logout</i></a></div>
						</div>
					</div>
				</div>

				<!-- main header Ends Here -->
			</header>
            


            <div class="about-banner-cms">
						<!--<img src="assets/images/page2_slider.png" alt="" class="abt-banner">-->
			</div>

   <section id="section" class="section-cms">
                   

        <div class="section homepage-7 .slides-text">
			<div class="bg_area_1">
				<div class="container">
					<div class="row">
						<!-- <div class="col-md-1 col-sm-1 col-xs-1"></div> -->
						
                        <div class="form-box-size login-form-3 box-shadow">
						 <div class="login-form-title-3">
													<h3>Admin Login</h3>
												</div> 
                            <div class="login-form-box-3">

                                

                                    <h1 class="text-center"></h1>

                                    <div class="form-wrapper">
                                               

                                        <form action="login.php" method="post" >
                  

                    <?php echo $accountNotExistErr; ?>
                    <?php echo $emailPwdErr; ?>
                    <?php echo $verificationRequiredErr; ?>
                    <?php echo $email_empty_err; ?>
                    <?php echo $pass_empty_err; ?>
					<?php echo $captchaErr;?>

                     <div class="form-group">
                         <label for="email_signin" class="form-label">Email</label>
                        <input type="email" class="form-input"  name="email_signin" id="email_signin"  class="login username-field form-control"/>
						 <i class="fa fa-envelope" aria-hidden="true"></i>
                    </div>

                   
                        <div class="form-group">
                         <label for="password_signin" class="form-label">Password</label>
                        <input type="password" class="form-input"  name="password_signin" class="login password-field form-control"
                            id="password_signin" />
							 <i class="fa fa-lock" aria-hidden="true"></i>
                    </div>
					<div class="form-group">
									<div class="captcha">
									<img src="captcha.php" class="imgcaptcha" alt="captcha"  />
									<img src="assets/images/refresh.png" alt="reload" class="refresh" />
									</div>
									<div class="form-group">
                                  <label class="form-label" for="captcha">Captcha</label>
                                  <input id="captcha" name="captcha" class="form-input" type="text" autocomplete="off" required />
                                 <i class="fa fa-cog" aria-hidden="true"></i>
                                </div>
 <div class="button-style">
                    <button type="submit" name="login" id="login" class="button login">Sign
                        in</button></div>
            
                                    </div> <!-- /login-fields -->

                                    



                                </form>

                            </div> <!-- /content -->

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
<script src="js/main.js"></script>
<script language="javascript">
$(document).ready(function(){

$(".refresh").click(function () {

    $(".imgcaptcha").attr("src","captcha.php?_="+((new Date()).getTime()));
    
});

 $('#register1').submit(function() {
   
 /*if($('#password').val() != $('#cpassword').val()){
 	alert("Please re-enter confirm password");
 	$('#cpassword').val('');
 	$('#cpassword').focus();
 	return false;
 }*/
	var captcha = $('#captcha').val();
	alert(captcha);
	/*$.post("submit_demo_captcha.php?"+$("#register").serialize(), {"captcha":captcha }, function(response){
        if(response==1){
           $(".imgcaptcha").attr("src","demo_captcha.php?_="+((new Date()).getTime()));
           clear_form();
           alert("Data Submitted Successfully.")
        }else{
			$("#captcha").val('');
			alert("wrong captcha code!");
        }
	});
	return false;
    });*/
});
});


</script>	

<!-- Mirrored from theemon.com/t/transport-html/LivePreview/homepage7.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Mar 2020 06:02:02 GMT -->
</html>
	
	
	<?php
	session_start();
	
	 include('config/db.php');
	  global $wrongPwdErr, $accountNotExistErr, $emailPwdErr, $verificationRequiredErr, $email_empty_err, $pass_empty_err;
	
	 if(($_POST['capt'] == $_SESSION['vercode']))
	{
	   $email_signin        = $_POST['useremail'];
        $password_signin     = $_POST['pwd'];
	
	    $user_email = filter_var($email_signin, FILTER_SANITIZE_EMAIL);
        $pswd = pg_escape_string($connection, $password_signin);
        $sql = "SELECT * From login_mst WHERE email = '".$email_signin."' ";
        $query = pg_query($connection, $sql);
        $rowCount = pg_num_rows($query);
		//echo  $http_referer= $_SERVER['HTTP_REFERER'];
        // echo  $ip_address= getRealIpAddr();
         $date = date("Y-m-d H:i:s");
		 $http_referer="";
		$ip_address=$_SERVER['REMOTE_ADDR'];
		$actual_link="login.php";
		if($rowCount <= 0) 
			{
                $accountNotExistErr = '<div class="alert alert-danger">
                        User account does not exist.
                    </div>';
					echo $accountNotExistErr;
            } 
			else 
			{
				  while($row = pg_fetch_array($query)) {
				
				$sermd5=md5($_SESSION["rand"].$row["md5_password"]);
				
				if($sermd5==$_POST['pwd'])
				{
				  if($row['is_active'] == 'A') 
						{
								$_SESSION['id'] = $id;
							   $_SESSION['firstname'] = $firstname;
							   $_SESSION['lastname'] = $lastname;
							   $_SESSION['email'] = $email;
								 $str="INSERT INTO public.audit_trail(username, http_referer, url, ip_address, date_time, status)VALUES ('".$row["email"]."', '".$http_referer."', '".$actual_link."', '".$ip_address."', '".$date."', 'Success')";
								 $execQuery_in=pg_query($connection,$str);
								
								echo "Y";
						}						
					else
					{
					$str="INSERT INTO public.audit_trail(username, http_referer, url, ip_address, date_time, status)VALUES ('".$user_email."', '".$http_referer."', '".$actual_link."', '".$ip_address."', '".$date."', 'Fail')";
								 $execQuery_in=pg_query($connection,$str);
								 $wrongPwdErr ='<div class="alert alert-danger"> Password is incorrect </div>';
								echo $wrongPwdErr;
					}
			   }
			   else
			   {
				$str="INSERT INTO public.audit_trail(username, http_referer, url, ip_address, date_time, status)VALUES ('".$user_email."', '".$http_referer."', '".$actual_link."', '".$ip_address."', '".$date."', 'Fail')";
								 $execQuery_in=pg_query($connection,$str);								
								 $wrongPwdErr ='<div class="alert alert-danger"> Password is incorrect </div>';
							echo $wrongPwdErr;
			   }
			   }
			 }
			 }
			 else
			 {
			 $captchaErr ='<div class="alert alert-danger"> Entered Captcha is incorrect                              
                            </div>';
							echo $captchaErr;
			 }
			
	?>
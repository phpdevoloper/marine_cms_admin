<?php
  include('config/db.php');

    global $wrongPwdErr, $accountNotExistErr, $emailPwdErr, $verificationRequiredErr, $email_empty_err, $pass_empty_err;

    if(isset($_POST['btnlogin']))
	{
	
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

        /*if(!empty($email_signin) && !empty($password_signin))
		{*/
		$sermd5=md5($_SESSION["rand"].$row["md5password"]);
		echo $sermd5;
		echo "pp".$_POST['pswd'];
		 if(isset($_SERVER['HTTP_REFERER'])){
                        $http_referer= $_SERVER['HTTP_REFERER'];
                         }
                    $ip_address= getRealIpAddr();
                   
                    $date=date("Y-m-d");
		if($sermd5==$_POST['pswd'])
		{	
            
            // Check if email exist
            if($rowCount <= 0) 
			{
                $accountNotExistErr = '<div class="alert alert-danger">
                        User account does not exist.
                    </div>';
            } 
			else 
			{
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
                if($is_active == 'A') 
				{
                    //if($email_signin == $email && $password_signin == $pass_word)
					//{
                      
                       
                       $_SESSION['id'] = $id;
                       $_SESSION['firstname'] = $firstname;
                       $_SESSION['lastname'] = $lastname;
                       $_SESSION['email'] = $email;
						

                    $str="INSERT INTO public.audit_trail(username, http_referer, url, ip_address, date_time, status)VALUES ('$email', '$http_referer', '$actual_link', '$ip_address', '$date', 'Success')";
                       

                         $execQuery_in=pg_query($connection,$str);
					//header("Location: ./cms_dashboard.php");
                   // } 
					/*else 
					{
                        $emailPwdErr = '<div class="alert alert-danger">
                                Either email or password is incorrect.
                            </div>';
							$msg="Failure";
                    }*/
                } 
				else 
				{
                    $verificationRequiredErr = '<div class="alert alert-danger">
                            Account verification is required for login.
                        </div>';
                }

            }
			
			
			}
			else
			{
			$verificationRequiredErr = '<div class="alert alert-danger">
                            Account verification is required for login.
                        </div>';
						$str="INSERT INTO public.audit_trail(username, http_referer, url, ip_address, date_time, status)VALUES ('$email', '$http_referer', '$actual_link', '$ip_address', '$date', 'Failure')";
                            // var_dump($str);exit;die();return false;
               
                            $execQuery_in=pg_query($connection,$str);
                            
			}
        }
		/*else
		{
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
	*/
	else
	{
	
	 $captchaErr ='<div class="alert alert-danger"> Entered Captcha is incorrect                              
                            </div>';
	}
	}
	
?>
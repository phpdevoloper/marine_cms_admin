<?php 
    //$str = htmlentities($str);

    function chkradio1 ($str)
	{
	if(isset($str) and !empty($str))
	{
	return 1;
	}
	return 2;
	}
	

	function chkemp ($str)
	{
		
		if (is_null($str) || trim($str)=="")
		{
			return 2;
		}
		return 1;
	}
	
	function chklen1 ($str)
	{
	  if(strlen($str) > 1)
	  {
	  return 2;
	  }
	  return 1;
	}
	
	function chklen2 ($str)
	{
	  if(strlen($str) > 2)
	  {
	  return 2;
	  }
	  return 1;
	}

	function chklen3 ($str)
	{
	  if(strlen($str) > 3)
	  {
	  return 2;
	  }
	  return 1;
	}
	
	function chklen4 ($str)
	{
	  if(strlen($str) > 4)
	  {
	  return 2;
	  }
	  return 1;
	}
	
	function chklen5 ($str)
	{
	  if(strlen($str) > 5)
	  {
	  return 2;
	  }
	  return 1;
	}
	
	function chkfile($str_file)
	{
	
	if($str_file != "")
	{
	 $filename = $str_file;
	 $fpath = pathinfo($filename);
	 $fext = $fpath['extension'];
     if ($fext != "gif" && $fext != "jpg" && $fext != "jpeg" && $fext != "png" &&
	 	$fext != "GIF" && $fext != "JPG"  && $fext != "JPEG" &&  $fext != "PNG") 
     {
	  return 2;
     }
      return 1;
	  
	 }
	} 
	
	function chksize($str_size)
	{
	if($str_size != "" || $str_size == "0")
	{
	if ($str_size > "2097152" || $str_size == "0") 
     {
	  return 2;
     }
      return 1;
	
	}
	}
	
	function chkint ($str)
	{
		
		$goodchar = " 1234567890";
		
		for ($i=0;$i<strlen($str);$i++)
		{
			if (strpos($goodchar,$str[$i]) == false)
			{
				return 2;
			}
		}
		return 1;
		
	}
	
	function chktelph ($str)
	{
		
		$goodchar = " 1234567890.-+";
		
		for ($i=0;$i<strlen($str);$i++)
		{
			if (strpos($goodchar,$str[$i]) == false)
			{
				return 2;
			}
		}
		return 1;
		
	}
	
	function chktelephone ($str)
	{
		
		if ($str[0] != '+')
		{
			return 2;
		}
		
		if ((strpos($str,'-') == false) || (strpos($str,'-') <= 1))
		{
			return 2;
		}
		
		if (is_nan(substr($str, 1, (strpos($str,'.') - 1))) || strlen(substr($str, 1, (strpos($str,'-') - 1))) > 3)
		{
			return 2;
		}
		
		if (is_nan(substr($str, (strpos($str,'-') + 1), ((strlen($str) - 1) - strpos($str,'-')))) || strlen(substr($str, (strpos($str,'-') + 1), ((strlen($str) - 1) - strpos($str,'-')))) > 14 || strlen(substr($str, (strpos($str,'-') + 1), ((strlen($str) - 1) - strpos($str,'-')))) < 1)
		{
			return 2;
		}
		return 1;
		
	}
	
	function chkchar ($str)
	{
		
		$goodchar = " abcdefghijklmnopqrstuvwxyz";
		
		for ($i=0;$i<strlen($str);$i++)
		{
			if (!($str[$i] == " "))
			{
				if (strpos($goodchar,strtolower($str[$i])) == false)
				{
					return 2;
				}
			}
		}
		return 1;
		
	}
	
	function chkchar_fname ($str)
	{
		
		$goodchar = " abcdefghijklmnopqrstuvwxyz.";
		
		for ($i=0;$i<strlen($str);$i++)
		{
			if (!($str[$i] == " "))
			{
				if (strpos($goodchar,strtolower($str[$i])) == false)
				{
					return 2;
				}
			}
		}
		return 1;
		
	}
	
	function chkchar_pio ($str)
	{
		
		$goodchar = " abcdefghijklmnopqrstuvwxyz-";
		
		for ($i=0;$i<strlen($str);$i++)
		{
			if (!($str[$i] == " "))
			{
				if (strpos($goodchar,strtolower($str[$i])) == false)
				{
					return 2;
				}
			}
		}
		return 1;
		
	}
	
	function chkcharpincode ($str)
	{
		
		$goodchar = " 0123456789";
		
		for ($i=0;$i<strlen($str);$i++)
		{
			if (!($str[$i] == " "))
			{
				if (strpos($goodchar,strtolower($str[$i])) == false)
				{
					return 2;
				}
			}
		}
		return 1;
		
	}
	
	function chkchar_cmpappl ($str)
	{
		
		$goodchar = " abcdefghijklmnopqrstuvwxyz0123456789/";
		
		for ($i=0;$i<strlen($str);$i++)
		{
			if (!($str[$i] == " "))
			{
				if (strpos($goodchar,strtolower($str[$i])) == false)
				{
					return 2;
				}
			}
		}
		return 1;
		
	}

	
	function chkalphanum_title ($str)
	{
		
		$goodchar = " abcdefghijklmnopqrstuvwxyz0123456789.()/\-";
		
		for ($i=0;$i<strlen($str);$i++)
		{
			if (!($str[$i] == " "))
			{
				if (strpos($goodchar,strtolower($str[$i])) == false)
				{
					return 2;
				}
			}
		}
		return 1;
		
	}
	function chkalphanum ($str)
	{
		
		$goodchar = " abcdefghijklmnopqrstuvwxyz0123456789.";
		
		for ($i=0;$i<strlen($str);$i++)
		{
			if (!($str[$i] == " "))
			{
				if (strpos($goodchar,strtolower($str[$i])) == false)
				{
					return 2;
				}
			}
		}
		return 1;
		
	}
	
	function chksplcharald ($str)
	{
		
		$goodchar = " abcdefghijklmnopqrstuvwxyz0123456789-+=_.?@$%/\&*,;:'#�(){}[]`~!^|\t\r\n";
		
		
		for ($i=0;$i<strlen($str);$i++)
		{
			if (!($str[$i] == " "))
			{
				if (strpos($goodchar,strtolower($str[$i])) == false)
				{
					return 2;
				}
			}
		}
		return 1;
		
	}

	function chkpasswd1($str)
{
		$goodchar = " abcdefghijklmnopqrstuvwxyz0123456789 ";
		
		for ($i=0;$i<strlen($str);$i++)
		{
			if (!($str[$i] == " "))
			{
				if (strpos($goodchar,strtolower($str[$i])) == false)
				{
					return 2;
				}
			}
		}
		return 1;
}		
	function chkspldblcharald ($str)
	{
		//$dblCodes='"����:';
		$dblCodes='"';
		$goodchar = " abcdefghijklmnopqrstuvwxyz0123456789-+=_.?@$%/\&*,;:'#�(){}[]`~!^|\t\r\n".$dblCodes;
		
		
		for ($i=0;$i<strlen($str);$i++)
		{
			if (!($str[$i] == " "))
			{
				if (strpos($goodchar,strtolower($str[$i])) == false)
				{
					return 2;
				}
			}
		}
		return 1;
		
	}
	
	
	function file_upload_error_message($error_code) {
	
		switch ($error_code) {
			case 1:
				return 'The uploaded file exceeds the upload_max_filesize directive in php.ini';
			case 2:
				return 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form';
			case 3:
				return 'The uploaded file was only partially uploaded';
			case 4:
				return 'No file was uploaded';
			case 5:
				return 'Missing a temporary folder';
			case 6:
				return 'Failed to write file to disk';
			case 7:
				return 'File upload stopped by extension';
			default:
				return 'Unknown upload error';
		}
} 
	
	function chkUserNameAdmin ($str)
	{
		
		$goodchar = " abcdefghijklmnopqrstuvwxyz0123456789_.@$%/*#";
		
		
		for ($i=0;$i<strlen($str);$i++)
		{
			if (!($str[$i] == " "))
			{
				if (strpos($goodchar,strtolower($str[$i])) == false)
				{
					return 2;
				}
			}
		}
		return 1;
		
	}
	
	function chksplcharaldlimit ($str)
	{
		
		//$goodchar = " abcdefghijklmnopqrstuvwxyz0123456789-+=_.?@$%/\&*,;:'(){}[]`~!^|\t\r\n";
		$goodchar = " abcdefghijklmnopqrstuvwxyz0123456789/";
		
		for ($i=0;$i<strlen($str);$i++)
		{
			if (!($str[$i] == " "))
			{
				if (strpos($goodchar,strtolower($str[$i])) == false)
				{
					return 2;
				}
			}
		}
		return 1;
		

	}
	
	function chkmail ($str)
	{
		
		if (is_null($str) || trim($str)=="")
		{
			return 2;
		}
		
		if ((strpos($str,'@') == false) || (strpos($str,'.') == false))
		{
			return 2;
		}
		
		if ((strpos($str,'..') !== false) || (strpos($str,'.@') !== false) || (strpos($str,'@.') !== false))
		{
			return 2;
		}
		
		if ((strpos($str,'.') == 0) || (strpos($str,'@') == 0) || (strpos($str,'.',(strlen($str)-1)) == (strlen($str)-1)) || (strpos($str,'@',(strlen($str)-1)) == (strlen($str)-1)))
		{
			return 2;
		}
		
		return 1;
		
	}
	
	function chkbadchar ($str)
	{
		
		$badch = array('SELECT ','DROP ','--','INSERT ','DELETE ','<','>','#');		
		
		
		if (!(is_null($str)) || trim($str)!="")
		{
			for ($i=0;$i<count($badch);$i++)
			{
				if (strpos(strtoupper($str),$badch[$i]) !== false)
				{
					
					return 2;
				}
			}
		}
		return 1;
		
	}
	
	function chkbadcharEditor ($str)
	{
		
		$badch = array('SELECT ','DROP ','INSERT ','DELETE ','SCRIPT');		
		
		
		if (!(is_null($str)) || trim($str)!="")
		{
			for ($i=0;$i<count($badch);$i++)
			{
				if (strpos(strtoupper($str),$badch[$i]) !== false)
				{
					echo $badch[$i]."coming";
					return 2;
				}
			}
		}
		return 1;
		
	}
	
	function chkuserid($str)
	{
		$alphabets="abcdefghijklmnopqrstuvwxyz0123456789@_.-";
	
		if(strlen($str) < 6 || strlen($str) > 20)
		{
		  // echo"Not a Valid User ID. UserID must contain 6 to 20 characters. Please Re-Enter";
		   return 2;
		}
		/*for($i=0;$i< strlen($str);$i++)
		{	
			 //if (!($str[$i] == " "))
			//{
				if (strpos($alphabets,strtolower($str[$i])) == false)
				{
					return 2;
				}
			//}
		 
	}*/
	return 1;
}

function chkpasswd($str)
{
	if(strlen($str) < 6 || strlen($str) > 10)
		{
		  // echo"Not a Valid User ID. UserID must contain 6 to 20 characters. Please Re-Enter";
		   return 2;
		}
	/*$alphabets="abcdefghijklmnopqrstuvwxyz0123456789-+_.?@$%/\&*,;:'(){}[]`~!^| ";
	
	    for($i=0;$i< strlen($str);$i++)
		{	
			 if (!($str[$i] == " "))
			{
				if (strpos($alphabets,strtolower($str[$i])) == false)
				{
					return 2;
				}
			}
			
		}*/
	return 1;
}
		
function chkverifycode($str)
{
    $alphabets="abcdefghijklmnopqrstuvwxyz0123456789";
	if(strlen($str) < 6)
    { 
 //alert ("Not a Valid Verification Code. Please enter the code shown in the image");
      return 2;
     }

	/* for($i=0;$i< strlen($str);$i++)
	 {	
			 if (!($str[$i] == " "))
			{
				if (strpos($alphabets,strtolower($str[$i])) == false)
				{
					return 2;
				}
			}
			
		}*/
	return 1;
}

//registration number
function chkregnnum($str)
{
	$alphabets="abcdefghijklmnopqrstuvwxyz0123456789-+_.@$%/\&*,;:'() ";
    for($i=0;$i< strlen($str);$i++)
		{	
			 if (!($str[$i] == " "))
			{
				if (strpos($alphabets,strtolower($str[$i])) == false)
				{
					return 2;
				}
			}
			
		}
	return 1;
}

//email 

function isValidEmailFormat($email)
{
   if(!preg_matchi("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email)) 
        return 2;
   else
  		return 1;
}


// url
function  url($str)
{
 //  /(http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/
   
    //if (!preg_match("#^http://.[a-z0-9-_.]+\.[a-z]{2,4}$#i",$str))
	// 
	
	   //if(!preg_match("http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?",$str))
	  //if (!preg_match("#^http://.[a-z0-9-_.]+\.[a-z]$#i",$str))
	  
	    if (!preg_match("/%^(?:(?:https?|ftp)://)(?:\S+(?::\S*)?@|\d{1,3}(?:\.\d{1,3}){3}|(?:(?:[a-z\d\x{00a1}-\x{ffff}]+-?)*[a-z\d\x{00a1}-\x{ffff}]+)(?:\.(?:[a-z\d\x{00a1}-\x{ffff}]+-?)*[a-z\d\x{00a1}-\x{ffff}]+)*(?:\.[a-z\x{00a1}-\x{ffff}]{2,6}))(?::\d+)?(?:[^\s]*)?$%iu/",$str))
	 {
	   return 2 ;
	   } 
	   else
	    { 
		 return 1 ;
		 }
}		
// std

/*function chkphoneNumber($str) 
{
   $alphabets="0123456789";
   if(strlen($str) < 5 || strlen($str) > 8)
   {
	     return 2;
   }
   
  for($i=0;$i< strlen($str);$i++)
  {	
			if (!($str[$i] == " "))
			{
				if (strpos($alphabets,$str[$i]) == false)
				{
				  
					return 2;
				}
			}
			
		}
	
	
	 return 1;
}*/

function is_number($number)
{ 
    $text = (string)$number;
    $textlen = strlen($text);
    if ($textlen==0)
	 return 0;
    for ($i=0;$i < $textlen;$i++)
    { $ch = ord($text[$i]);
       if (($ch<48) || ($ch>57)) return 0;
    }
    return 2;
}

function chkphoneNumber ($str)
{
  if(strlen($str) < 5 || strlen($str) > 8)
  {
	    	 return 2;
  }
  $vb = is_number($str);
  if($vb == 0)
  {
     return 2;
  }
  
  
  	return 1;
}


//std code

function chkstdcode($str) 
{
   $alphabets="1234567890";
   if(strlen($str) < 3 || strlen($str) > 5)
   {
	     return 2;
   }
	/* for($i=0;$i< strlen($str);$i++)
  	 {	
			//if (!($str[$i] == " "))
			//{
				if (strpos($alphabets,$str[$i]) == false)
				{
				  
					return 2;
				}
			//}
			
		}*/
 $vb = is_number($str);
  if($vb == 0)
  {
     return 2;
  }
	 return 1;
}


function chkmobilephoneNumber($str) 
{
$alphabets="1234567890";

 if(strlen($str) < 10 || strlen($str) > 11)
 {
	     return 2;
 }

	/* for($i=0;$i< strlen($str);$i++)
  	 {	
			
				if (strpos($alphabets,$str[$i]) == false)
				{
				  
					return 2;
				}
			
			
		}*/
		
  $vb = is_number($str);
  if($vb == 0)
  {
     return 2;
  }
	
	return 1;
}

//validation for date format	
/*function isValidDateFormat($date) 
{
  if (preg_match ("([0-9]{4})-([0-9]{1,2})-([0-9]{1,2})", $date)) 
  {
	return 1;
} else {
return 2;
}
}*/


function  check($strdate)
{
	// echo $strdate;
	$date=date_create($strdate);
	$new_date= date_format($date,"d-m-Y");
	// echo $new_date;
//$strdate="99-44-2008";

//Check the length of the entered Date value 
if((strlen($new_date)<10)OR(strlen($new_date)>10))
{
	//echo("Enter the date in 'dd//mm/yyyy' format");
	return 2;
}
else
{
   substr_count($new_date,"-");
//The entered value is checked for proper Date format 
	if((substr_count($new_date,"-"))<>2)
	{
		//echo("Enter the date in 'dd/mm/yyyy' format");
		return 2;
	}
	else
	{
		 $pos=strpos($new_date,"-");
		 $date=substr($new_date,0,($pos));
		 $result=preg_match("/^[0-9]+$/",$date,$trashed);
		 if(!($result))
		 {
		   //echo "Enter a Valid Date";
		   return 2;
		}
		else
		{
		  if(($date<=0)OR($date>31))
		  {
		     //echo "Enter a Valid Date";
			 return 2;
		  }
	    }
		$month=substr($new_date,($pos+1),($pos));
		if(($month<=0)OR($month>12))
		{
			//echo "Enter a Valid Month";
			return 2;
		}
		else
		{
			$result=preg_match("/^[0-9]+$/",$month,$trashed);
			if(!($result))
			{
			//echo "Enter a Valid Month";
			return 2;
			}
		}
		$year=substr($new_date,($pos+4),strlen($new_date));
		$result=preg_match("/^[0-9]+$/",$year,$trashed);
		if(!($result))
		{
		//echo "Enter a Valid year";
		return 2;
		}
		
		else
		{
			if(($year<1900)OR($year>2200))
			{

				//echo "Enter a year between 1900-2200";
				return 2;
			}
		}
		// check for leap year if the month and day is Feb 29
	if (($month == 2) && ($date == 29)) 
	{
		 $div4 = $year % 4;
		 $div100 = $year % 100;
		 $div400 = $year % 400;
		
		// if not divisible by 4, then not a leap year so Feb 29 is invalid
		if ($div4 != 0) 
		{
			//alert ("Enter a valid date in DD-MM-YYYY format, Invalid Date"); 
			return 2; 
		}
		
		// at this point, year is divisible by 4. So if year is divisible by
		// 100 and not 400, then it's not a leap year so Feb 29 is invalid
		if (($div100 == 0) && ($div400 != 0)) 
		{
		//	alert ("Enter a valid date in DD-MM-YYYY format, Invalid Date"); 
			return 2; 
		}
	}
	}
   return 1;
}
  // DisplayForm();

}

//User-defined Function to display the form in case of Error
function DisplayForm()
{
global $strdate;

}

//new function for enews aug 18 ,
//checking field name allowed character 

function chktablename ($str)
	{
		
		$goodchar = " abcdefghijklmnopqrstuvwxyz0123456789_";
		
		for ($i=0;$i<strlen($str);$i++)
		{
			if (!($str[$i] == " "))
			{
				if (strpos($goodchar,strtolower($str[$i])) == false)
				{
					return 2;
				}
			}
		}
		return 1;
		
	}
function chkuserid1($str)
{
		$goodchar = " abcdefghijklmnopqrstuvwxyz0123456789 ";
		
		for ($i=0;$i<strlen($str);$i++)
		{
			if (!($str[$i] == " "))
			{
				if (strpos($goodchar,strtolower($str[$i])) == false)
				{
					return 2;
				}
			}
		}
		return 1;
}	

function category_len($str)
{
	if(strlen($str) < 5 || strlen($str) > 30)
		{
		 
		   return 2;
		}
	
	return 1;
}

function multipleemail($email)
{

  
  $MULTI_EMAIL_CHECK = explode(',', $email);
  

  foreach($MULTI_EMAIL_CHECK as $value){
 
		if(isValidEmailFormat($value) == 2 ){
		return 2;
		}
		
		

  } 
}
function destroySession() {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
    session_destroy();
}
function get_Captcha()
{
session_start();	
$ranStr = md5(microtime());
$ranStr = substr($ranStr, 0, 6);
$_SESSION['cap_code'] = $ranStr;
$newImage = imagecreatefromjpeg("../cap_bg.jpg");
$txtColor = imagecolorallocate($newImage, 44, 77, 55);
imagestring($newImage, 5, 5, 5, $ranStr, $txtColor);
header("Content-type: image/jpeg");
return imagejpeg($newImage);
}
?>
<?php

function fileupload($fileup,$filetemp,$filesize)
{
 $target_dir = "upload/";
 $file = $fileup;
 $path = pathinfo($file);
 $filename = $path['filename'];
 $ext = $path['extension'];
 $temp_name = $filetemp;
 $path_filename_ext = $target_dir.$filename.".".$ext;
 $file_size =$filesize;

 	$sfile_exte  = explode('.',$fileup);
	$sfile_ext   = strtolower(end($sfile_exte));

	// $sfile_ext=strtolower(end(explode('.',$fileup)));
	$extensions= array("pdf","png");

	if(in_array($sfile_ext,$extensions)=== false){
		$msg1="extension not allowed, please choose a JPEG or PNG file.";
	}


	if($file_size > 2097152){
		$msg1='File size must be excately 2 MB';
	}
	if (file_exists($path_filename_ext)) {
	$msg="";
	}else{
	move_uploaded_file($filetemp,$path_filename_ext);
	}

}
?>
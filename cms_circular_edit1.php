<?php
//   var_dump($_POST);die();exit;
 include('config/db.php');
 include('include/checkval.php');
 $title=$_POST["Title1"];
 $id=$_POST["id0"];
 $type=$_POST["Type2"];
 $category=$_POST["category3"];
 $validupto=$_POST["Validupto5"];
 /*$str="update circular_mst set title='".$title."',type='".$type."' where cir_id=".$id; 
$execQuery_in=pg_query($connection,$str);
header("Location: cms_circulars.php"); */


if (($_FILES['txtupload_edit']['name']!="")){
// Where the file is going to be stored

 $target_dir = "upload/";
 $file = $_FILES['txtupload_edit']['name'];
 $path = pathinfo($file);
 $filename = $path['filename'];
 $ext = $path['extension'];
 $temp_name = $_FILES['txtupload_edit']['tmp_name'];
 $path_filename_ext = $target_dir.$filename.".".$ext;
 $sfile_size =$_FILES['txtupload_edit']['size'];
	$sfile_ext=strtolower(end(explode('.',$_FILES['txtupload_edit']['name'])));
					  $extensions= array("pdf","png");
					 
					  if(in_array($sfile_ext,$extensions)=== false){
						 $msg1="extension not allowed, please choose a JPEG or PNG file.";
					  }
					  echo $sfile_size;
					  
					  if($sfile_size > 2097152){
						 $msg1='File size must be excately 2 MB';
					  }
					echo $msg1;
// Check if file already exists

if (file_exists($path_filename_ext)) {
 $msg="";
 }else{



	$title=$_POST["Title1"];
	$id=$_POST["id0"];
	$type=$_POST["Type2"];
	$category=$_POST["category3"];
	$reldate=$_POST["Release_Date4"];
	$validupto=$_POST["Validupto5"];
	
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
 
		 
		
 $str="update circular_mst set title='".$title."',type='".$type."',category='".$category."',dt_upto='".$validupto."',doc_path='".$path_filename_ext."',doc_size='".$sfile_size."' where cir_id=".$id; 
 var_dump($str);exit;return false;
$execQuery_in=pg_query($connection,$str);
					}
        }
}
else
{
$msg="";
}
	header("Location: cms_circulars.php"); 
					?>
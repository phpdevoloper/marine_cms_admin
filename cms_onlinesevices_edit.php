<?php
//   var_dump($_POST);die();exit;
 include('config/db.php');
 include('include/checkval.php');
 $id=$_POST["id0"];
 $category=$_POST["Category1"];
 $title=$_POST["Title2"];
 $doc_type=$_POST["Document_Type3"];
 $url=$_POST["url4"];
//  $validupto=$_POST["Validupto5"];
 /*$str="update circular_mst set title='".$title."',type='".$type."' where cir_id=".$id; 
$execQuery_in=pg_query($connection,$str);
header("Location: cms_circulars.php"); */


if($doc_type=='file'){

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



 $id=$_POST["id0"];
 $category=$_POST["Category1"];
 $title=$_POST["Title2"];
 $doc_type=$_POST["Document_Type3"];
 $url=$_POST["url4"];
	

if(chkalphanum_title($title) == '2')
$msg.="Check Title";
if( chklen1($category)=='2')
$msg.="Check Category";
if(chklen4($doc_type)=='2')
$msg.="Check Document";
if(url($url)=='2')
$msg.="Check Url";

		if((chkalphanum_title($title) != '2') && (chklen1($category) != '2') && (chklen4($doc_type) != '2') && (url($url) != '2'))
		{
 move_uploaded_file($temp_name,$path_filename_ext);
 
		 
		
 $str="update onlineservices_mst set title='".$title."',doc_type='".$doc_type."',category='".$category."',url_txt='".$url."',doc_path='".$path_filename_ext."',doc_size='".$sfile_size."' where oserv_id=".$id; 
//  var_dump($str);exit;return false;
$execQuery_in=pg_query($connection,$str);
					}
					// else{

					// 	echo "some thing went weong"; 
						
					// 	var_dump(chkalphanum_title($title));
					// 	var_dump(chklen1($category));
					// 	var_dump(chklen4($doc_type));
					// 	var_dump(url($url_txt));
					// 	exit;return false;
					// }
        }
}
else
{
$msg="";
}
}else{
 $id=$_POST["id0"];
 $category=$_POST["Category1"];
 $title=$_POST["Title2"];
 $doc_type=$_POST["Document_Type3"];
 $url=$_POST["url4"];
	

if(chkalphanum_title($title) == '2')
$msg.="Check Title";
if( chklen1($category)=='2')
$msg.="Check Category";
if(chklen4($doc_type)=='2')
$msg.="Check Document";
if(url($url)=='2')
$msg.="Check Url";

		if((chkalphanum_title($title) != '2') && (chklen1($category) != '2') && (chklen4($doc_type) != '2') && (url($url) != '2'))
		{
 
		 
		
 $str="update onlineservices_mst set title='".$title."',doc_type='".$doc_type."',category='".$category."',url_txt='".$url."' where oserv_id=".$id; 
//  var_dump($str);exit;return false;
$execQuery_in=pg_query($connection,$str);
		}
}
	header("Location: cms_onlineservices.php"); 
					?>
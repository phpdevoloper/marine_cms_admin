<?php
include ('config/db.php');
include ('include/fileup.php');
include ('include/checkval.php');
// var_dump($_FILES,$_POST);
// exit;die();
if(!empty($_POST["submit"]))
{
 $doc_type=$_POST['txtdoc'];
	if($doc_type == 'file'){
	
	if($_FILES['txtupload']['name']!="")
		{
		fileupload($_FILES['txtupload']['name'],$_FILES['txtupload']['tmp_name'],$_FILES['txtupload']['size']);
		$title =$_POST['title'];
		$type = $_POST['type'];
		$doc_type=$_POST['txtdoc'];
		$submitted_dt = $_POST['submitted_dt'];		 
		$path_filename_ext = $_FILES['txtupload']['name'];
		$sfile_size=$_FILES['txtupload']['size'];
		$id=$_POST['txt_userid_edit'];
		$url_txt=$_POST['txturl'];
		if(chkalphanum_title($title) == '2')
		$msg.="Check Title";
		if(chklen1($type) == '2')
		$msg.="Check Type";
		if(chklen4($doc_type)=='2')
        $msg.="Check Document";

		if((chkalphanum_title($title) != '2') && (chklen1($type) != '2') &&  (chklen4($doc_type)!='2') )
		{
		  $str="update acts_mst set title='".$title."',type='".$type."',doc_type='".$doc_type."',doc_path='".$path_filename_ext."',doc_size='".$sfile_size."' where act_id=".$id; 
          pg_query($connection,$str);			
		  header("Location: cms_acts.php?C=S");
          exit;
		}
		else
		{
			header("Location: cms_acts.php?C=F");
			
		}
        }
	}
	else if($doc_type == 'url'){
		$title =$_POST['title'];
		$type = $_POST['type'];
		$doc_type=$_POST['txtdoc'];
		$submitted_dt = $_POST['submitted_dt'];		 
		$path_filename_ext = $_FILES['txtupload']['name'];
		$sfile_size=$_FILES['txtupload']['size'];
		$id=$_POST['txt_userid_edit'];
		$url_txt=$_POST['txturl'];
        if(chkalphanum_title($title) == '2')
		$msg.="Check Title";
		if(chklen1($type) == '2')
		$msg.="Check Type";
		if(chklen4($doc_type)=='2')
        $msg.="Check Document";
		if((chkalphanum_title($title) != '2') && (chklen1($type) != '2') &&  (chklen4($doc_type)!='2') )
		{
		  $str="update acts_mst set title='".$title."',type='".$type."',doc_type='".$doc_type."',url_txt='".$url_txt."' where act_id=".$id; 
		//   var_dump($str);exit;die();
          pg_query($connection,$str);			
		  header("Location: cms_acts.php?C=S");
          exit;
		}
		else
		{
			header("Location: cms_acts.php?C=F");
			
		}




	}
	}
else if(!empty($_POST["addSubmit"]))
{
	$doc_type=$_POST['txtdoc'];
	// var_dump($_FILES['txtupload_add']['name']);exit;
	if($doc_type == 'file'){
		// echo 'BYEE';exit;

	if($_FILES['txtupload_add']['name']!="")
		{
		fileupload($_FILES['txtupload_add']['name'],$_FILES['txtupload_add']['tmp_name'],$_FILES['txtupload_add']['size']);
		$title =$_POST['title_add'];
		$type = $_POST['type_add'];
		$doc_type=$_POST['txtdoc'];
		$submitted_dt = $_POST['submitted_dt'];		 
		$path_filename_ext = $_FILES['txtupload_add']['name'];
		$sfile_size=$_FILES['txtupload_add']['size'];
		$id=$_POST['txt_userid_edit'];
		$url_txt=$_POST['txturl'];
    if(chkalphanum_title($title) == '2')
		$msg.="Check Title";
		if(chklen1($type) == '2')
		$msg.="Check Type";
		if(chklen4($doc_type)=='2')
        $msg.="Check Document";
		// echo 'BYEE';exit;
		// var_dump(chkalphanum_title($title));
		// var_dump(chklen1($type));
		// var_dump(chklen4($doc_type));
		// exit;die();
		if((chkalphanum_title($title) != '2') && (chklen1($type) != '2') &&  (chklen4($doc_type)!='2') )
		{
			 $str="insert into acts_mst (type, title, doc_type, doc_path, submittedby, doc_size) values('".$type."','".$title."','".$doc_type."','".$path_filename_ext."','rama.a@nic.in','".$sfile_size."')";
			// var_dump($str);exit;die();
          pg_query($connection,$str);			
		 header("Location: cms_acts.php?C=S");
          exit;
		}
		else
		{
			header("Location: cms_acts.php?C=F");
			
		}
	}
}
	else if($doc_type == 'url'){
		$title =$_POST['title_add'];
		$type = $_POST['type_add'];
		$doc_type=$_POST['txtdoc'];
		$submitted_dt = $_POST['submitted_dt'];		 
		$path_filename_ext = $_FILES['txtupload_add']['name'];
		$sfile_size=$_FILES['txtupload_add']['size'];
		$id=$_POST['txt_userid_edit'];
		$url_txt=$_POST['txturl'];
        if(chkalphanum_title($title) == '2')
		$msg.="Check Title";
		if(chklen1($type) == '2')
		$msg.="Check Type";
		if(chklen4($doc_type)=='2')
        $msg.="Check Document";
		if((chkalphanum_title($title) != '2') && (chklen1($type) != '2') &&  (chklen4($doc_type)!='2') )
		{
			$str="insert into acts_mst (type, title, doc_type, url_txt,submittedby) values('".$type."','".$title."','".$doc_type."','".$url_txt."','rama.a@nic.in')";
			// var_dump($str);exit;die();
			pg_query($connection,$str);			
		  header("Location: cms_acts.php?C=S");
          exit;
		}
		else
		{
			header("Location: cms_acts.php?C=F");
			
		}




	}
}	
		?>
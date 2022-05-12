<?php
include ('config/db.php');
include ('include/fileup.php');
include ('include/checkval.php');
if(!empty($_POST["submit"]))
{
 $doc_type=$_POST['txtdoc'];
	if($doc_type == 'file'){
	echo "sdafsad";
	if($_FILES['txtupload']['name']!="")
		{
		echo "sdfsd";
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
		echo   $str="update news_mst set title='".$title."',type='".$type."',doc_type='".$doc_type."',doc_path='".$path_filename_ext."',doc_size='".$sfile_size."' where news_id=".$id; 
          pg_query($connection,$str);			
		//   header("Location: cms_news.php?C=S");
        //   exit;
		}
		// else
		// {
		// 	header("Location: cms_news.php?C=F");
			
		// }
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
 		var_dump($_POST);
		if((chkalphanum_title($title) != '2') && (chklen1($type) != '2') &&  (chklen4($doc_type)!='2') )
		{
		echo  $str="update news_mst set title='".$title."',type='".$type."',doc_type='".$doc_type."',url_txt='".$url_txt."' where news_id=".$id; 
		//   var_dump($str);exit;die();
          pg_query($connection,$str);			
		  header("Location: cms_news.php?C=S");
          exit;
		}
		// else
		// {
		// 	header("Location: cms_news.php?C=F");
			
		// }




	}
	}
else if(!empty($_POST["addSubmit"]))
{
	// var_dump($_FILES['txtupload_add']['name'],$_FILES['txtupload_add']['tmp_name'],
	// $_FILES['txtupload_add']['size']);exit;

	$doc_type=$_POST['txtdoc'];
	if($doc_type == 'file'){
		if($_FILES['txtupload_add']['name']!="")
			{
			fileupload($_FILES['txtupload_add']['name'],$_FILES['txtupload_add']['tmp_name'],$_FILES['txtupload_add']['size']);
			// fileupload($_FILES['txtupload_add']['name'],$_FILES['txtupload_add']['tmp_name'],$_FILES['txtupload_add']['size']);
			$title =$_POST['title_add'];
			$type = $_POST['type_add'];
			$doc_type=$_POST['txtdoc'];
			// $submitted_dt = $_POST['submitted_dt'];		 
			$path_filename_ext = $_FILES['txtupload_add']['name'];
			$sfile_size  	=$_FILES['txtupload_add']['size'];
			$url_txt=$_POST['txturl'];
			if(chkalphanum_title($title) == '2')
			$msg.="Check Title";
			if(chklen1($type) == '2')
			$msg.="Check Type";
			if(chklen4($doc_type)=='2')
			$msg.="Check Document";
			// var_dump(chkalphanum_title($title));
			// var_dump(chklen1($type));
			// var_dump(chklen4($doc_type));
			if((chkalphanum_title($title) != '2') && (chklen1($type) != '2') &&  (chklen4($doc_type)!='2') )
			{
				echo $str="insert into news_mst (category, title, doc_type, doc_path, doc_size, submittedby) values('".$type."','".$title."','".$doc_type."','".$path_filename_ext."','".$sfile_size."','rama.a@nic.in')";
				// die();
			  pg_query($connection,$str);			
			  header("Location: cms_news.php?C=S");
			  exit;
			}
			// else
			// {
			// 	header("Location: cms_news.php?C=F");
				
			// }
		}
	}
	elseif($doc_type == 'url'){
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
// echo 'HIIIIIII';exit;
		if((chkalphanum_title($title) != '2') && (chklen1($type) != '2') &&  (chklen4($doc_type)!='2') )
		{
			echo $str="insert into news_mst (type, title, doc_type, url_txt,submittedby) values('".$type."','".$title."','".$doc_type."','".$url_txt."','rama.a@nic.in')";
			// var_dump($str);exit;die();
			pg_query($connection,$str);			
		  header("Location: cms_news.php?C=S");
          exit;
		}
		else
		{
			header("Location: cms_news.php?C=F");
			
		}




	}
}	
		?>
<?php
include ('config/db.php');
include ('include/fileup.php');
include ('include/checkval.php');
if(!empty($_POST["submit"]))
{
 
	
	if($_FILES['txtupload']['name']!="")
		{
		fileupload($_FILES['txtupload']['name'],$_FILES['txtupload']['tmp_name'],$_FILES['txtupload']['size']);
		$title =$_POST['title'];
        $type = $_POST['type'];
        $category = $_POST['category'];        
		 $validupto = $_POST['validupto'];
		 $release_dt = $_POST['release_dt'];		 
		  $path_filename_ext = $_FILES['txtupload']['name'];
		  $sfile_size=$_FILES['txtupload']['size'];
		  $id=$_POST['txt_userid_edit'];
          if(chkalphanum_title($title) == '2')
		  $msg.="Check Title";
		 if(chklen1($type) == '2')
		   $msg.="Check Type";
		 if( chklen3($category)=='2')
			$msg.="Check Category";
		if(check($release_dt) == '2')
		  $msg.="Check release Date";
		 if(check($validupto) == '2')
		 $msg.="Check Valid Upto Date";
		if((chkalphanum_title($title) != '2') && (chklen1($type) != '2') && (chklen3($category) != '2') && (check($release_dt) != '2') && (check($validupto) !='2'))
		{
		  $str="update circular_mst set title='".$title."',type='".$type."',category='".$category."',dt_upto='".$validupto."',release_dt='".$release_dt."',doc_path='".$path_filename_ext."',doc_size='".$sfile_size."' where cir_id=".$id; 
           pg_query($connection,$str);			
			header("Location: cms_circulars.php?C=S");
            exit;
		}
		else
		{
			header("Location: cms_circulars.php?C=F");
			
		}
        }
		
	}
else if(!empty($_POST["addSubmit"]))
{
echo "upl";
	
	if($_FILES['txtupload_add']['name']!="")
		{
		fileupload($_FILES['txtupload_add']['name'],$_FILES['txtupload_add']['tmp_name'],$_FILES['txtupload_add']['size']);
		$title =$_POST['title_add'];
        $type = $_POST['type_add'];
        $category = $_POST['category_add'];        
		 $validupto = $_POST['validupto_add'];
		 $release_dt = $_POST['release_dt_add'];		 
		  $path_filename_ext = $_FILES['txtupload_add']['name'];
		  $sfile_size=$_FILES['txtupload_add']['size'];
		   

		   if(chkalphanum_title($title) == '2')
		  $msg.="Check Title";
		 if(chklen1($type) == '2')
		   $msg.="Check Type";
		 if( chklen3($category)=='2')
			$msg.="Check Category";
		if(check($release_dt) == '2')
		  $msg.="Check release Date";
		 if(check($validupto) == '2')
		 $msg.="Check Valid Upto Date";
		if((chkalphanum_title($title) != '2') && (chklen1($type) != '2') && (chklen3($category) != '2') && (check($release_dt) != '2') && (check($validupto) !='2'))
		{    
echo "in";
		  
           echo  $str="insert into circular_mst (type,category,title,release_dt,dt_upto,doc_path,doc_size,submittedby) values('".$type."','".$category."','".$title."','".$release_dt."','".$validupto."','".$path_filename_ext."','".$sfile_size."','rama.a@nic.in')";
			pg_query($connection,$str);
			
			header("Location: cms_circulars.php?C=S");
			
            exit;
			}
			else
			{
			header("Location: cms_circulars.php?C=F");
			
			
			}
        }
}	
		?>
<?php
include 'config/db.php';

$request = 1;
if(isset($_POST['request'])){
    $request = $_POST['request'];
}

// DataTable data
if($request == 1){
 ## Read value
    $draw = $_POST['draw'];
    $rows = $_POST['start'];
    $rowperpage = $_POST['length']; // Rows display per page
   $columnIndex = $_POST['order'][0]['column']; // Column index
    $columnName = "submitted_dt"; // Column name
    $columnSortOrder = "asc"; // asc or desc
 

    $searchValue = pg_escape_string($connection,$_POST['search']['value']); // Search value

    ## Search 
    $searchQuery = " ";
    if($searchValue != ''){
        $searchQuery = " title like '%".$searchValue."%'  ";
    }
	else
	{
	$searchQuery =" title like '%".$searchValue."%'  ";
	}

    ## Total number of records without filtering
    $sel = pg_query($connection,"SELECT count(*) as allcount from news_mst");
    $records = pg_fetch_array($sel);
    $totalRecords = $records['allcount'];

    ## Total number of records with filtering
    $sel = pg_query($connection,"select count(*) as allcount from news_mst WHERE ".$searchQuery);
    $records = pg_fetch_array($sel);
    $totalRecordwithFilter = $records['allcount'];

    ## Fetch records
    $sql = "select * from news_mst WHERE ".$searchQuery." order by ".$columnName."  limit ".$rowperpage." OFFSET ".$rows;
   // $empRecords = pg_query($connection, $empQuery);
    $data = array();
   

//$sql = "SELECT * From circular_mst order by release_dt";
										$query = pg_query($connection, $sql);
										$rowCount = pg_num_rows($query);
										
    while ($row = pg_fetch_array($query)) {

        // Update Button
       // $updateButton = "<button class='btn btn-sm btn-info updateUser' data-id='".$row['cir_id']."' data-toggle='modal' data-target='#updateModal' >Update</button>";
$updateButton = "<i class='fa fa-edit updateUser' data-id='".$row['news_id']."' data-toggle='modal' data-target='#updateModal' ></i>";
        // Delete Button
        $deleteButton = "<i class='fa fa-trash btn-danger deleteUser' data-id='".$row['news_id']."'></i>";
        
        $action = $updateButton." ".$deleteButton;

        $data[] = array(
                "news_id" => $row['news_id'],
                "title" => $row['title'],
                "type" => $row['type'],
                "doc_type" => $row['doc_type'],
				 "url_txt" => $row['url_txt'],
				  "dt_upto" => $row['dt_upto'],
				  "doc_path" => $row['doc_path'],
                "action" => $action
				
				 
            );
    }


    ## Response
    $response = array( 
"draw" => intval($draw),
        "iTotalRecords" => $totalRecords,
        "iTotalDisplayRecords" => $totalRecordwithFilter,	
        "aaData" => $data
    );

    echo json_encode($response);
    exit;
}

// Fetch  details
if($request == 2){
$id = 0;

    if(isset($_POST['id'])){
	$id=$_POST['id'];
       
    }
	$sql = "SELECT * From news_mst where news_id=".$id;
	$query = pg_query($connection, $sql);
	$rowCount = pg_num_rows($query);
								
    $response = array();

    if($rowCount > 0){
      $row = pg_fetch_array($query);
        $response = array(
            
			 "news_id" => $row['news_id'],
                "title" => $row['title'],
                "type" => $row['type'],
                "doc_type" => $row['doc_type'],
				 "url_txt" => $row['url_txt'],
				  "dt_upto" => $row['dt_upto'],
				  "doc_path" => $row['doc_path']
        );

        echo json_encode( array("status" => 1,"data" => $response) );
        exit;
    }else{
        echo json_encode( array("status" => 0) );
        exit;
    }
}

// Update user
if($request == 3){
    $id = 0;

    if(isset($_POST['id'])){
        
		$id=$_POST['id'];
    }

    // Check id
    $record = pg_query($connection,"SELECT * FROM news_mst WHERE news_id=".$id);
    if(pg_num_rows($record) > 0){
		if($_FILES['txtupload']['name']!="")
		{
		fileupload($_FILES['txtupload']['name'],$_FILES['txtupload']['tmp_name'],$_FILES['txtupload']['size']);
		$title =$_POST['title'];
        $type = $_POST['type'];
        $category = $_POST['category'];        
		 $validupto = $_POST['dt_upto'];
		 $release_dt = $_POST['release_dt'];		 
		  $path_filename_ext = $_POST['doc_path'];
		  $sfile_size="100MB";
           
		$str="update news_mst set title='".$title."',type='".$type."',category='".$category."',dt_upto='".$validupto."',release_dt='".$release_dt."',doc_path='".$path_filename_ext."',doc_size='".$sfile_size."' where news_id=".$id; 
           pg_query($connection,$str);
			echo json_encode( array("status" => 1,"message" => "Records Updated") );
            exit;
        }
		else
		{
            echo json_encode( array("status" => 0,"message" => "Please fill all fields.") );
            exit;
        }
        
    }else{
        echo json_encode( array("status" => 0,"message" => "Invalid ID.") );
        exit;
    }
}
if($request == 5){
    echo $_FILES['txtupload_add']['name'];
		if($_FILES['txtupload_add']['name']!="")
		{
		fileupload($_FILES['txtupload_add']['name'],$_FILES['txtupload_add']['tmp_name'],$_FILES['txtupload_add']['size']);
		$title =$_POST['title'];
        $type = $_POST['type'];
        $category = $_POST['category'];        
		 $validupto = $_POST['dt_upto'];
		 $release_dt = $_POST['release_dt'];		 
		  $path_filename_ext = $_POST['doc_path'];
		  $sfile_size="100MB";
           
		echo $str="insert into news_mst (type,category,title,release_dt,dt_upto,doc_path,submittedby,doc_size) 
		values('".$type."','".$category."','".$title."','".$release_dt."','".$validupto."','".$path_filename_ext."','rama.a@nic.in',,'".$file_size."')";

           pg_query($connection,$str);
			echo json_encode( array("status" => 1,"message" =>$_FILES['txtupload_add']['name']) );
            exit;
        }
		else
		{
            echo json_encode( array("status" => 0,"message" => $_FILES['txtupload_add']['name']) );
            exit;
        }
        
    
}

// Delete User
if($request == 4){
    $id = 0;

    if(isset($_POST['id'])){
        $id = mysqli_escape_string($connection,$_POST['id']);
    }

    // Check id
    $record = mysqli_query($connection,"SELECT id FROM users WHERE id=".$id);
    if(mysqli_num_rows($record) > 0){

        mysqli_query($connection,"DELETE FROM users WHERE id=".$id);

        echo 1;
        exit;
    }else{
        echo 0;
        exit;
    }
}
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
//  echo $file_size;exit;die();
	$sfile_ext=strtolower(end(explode('.',$fileup)));
					  $extensions= array("pdf","png");
					 
					  if(in_array($sfile_ext,$extensions)=== false){
						 $msg1="extension not allowed, please choose a JPEG or PNG file.";
					  }
					 
					  
					  if($sfile_size > 2097152){
						 $msg1='File size must be excately 2 MB';
					  }
					  if (file_exists($path_filename_ext)) {
					 $msg="";
					 }else{
					 move_uploaded_file($filetemp,$path_filename_ext);
					 }

}
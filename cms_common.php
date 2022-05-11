			
			<?php
			//include('config/db.php');
			
			$id=$_POST["id"];

			
			 $data="";
			 if($id!="")
			 {
			 $data = photogallery($id);
			echo json_encode($data);
			 }
			 
			 function photogallery($idval)
			 { 
				//$connection = pg_connect("host=localhost port=5435 dbname='mmdchennai' user='postgres' password='rama$5741'");
	 $connection = pg_connect("host='localhost' port=5432 dbname='mmdchennai' user='mmdchennai' password='Wwb#0987'");
				 $sql = "SELECT * From photogallery_mst where event_id=".$idval;
				
																	$query = pg_query($connection, $sql);
																	
																	$data1 = pg_fetch_all($query);
																	
																	return $data1;
			}
																	?>
<?php 

    // Enable us to use Headers
    // ob_start();

    // // Set sessions
    // if(!isset($_SESSION)) {
    //     session_start();
    // }

    /*$hostname = "localhost";
    $username = "postgres";
    $password = "";
    $dbname = "mmdachennai";
	$port="5432";    
   
$con = pg_connect("host=$hostname port=$port dbname=$dbname user=$username password=$password") ;
*/

 $connection = pg_connect("host='localhost' port=5432 dbname='cms' user='postgres' password='postgres'");	

    
?>
<?php
         $dbhost = 'weblab.cs.uml.edu';
         $dbuser = 'alora1';
         $dbpass = 'Haehoo3i';
         $conn = mysql_connect($dbhost, $dbuser, $dbpass);
      
         if(! $conn ) {
            die('Could not connect: ' . mysql_error());
         }
	$mydb = mysqli_select_db ($conn, 'db2') or die ('Could not select database');
         
         echo 'Connected successfully';
         mysql_close($conn);
?>

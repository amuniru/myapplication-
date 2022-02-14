<?php

$Email = $_POST['Email'];
$Password = $_POST['Password'];
$Secret = $_POST['Secret'];
$comment = $_POST['comment'];
       //dadabase connection//
	   $conn = new mysqli('localhost','root','','feedbackapplication');
	   if($conn-connection_error){
		   die('connection Faild : '.$conn->connect_error);
	   }else{
		     $stmt = $conn->prepare("insert into feedbackapplication(Email,Password,Secret,comment) 
			                                                  values(?,?,?,?)");
			 $stmt->bind_param("ssssi",$Email,$Password,$Secret,$comment,$number);
			  $stmt->execute();
			  echo" successfully done";
		      $stmt->close();
	   $conn->close();}
			  
?>
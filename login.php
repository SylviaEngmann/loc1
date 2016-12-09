<?php

			
	
			$mysqli= new mysqli('localhost','root','','locate');

			
			if($mysqli->connect_errno!=0){
				echo "error authenticating-connection {$mysqli->connect_error}";
				exit();
			}
			
			
			$email=$_REQUEST['email'];
			$pword=$_REQUEST['pword'];
			
			
			$query="select * from reg WHERE Email='$email' and Password='$pword'";
			
			$result=$mysqli->query($query);
			
			if(!$result){
				echo "error authenticating";
				exit();
			}
			
			$row=$result->fetch_assoc();
			
			
			if(!$row){
				$response='<div style="position:absolute; top:300px; font-size:25px; color:red; margin-left:41%;">Username or Password is wrong.</div>';
				echo $response;
			}else{
				session_start();
				$_SESSION['user']=$row;
				header("Location: /loc/index1.html");
				
				}
				
		
?>
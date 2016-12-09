<?php
	
	if(!isset($_REQUEST['cmd'])){
		echo "cmd is not provided";
		exit();
	}
	
	$cmd=$_REQUEST['cmd'];
	switch($cmd){
		case 1:
			reg();		
			break;
			
	
		default:
			echo "wrong cmd";
			break;
	}
	
	
	function reg(){
		if(!isset($_REQUEST['name'])){
			echo "Name is not given";	
			exit();
		}
		
		$name=$_REQUEST['name'];
		$pword=$_REQUEST['pword'];
		$org=$_REQUEST['org'];
		$phone=$_REQUEST['num'];
		$email=$_REQUEST['email'];
		
		
		include_once("func.php");
		$obj=new func();
		
		if($obj->reg($name,$pword,$email,$phone,$org)){
			echo "User added";
		}else{
			echo "User not added";
		}
		
		$sender = "Locate";
		$msg = "$name you successfully registered for the find app";
		$user = "mobileapp";
		$pwd = "foobar";
		$smsc = "smscMTN";
		
		$msg= preg_replace('/\s+/', '%20', $msg);

		
		$url = 'http://52.89.116.249:13013/cgi-bin/sendsms?username='.$user.'&password='.$pwd.'&to='.$phone.'&from='.$sender.'&smsc='.$smsc.'&text='.$msg.'';
		
		
		$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result=curl_exec($ch);
	}
	
?>

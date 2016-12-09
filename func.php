<?php
include_once("adb.php");

class func extends adb{
	function func(){
	}
	
	
	function reg($name,$pword,$email,$phone,$org){
		
		$strQuery="insert into reg set Name='$name',
										Password='$pword',
										   Organisation='$org', 
										   Phone='$phone', 
										   Email='$email'";
		
	    $result=$this->query($strQuery);
		return $result;
		
		
	}
	
	function getreq($id){
		$strQuery="select * from req where member='$id'";
		return $this->query($strQuery);
	}
	
	function getres($id){
		$strQuery="select * from book where member='$id'";
		return $this->query($strQuery);
	}
	
	function getroo($id){
		$strQuery="select * from hotel where member='23'";
		return $this->query($strQuery);
	}
	
	function Areq($id){
		$strQuery="SELECT * FROM `req` WHERE 1";
		return $this->query($strQuery);
	}
	
	function getAres($id){
		$strQuery="SELECT * FROM `book` WHERE 1";
		return $this->query($strQuery);
	}
	
	function getAroo($id){
		$strQuery="SELECT * FROM `hotel` WHERE 1";
		return $this->query($strQuery);
	}
}

	
?>
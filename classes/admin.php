<?php
	include_once'common_methods.php';
	class Admin extends Common_Methods{
		private $adminName;
		private $Password;
		private $email;
		
		function getadminname(){return $this->adminName;}
		function getpassword(){return $this->password;}
		function getemail(){return $this->email;}
		
		function setadminname($arg){$this->adminName=$arg;}
		function setpassword($arg){$this->password=$arg;}
		function setemail($arg){$this->email=$arg;}
		
		function select($sql){
			$query="AdminName='".$this->adminName."' AND passwordd=md5('".$this->password."')";
			$conn=new Connection();
			$result=$conn->executeQuery($sql.$query);
			return $result;
		}
	}
?>
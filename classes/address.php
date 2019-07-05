<?php
	include_once'common_methods.php';
	class Address extends Common_methods{
		private $city;
		private $coordinate;
		private $housenumber;
		private $woreda;
		
		function getcity(){return $this->city;}
		function getcoordinate(){return $this->coordinate;}
		function gethousenumber(){return $this->housenumber;}
		function getworeda(){return $this->woreda;}
		
		function setcity($arg){$this->city=$arg;}
		function setcoordinate($arg){$this->coordinate=$arg;}
		function sethousenumber($arg){$this->housenumber=$arg;}
		function setworeda($arg){$this->woreda=$arg;}
		
		function upadateAddress(){
			$sql="UPDATE address SET city='".$this->city.
					"',coordinate='".$this->coordinate."',HouseNumber='".$this->coordinate.
						"',woreda='".$this->woreda."';";
			$conn=new Connection();	
			if($conn->executeQuery($sql)){
				echo("<h5>address edited successfuly</h5>");
			}
			else{
				echo"Error: ".$sql.$value."--(".$conn->error().")";
			}
		}
	}
?>
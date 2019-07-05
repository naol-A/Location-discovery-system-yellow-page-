<?php
	include_once'common_methods.php';
	class Company extends Common_methods{
		private $cid;
		private $name;
		private $phonenumber;
		private $email;
		private $categoryName;
		private $houseNumber;
		
		function getCid(){return $this->cid;}
		function getName(){return $this->name;}
		function getPhoneNumber(){return $this->phonenumber;}
		function getEmail(){return $this->email;}
		function getCname(){return $this->categoryName;}
		function getHouseNum(){return $this->houseNumber;}
		
		function setCid($arg){$this->cid=$arg;}
		function setName($arg){$this->name=$arg;}
		function setPhoneNumber($arg){$this->phonenumber=$arg;}
		function setEmail($arg){$this->email=$arg;}
		function setCname($arg){$this->categoryName=$arg;}
		function setHouseNum($arg){$this->houseNumber=$arg;}
		
		function addCompany(){
			$sql="INSERT INTO company(CID,name,phonenumber,email,cname,HouseNumber) 
				VALUES (NULL,'".$this->name."','".$this->phonenumber."','".$this->email."','"
				.$this->categoryName."','".$this->houseNumber."');";
			$conn=new Connection();
			$conn->executeQuery($sql);
			echo $sql;
		}
		function deleteCompany(){
			$sql="DELETE FROM company WHERE CID=".$this->cid.";";
			$conn=new Connection();
			$conn->executeQuery($sql);
		}
		function updateCompany(){
			$col;
			$sql="UPDATE comapany SET ";
			$conn=new Connection();
			if($this->name!=""){
				$col+="name='".$this->name."'";
			}
			elseif($this->phonenumber==""){
				$col+="phoneNumber='".$this->phonenumber."'";
			}
			elseif($this->email==""){
				$col+="email='".$this->email."'";
			}
			elseif($this->houseNumber==""){
				$col+="HouseNumber='".$this->houseNumber."'";
			}
			$conn->execuetQuery($sql.$col." WHERE CID=".$this->cid.";");
		}
	}
?>
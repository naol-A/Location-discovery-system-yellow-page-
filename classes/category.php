<?php
	include_once'common_methods.php';
	class Category extends Common_methods{
		private $catid;
		private $categoryname;
		
		function getCatid(){return $this->catid;}
		function getCategoryname(){return $this->categoryname;}
		
		function setCatif($arg){$this->catid=$arg;}
		function setCategoryname($arg){$this->categoryname=$arg;}
		
		function addCategory(){
			$sql="INSERT INTO category VALUES(NULL,'".$this->categoryname."');";
			$conn=new Connection();
			$conn->executeQuery($sql);
		}
	}
?>
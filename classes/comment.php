<?php
	include_once'common_methods.php';
	class Comment extends Common_methods{
		private $comment;
		private $commented_by;
		private $approved;
		private $type;
		
		function getcomment(){return $this->comment;}
		function getcommented_by(){return $this->commented_by;}
		function getapproved(){return $this->approved;}
		function get_type(){return $this->type;}
		
		function setcomment($arg){$this->comment=$arg;}
		function setcommented_by($arg){$this->commented_by=$arg;}
		function setapproved($arg){$this->approved=$arg;}
		function set_type($arg){$this->type=$arg;}
		
		function addComment(){
			$sql="INSERT INTO comment(comment,commented_by,approved,type) VALUES('"
					.$this->comment."','".$this->commented_by."','".$this->approved."','".$this->type."');";
			$conn=new Connection();
			return $conn->executeQuery($sql);
		}
		function updateApprove(){
			$sql="UPDATE comment SET approved='".$this->approved."' WHERE comment='"
				.$this->comment."' AND commented_by='".$this->commented_by."';";
			$conn=new Connection();
			$conn->executeQuery($sql);
		}
	}
?>
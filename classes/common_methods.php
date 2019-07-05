<?php
	include_once'connection.php';
	class Common_methods{
		function select($sql){
			$conn=new Connection();
			$result=$conn->executeQuery($sql);
			return $result;
		}
	}
?>
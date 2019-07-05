<div id="comment_b" class="comment_b">
	<span>Messages > comments</span><hr />
	<table border="1" width="90%">
	<tr>
		<th>Commented by</th>
		<th>Comment</th>
		<th>type</th>
	</tr>
	<?php
		include_once'../classes/comment.php';
		$sql="SELECT * FROM comment";
		$result=$conn->executeQuery($sql);
		if($result->num_rows>0){
			while($row = $result->fetch_assoc()) {
				echo "<tr id='".$row["commented_by"]."_".$row["comment"]."' onclick='selectrecord(\"".$row["commented_by"]."\",\""
					.$row["comment"]."\")'><td>". $row["commented_by"]. "</td><td>" . $row["comment"]."</td><td>".$row["type"]."</td></tr>";
			}
		}
		else {
			echo "<tr><td colspan='3'>no comment</td></tr>";
		}
		
		if(count($_GET)>0&&(array_key_exists("commentedBy",$_GET)&&array_key_exists("comment",$_GET))){
			$commentApp=new Comment();
			$commentApp->setcomment($_GET["comment"]);
			$commentApp->setcommented_by($_GET["commentedBy"]);
			if(array_key_exists("approved",$_GET)){
				$commentApp->setapproved("approved");}
			else{
				$commentApp->setapproved("notsuitable");}
			$commentApp->updateApprove();
		}
	?>
	</table>
	<table border="0" width="90%">
	<form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<tr>
		<td><input id="commentedby" type="hidden" name="commentedBy" /></td>
		<td><input id="comment" type="hidden" name="comment" /></td>
	</tr>
	<tr>
		<td><input type="submit" value="approved" name="approved" /></td>
		<td><input type="submit" value="not suitable" name="not_suitable" /></td>
	</tr>
	</form>
	</table>
</div>
<script>
	var commeted=document.getElementById("commentedby");
	var comm=document.getElementById("comment");
	
	function selectrecord(user,comment){
		commeted.value=user;
		comm.value=comment;
		document.getElementById(user+"_"+comment).style.backgroundColor="blue";
	}
</script>
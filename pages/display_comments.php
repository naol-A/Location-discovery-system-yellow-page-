<style>
	#user{
		font-size:14px;
		color:#00804d;
	}
	#comment{
		font-size:12px;
	}
	#display_comment{
		width:100%;
		background-color:#99ffcc;
		border-style:solid;
		border-width:2px 0 2px 0;
		border-color:gray;
		margin-top:30px;
	}
	#display_lay{
		margin-left:10%;
</style>
<div id="display_comment">
<center>Comments</center>
<hr />
<table id="display_lay">
<?php
	include_once'classes/comment.php';
	$sql="SELECT * FROM comment WHERE approved='approved' AND type='comment' LIMIT 5;";
	$comment=new Comment();
	$result=$comment->select($sql);
	if($result->num_rows>0){
		while($row = $result->fetch_assoc()){
			echo"<tr><td><span id='user'>".$row["commented_by"]."-+</span></td><td><span id='comment'>"
				.$row["comment"]."</span></td></tr>";
		}
	}
?>
</table>
</div>
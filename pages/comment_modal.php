<style>
	.comment_modal{
		display:none; /* Hidden by default */
		position: fixed; /* Stay in place */
		z-index: 1; /* Sit on top */
		padding-top: 100px; /* Location of the box */
		left: 0;
		top: 0;
		width: 100%; 
		height: 100%; 
		overflow: auto; 
		background-color: rgb(0,0,0); 
		background-color: rgba(0,0,0,0.4);
	}
	#commentmodal{
		position: relative;
		background-color: #00ff99;
		margin: auto;
		padding: 0;
		border: 1px solid #888;
		width: 35%;
		box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
	}
	.close_comment {
		color: black;
		float: right;
		font-size: 28px;
		font-weight: bold;
	}
	.close_comment:hover,
	.close_comment:focus {
		color: #000;
		text-decoration: none;
		cursor: pointer;
	}
	#commentmodal input{
		margin:auto;
		width:100%;
	}
	#commentmodal textarea{
		width:100%;
	}
	input[type="submit"]{
		width:100%;
		padding:6px;
		background-color:#80ffbf;
		border-radius:5%;
	}
</style>
<div id="comment_modal" class="comment_modal">
<div id="commentmodal" class="commentmodal">
	<span class="close_comment">X</span>
	<table border="0" width="100%" height="40%">
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
		<tr>
			<th colspan="2"><span>For any comment or suggestions</span></th>
		</tr>
		<tr>
			<td colspan="2"><hr/></td>
		</tr>
		<tr>
			<td>comment</td>
		</tr>
		<tr>
			<td colspan="2"><textarea rows="6" col="7" name="commentBox"></textarea></td>
		</tr>
		<tr>
			<td>username</td>
		</tr>
		<tr>
			<td colspan="2"><input type="text" name="username" /></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="submit" value="send it" /></td>
		</tr>
		</form>
	</table>
</div>
</div>
<?php
	include_once'classes/comment.php';
	if(count($_POST)>0&&(array_key_exists("commentBox",$_POST))){
		$comment=new Comment();
		$comment->setcomment($_POST["commentBox"]);
		$comment->setcommented_by($_POST["username"]);
		$comment->setapproved("notapproved");
		$comment->set_type("comment");
		$comment->addComment();
		echo "<style>#intro_modal{display:none;}</style>";
	}
?>
<script>
	var comment_modal = document.getElementById('comment_modal');
	var comment_btn = document.getElementById("commentbtn");
	var close_comment_btn = document.getElementsByClassName("close_comment")[0];

	comment_btn.onclick = function() {
		comment_modal.style.display = "block";
	}

	close_comment_btn.onclick = function() {
		comment_modal.style.display = "none";
	}
</script>
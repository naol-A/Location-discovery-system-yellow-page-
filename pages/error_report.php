<style>
	.report_modal{
		display:none;display: none; /* Hidden by default */
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
	#report{
		position: relative;
		background-color: #00ff99;
		margin: auto;
		padding: 0;
		border: 1px solid #888;
		width: 35%;
		box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
	}
	.close_report{
		color: black;
		float: right;
		font-size: 28px;
		font-weight: bold;
	}
	.close_report:hover,
	.close_report:focus {
		color: #000;
		text-decoration: none;
		cursor: pointer;
	}
	#report input{
		width:100%;
	}
	#report textarea{
		width:100%;
	}
</style>
<div id="report_modal" class="report_modal">
<div id="report" class="report">
	<span class="close_report">X</span>
	<table border="0" width="100%">
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
		<tr>
			<th colspan="2"><span>Error or bugreport</span></th>
		</tr>
		<tr>
			<td colspan="2"><hr/></td>
		</tr>
		<tr>
			<td>Bug description</td>
		</tr>
		<tr>
			<td colspan="2"><textarea rows="6" col="7" name="reportBox"></textarea></td>
		</tr>
		<tr>
			<td>username</td>
		</tr>
		<tr>
			<td colspan="2"><input type="text" name="username" /></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="submit" value="report" /></td>
		</tr>
		</form>
	</table>
</div>
</div>
<?php
	if(count($_POST)>0&&(array_key_exists("reportBox",$_POST))){
		$comment=new Comment();
		$comment->setcomment($_POST["reportBox"]);
		$comment->setcommented_by($_POST["username"]);
		$comment->setapproved("notapproved");
		$comment->set_type("errorreport");
		$comment->addComment();
		echo "<style>#intro_modal{display:none;}</style>";
	}
?>
<script>
	var report_modal = document.getElementById('report_modal');
	var report_btn = document.getElementById("report_bug");
	var close_report_btn = document.getElementsByClassName("close_report")[0];

	report_btn.onclick = function() {
		report_modal.style.display = "block";
	}

	close_report_btn.onclick = function() {
		report_modal.style.display = "none";
	}
</script>
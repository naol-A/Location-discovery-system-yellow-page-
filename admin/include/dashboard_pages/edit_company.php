<style>
	.edit_modal{
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
	#editform{
		position: relative;
		background-color: #00ff99;
		margin: auto;
		padding: 0;
		border: 1px solid #888;
		width: 35%;
		box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
	}
	.close_edit{
		color: black;
		float: right;
		font-size: 28px;
		font-weight: bold;
	}
	.close_edit:hover,
	.close_edit:focus {
		color: #000;
		text-decoration: none;
		cursor: pointer;
	}
	#editform input{
		margin:auto;
		width:100%;
	}
	input[type="submit"]{
		width:100%;
		padding:6px;
		background-color:#80ffbf;
		border-radius:5%;
	}
</style>
<div id="edit_modal">
<div id="editform">
	<span class="close_edit">X</span>
	<table width="100%">
		<tr>
			<th colspan="2">Edit company</th>
		</tr>
		<tr>
			<td colspan="2"><hr /></td>
		</tr>
		<tr>
			<td>Company name:</td>
			<td><input type="text" id="compname" name="compname"/></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><input type="text" id="email" name="email"/></td>
		</tr>
		<tr>
			<td>Address:</td>
			<td><input type="text" id="address" name="address"/></td>
		</tr>
		<tr>
			<td>PhoneNumber</td>
			<td><input type="text" id="phonenumber" name="phonenum"/></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" value="Done" onclick="editcomp()"/></td>
		</tr>
	</table>
</div>
</div>
<script>
	var compname=document.getElementById("compname");
	var email=document.getElementById("email");
	var address=document.getElementById("address");
	var phonenumber=document.getElementById("phonenumber");
	var compid=document.getElementById("compid");
	
	function editcomp(){
		window.location="index.php?cid="+compid.value+"compname="+compname.value+
						"&email="+email.value+"&address="+email.value+
						"&phonenumber="+phonenumber+"&edit=1";
	}
	var edit_modal = document.getElementById('edit_modal');
	var edit_btn = document.getElementById("editbtn");
	var close_edit_btn = document.getElementsByClassName("close_edit")[0];

	edit_btn.onclick = function() {
		edit_modal.style.display = "block";
	}

	close_edit_btn.onclick = function() {
		edit_modal.style.display = "none";
	}
</script>
<style>
	.add_new_modal{
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
	#add_org_user{
		position: relative;
		background-color: #00ff99;
		margin: auto;
		padding: 0;
		border: 1px solid #888;
		width: 40%;
		box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
	}
	.close_add_new {
		color: black;
		float: right;
		font-size: 28px;
		font-weight: bold;
	}
	.close_add_new:hover,
	.close_add_new:focus {
		color: #000;
		text-decoration: none;
		cursor: pointer;
	}
</style>
<div id="add_new_modal" class="add_new_modal">
<div id="add_org_user" class="add_org_user">
	<span class="close_add_new">X</span>
	<table border="0" width="100%" height="40%">
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
		<tr>
			<th colspan="4">Add new organization</th>
		</tr>
		<tr>
			<td colspan="4"><hr/></td>
		</tr>
		<tr>
			<td>Organization name</td>
			<td><input type="text" name="name" /></td>
		</tr>
		<tr>
			<td>PhoneNumber</td>
			<td><input type="text" name="phone" /></td>
			<td>Category</td>
			<td><input list="category" name="category" />
				<datalist id="category">
					<?php
						include_once'classes/category.php';
						$query="SELECT cname FROM category";
						$category=new Category();
						$result=$category->select($query);
						if($result->num_rows>0){
							while($data=$result->fetch_assoc()){
								echo "<option value='".$data['cname']."' />";
							}
						}
						else{
							echo "<option value='none' >";
						}
					?>
			</datalist></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="text" name="email" /></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><input type="text" name="address" /></td>
		</tr>
		<tr>
			<td colspan="4"><input type="submit" name="add_organization" value="Add" /></td>
		</tr>
		<?php
			$company=new Company();
			if(count($_POST)>0&&(array_key_exists("name",$_POST))){
				$company->setName($_POST["name"]);
				$company->setPhoneNumber($_POST["phone"]);
				$company->setEmail($_POST["email"]);
				$company->setCname($_POST["category"]);
				$company->setHouseNum($_POST["address"]);
				$company->addCompany();
				echo "<style>#intro_modal{display:none;}</style>";
			}
		?>
		</form>
	</table>
</div>
</div>
<script>
	var add_modal = document.getElementById('add_new_modal');
	var add_btn = document.getElementById("add_org_gen");
	var close_btn = document.getElementsByClassName("close_add_new")[0];

	add_btn.onclick = function() {
		add_modal.style.display = "block";
	}

	close_btn.onclick = function() {
		add_modal.style.display = "none";
	}
</script>
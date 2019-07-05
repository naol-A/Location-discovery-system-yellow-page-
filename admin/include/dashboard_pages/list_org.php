<div id="list_org" class="list_org">
	<?phpinclude'edit_company.php';?>
	<span>action > organizations</span><hr />
	<table border="1" cellpadding="5px">
		<tr>
			<th>company id</th>
			<th>company name</th>
			<th>phone number</th>
			<th>email></th>
			<th>category</th>
			<th>house number</th>
		<tr>
		<?php
			include'../classes/company.php';
			$sql="SELECT * FROM company";
			$complist=new Company();
			$result=$complist->select($sql);
			if($result->num_rows>0){
				while($rows=$result->fetch_assoc()){
					echo"<tr id='comp".$rows["CID"]."' onclick='selectCompany(\"".$rows["CID"].
						"\")'><td>".$rows["CID"]."</td><td>".$rows["name"]."</td><td>"
						.$rows["phoneNumber"]."</td><td>".$rows["email"]."</td><td>"
						.$rows["cname"]."</td><td>".$rows["HouseNumber"]."</td></tr>";
				}
			}
			else{
				echo"<tr><td colspan='6'>no company available</td></tr>";
			}
			if(count($_GET)&&(array_key_exists("compid",$_GET))){
				$compman=new Company();
				if($_POST["delete"]=="delete"){
					$compman->setCid($_POST["compid"]);
					$compman->deleteCompany();
				}
			}
			if(count($_GET)&&(array_key_exists("edit",$_POST))){
				$compman=new Company();
				$compman->setCid($_POST["cid"]);
				$compman->setName($_POST["name"]);
				$compman->setPhoneNumber($_POST["phonenumber"]);
				$compman->setAddress($_POST["address"]);
				$compman->setEmail($_POST["email"]);
				$compman->updateCompany();
			}
		?>
	</table>
	<table>
		<form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<tr>
			<td><input type="hidden" id="compid" name="compid"/></td>
		</tr>
		<tr>
			<td><input type="button" value="delete" name="delete" /></td>
			<td><input type="button" value="edit" name="editorg" id="editbtn"/></td>
		</tr>
		<form>
	</table>
</div>

<script>
	var compid=document.getElementById("compid");
	var editbtn=document.getElementById("editbtn");
	var editform=document.getElementById("editform");
	
	editbtn.onclick=function(){
		editform.style.display="block";
	}
	function selectCompany(cid){
		compid.value=cid;
		document.getElementById("comp"+cid).style.backgroundColor="blue";
	}
</script>
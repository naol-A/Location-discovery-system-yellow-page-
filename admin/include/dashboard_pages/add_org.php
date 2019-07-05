<div id="add_org" class="add_org">
	<span>action > add new organization</span><hr />
	<form id="add_form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
		<span>company name:</span><br />
		<input type="text" name="cname" /><br />
		<span>phone nummber:</span><br />
		<input type="tel" name="phonenum" /><br />
		<span>email:</span><br />
		<input type="text" name="email" /><br />
		<span>category:</span><br />
		<input list="category" name="cat" />
		<datalist id="category">
			<?php
				include_once'../classes/category.php';
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
		</datalist>
		<span id="newCat">+new category</span><br />
		<span>home number:</span><br />
		<input type="text" name="hnum" />
		<span id="newAdress">+new address</span><br />
		<input type="submit" value="add new" /><br />
		<?php
			if(count($_POST)!=0&&array_key_exists("cname",$_POST)){
				$sql="INSERT INTO company(CID,name,phonenumber,email,cname,HouseNumber)".
						"VALUE (NULL,'".$_POST["cname"]."','".$_POST["phonenum"]."','".$_POST["email"]."','"
						.$_POST["cat"]."','".$_POST["hnum"]."')";
						
				if($conn->executeQuery($sql)){
					echo("<h5>New company added successfully</h5>");
				}
				else{
					echo"Error: ".$sql.$value."--(".$conn->error().")";
				}
			}
		?>
	</form>
</div>
<script>
	var newcat=document.getElementById("newCat");
	var newAdress=document.getElementById("newAdress");
	
	newCat.onclick=function(){
	}
	newAdress.onclick=function(){
	}
</script>